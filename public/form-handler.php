<?php
// Contact form handler — sends inquiry to info@softercolor.com via PHPMailer
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load .env (simple key=value parser — no extra library needed)
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$key, $value] = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
    }
}

// Validate request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact');
    exit;
}

// ── Human verification (bot screening, no external API) ──────────────
// 1. Honeypot: real users never see/fill this field (hidden via CSS).
// 2. Timing trap: forms submitted faster than a human can realistically
//    read + fill (or after the session has expired) are rejected.
// 3. Math challenge: answer must match the one generated for this session.
if (!empty($_POST['website'])) {
    error_log('Contact form blocked: honeypot filled');
    header('Location: /contact?error=bot');
    exit;
}

$formTs = (int)($_POST['form_ts'] ?? 0);
$elapsed = time() - $formTs;
if ($formTs <= 0 || $elapsed < 3 || $elapsed > 1800) {
    error_log("Contact form blocked: timing trap (elapsed={$elapsed}s)");
    header('Location: /contact?error=bot');
    exit;
}

$humanCheck = trim($_POST['human_check'] ?? '');
$expected   = $_SESSION['hc_answer'] ?? null;
if ($expected === null || !ctype_digit($humanCheck) || (int)$humanCheck !== (int)$expected) {
    error_log('Contact form blocked: human verification failed');
    unset($_SESSION['hc_answer'], $_SESSION['hc_issued_at']);
    header('Location: /contact?error=bot');
    exit;
}
unset($_SESSION['hc_answer'], $_SESSION['hc_issued_at']);

// Sanitize inputs
$name         = htmlspecialchars(trim($_POST['name'] ?? ''));
$email        = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$company      = htmlspecialchars(trim($_POST['company'] ?? ''));
$inquiry_type = htmlspecialchars(trim($_POST['inquiry_type'] ?? ''));
$message      = htmlspecialchars(trim($_POST['message'] ?? ''));

if (!$name || !$email || !$inquiry_type || !$message) {
    header('Location: /contact?error=1');
    exit;
}

// Build email body
$body = "
<h2>New Inquiry — Softercolor Website</h2>
<table>
  <tr><td><strong>Name:</strong></td><td>{$name}</td></tr>
  <tr><td><strong>Email:</strong></td><td>{$email}</td></tr>
  <tr><td><strong>Company:</strong></td><td>{$company}</td></tr>
  <tr><td><strong>Inquiry Type:</strong></td><td>{$inquiry_type}</td></tr>
</table>
<h3>Message</h3>
<p>{$message}</p>
";

// Send via PHPMailer
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'] ?? 'smtp.hostgator.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER'] ?? '';
    $mail->Password   = $_ENV['SMTP_PASS'] ?? '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int)($_ENV['SMTP_PORT'] ?? 587);

    $mail->setFrom($_ENV['SMTP_USER'] ?? 'adamwang@softercolor.com', $_ENV['SMTP_FROM_NAME'] ?? 'Softercolor Website');
    $mail->addAddress($_ENV['CONTACT_TO'] ?? 'info@softercolor.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "[Softercolor] New Inquiry: {$inquiry_type} from {$name}";
    $mail->Body    = $body;

    $mail->send();
    header('Location: /contact?sent=1');
} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    header('Location: /contact?error=1');
}
exit;
