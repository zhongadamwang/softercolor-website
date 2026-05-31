<?php
// Contact form handler — sends inquiry to info@softercolor.com via PHPMailer

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
    header('Location: /contact.php');
    exit;
}

// Sanitize inputs
$name         = htmlspecialchars(trim($_POST['name'] ?? ''));
$email        = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$company      = htmlspecialchars(trim($_POST['company'] ?? ''));
$inquiry_type = htmlspecialchars(trim($_POST['inquiry_type'] ?? ''));
$message      = htmlspecialchars(trim($_POST['message'] ?? ''));

if (!$name || !$email || !$inquiry_type || !$message) {
    header('Location: /contact.php?error=1');
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

    $mail->setFrom($_ENV['SMTP_FROM'] ?? 'info@softercolor.com', $_ENV['SMTP_FROM_NAME'] ?? 'Softercolor Website');
    $mail->addAddress($_ENV['CONTACT_TO'] ?? 'info@softercolor.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "[Softercolor] New Inquiry: {$inquiry_type} from {$name}";
    $mail->Body    = $body;

    $mail->send();
    header('Location: /contact.php?sent=1');
} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    header('Location: /contact.php?error=1');
}
exit;
