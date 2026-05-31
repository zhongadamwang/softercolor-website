<?php
// Softercolor Website — Contact
require_once __DIR__ . '/../src/layout/header.php';

$success = isset($_GET['sent']) && $_GET['sent'] === '1';
$error   = isset($_GET['error']) && $_GET['error'] === '1';
?>

<main>
  <section class="page-hero">
    <h1>Contact Us</h1>
    <p>Let's talk about what you're building.</p>
  </section>

  <section class="contact-content">
    <?php if ($success): ?>
      <div class="alert alert-success">Your message has been sent. We'll be in touch soon.</div>
    <?php elseif ($error): ?>
      <div class="alert alert-error">Something went wrong. Please try again or email us directly at <a href="mailto:info@softercolor.com">info@softercolor.com</a>.</div>
    <?php endif; ?>

    <form action="/form-handler.php" method="POST">
      <div class="form-group">
        <label for="name">Name <span class="required">*</span></label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email <span class="required">*</span></label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="company">Company / Organization</label>
        <input type="text" id="company" name="company">
      </div>

      <div class="form-group">
        <label for="inquiry_type">Inquiry Type <span class="required">*</span></label>
        <select id="inquiry_type" name="inquiry_type" required>
          <option value="">— Select —</option>
          <option value="Software Development Consulting">Software Development Consulting</option>
          <option value="AI Consulting Service">AI Consulting Service</option>
          <option value="Product / Licensing Inquiry">Product / Licensing Inquiry</option>
          <option value="General Inquiry">General Inquiry</option>
        </select>
      </div>

      <div class="form-group">
        <label for="message">Message <span class="required">*</span></label>
        <textarea id="message" name="message" rows="6" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <div class="contact-direct">
      <p>Or reach us directly: <a href="mailto:info@softercolor.com">info@softercolor.com</a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
