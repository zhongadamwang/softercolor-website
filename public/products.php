<?php
// softercolor — Products
require_once __DIR__ . '/../src/layout/header.php';
?>

<main>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="tag">Products</span>
      <h1 style="margin-top: var(--space-4);">Purpose-built software.<br>Coming soon.</h1>
      <p class="lead" style="margin-top: var(--space-4);">We're developing a suite of proprietary software products for desktop, web, and mobile — built with the same rigor as our consulting work.</p>
    </div>
  </section>

  <!-- Placeholder -->
  <section>
    <div class="container">
      <div style="max-width: 640px; margin-inline: auto; text-align: center;">
        <h2 style="margin-bottom: var(--space-6);">Products in development</h2>
        <p>Our products are being designed and built using the EDPS methodology — starting from a clear domain model and evolving through structured delivery phases.</p>
        <p style="margin-top: var(--space-4);">We'll announce each product as it moves toward availability. If you're interested in early access or licensing, reach out.</p>
        <div style="display: flex; gap: var(--space-4); justify-content: center; margin-top: var(--space-10); flex-wrap: wrap;">
          <div class="card" style="text-align: left; flex: 1; min-width: 180px;">
            <span class="tag" style="margin-bottom: var(--space-4); display: inline-block;">Desktop</span>
            <h4>Coming Soon</h4>
            <p style="font-size: var(--text-sm);">Native desktop applications for Windows and macOS.</p>
          </div>
          <div class="card" style="text-align: left; flex: 1; min-width: 180px;">
            <span class="tag" style="margin-bottom: var(--space-4); display: inline-block;">Web</span>
            <h4>Coming Soon</h4>
            <p style="font-size: var(--text-sm);">Web-based tools and SaaS applications.</p>
          </div>
          <div class="card" style="text-align: left; flex: 1; min-width: 180px;">
            <span class="tag" style="margin-bottom: var(--space-4); display: inline-block;">Mobile</span>
            <h4>Coming Soon</h4>
            <p style="font-size: var(--text-sm);">iOS and Android applications.</p>
          </div>
        </div>
        <a href="/contact" class="btn btn-outline btn-lg" style="margin-top: var(--space-10);">Inquire About Licensing</a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2 class="display-heading">Interested in early access?</h2>
      <p style="color: rgba(255,255,255,0.7); margin-bottom: var(--space-8);">Get in touch and we'll keep you informed as products become available.</p>
      <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
