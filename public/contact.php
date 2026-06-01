<?php
// softercolor — Contact
require_once __DIR__ . '/../src/layout/header.php';

$success = isset($_GET['sent']) && $_GET['sent'] === '1';
$error   = isset($_GET['error']) && $_GET['error'] === '1';

// Pre-select inquiry type if passed via query string
$preSelected = htmlspecialchars($_GET['inquiry'] ?? '');
$inquiryMap = [
  'software-consulting' => 'Software Development Consulting',
  'ai-consulting'       => 'AI Consulting Service',
  'product-licensing'   => 'Product / Licensing Inquiry',
];
$preInquiry = $inquiryMap[$preSelected] ?? '';
?>

<main>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="tag">Contact</span>
      <h1 style="margin-top: var(--space-4);">Let's talk about<br>what you're building.</h1>
      <p class="lead" style="margin-top: var(--space-4);">Tell us about your project. We'll get back to you within one business day.</p>
    </div>
  </section>

  <!-- Contact Form + Info -->
  <section>
    <div class="container">
      <div class="grid-2" style="align-items: start; gap: var(--space-16);">

        <!-- Form -->
        <div>
          <?php if ($success): ?>
            <div class="alert alert-success">Your message has been sent — we'll be in touch soon.</div>
          <?php elseif ($error): ?>
            <div class="alert alert-error">Something went wrong. Please try again or email us at <a href="mailto:info@softercolor.com">info@softercolor.com</a>.</div>
          <?php endif; ?>

          <form action="/public/form-handler.php" method="POST" novalidate>
            <div class="grid-2" style="gap: var(--space-4);">
              <div class="form-group" style="margin-bottom: 0;">
                <label for="name">Name <span style="color: var(--color-error);">*</span></label>
                <input type="text" id="name" name="name" autocomplete="name" required>
              </div>
              <div class="form-group" style="margin-bottom: 0;">
                <label for="email">Email <span style="color: var(--color-error);">*</span></label>
                <input type="email" id="email" name="email" autocomplete="email" required>
              </div>
            </div>

            <div class="form-group" style="margin-top: var(--space-4);">
              <label for="company">Company / Organization <span style="color: var(--color-slate); font-weight: 400;">(optional)</span></label>
              <input type="text" id="company" name="company" autocomplete="organization">
            </div>

            <div class="form-group">
              <label for="inquiry_type">Inquiry Type <span style="color: var(--color-error);">*</span></label>
              <select id="inquiry_type" name="inquiry_type" required>
                <option value="">— Select —</option>
                <option value="Software Development Consulting" <?= $preInquiry === 'Software Development Consulting' ? 'selected' : '' ?>>Software Development Consulting</option>
                <option value="AI Consulting Service" <?= $preInquiry === 'AI Consulting Service' ? 'selected' : '' ?>>AI Consulting Service</option>
                <option value="Product / Licensing Inquiry" <?= $preInquiry === 'Product / Licensing Inquiry' ? 'selected' : '' ?>>Product / Licensing Inquiry</option>
                <option value="General Inquiry">General Inquiry</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Message <span style="color: var(--color-error);">*</span></label>
              <textarea id="message" name="message" rows="6" placeholder="Tell us about your project, challenge, or question..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Send Message</button>
            <p class="form-note" style="text-align: center; margin-top: var(--space-3);">We typically respond within one business day.</p>
          </form>
        </div>

        <!-- Contact Info -->
        <div style="display: flex; flex-direction: column; gap: var(--space-6);">
          <div class="card">
            <h4 style="margin-bottom: var(--space-3);">Email us directly</h4>
            <p><a href="mailto:info@softercolor.com" style="font-weight: 600; font-size: var(--text-lg);">info@softercolor.com</a></p>
          </div>
          <div class="card">
            <h4 style="margin-bottom: var(--space-3);">What to expect</h4>
            <p style="font-size: var(--text-sm);">We review every inquiry personally and respond with a thoughtful reply — not a template. If your project is a good fit, we'll suggest a brief call to learn more.</p>
          </div>
          <div class="card">
            <h4 style="margin-bottom: var(--space-3);">Good fit for softercolor</h4>
            <ul style="display: flex; flex-direction: column; gap: var(--space-2); margin-top: var(--space-2);">
              <li style="font-size: var(--text-sm); color: var(--color-slate);">✓ Organizations building custom enterprise software</li>
              <li style="font-size: var(--text-sm); color: var(--color-slate);">✓ Teams looking to adopt AI-assisted development</li>
              <li style="font-size: var(--text-sm); color: var(--color-slate);">✓ Projects where quality and evolvability matter</li>
              <li style="font-size: var(--text-sm); color: var(--color-slate);">✓ Founders building a software product from scratch</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
