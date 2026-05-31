<?php
// Softercolor Website — Home
require_once __DIR__ . '/../src/layout/header.php';
?>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <h1>Build Smarter. Evolve Faster.</h1>
    <p>Custom Software Development &amp; AI Consulting powered by EDPS model-driven methodology.</p>
    <a href="/contact.php" class="btn btn-primary">Get in Touch</a>
  </section>

  <!-- Services Overview -->
  <section class="services-overview">
    <h2>What We Do</h2>
    <div class="service-cards">
      <div class="card">
        <h3>Software Development Consulting</h3>
        <p>Enterprise application development using EDPS model-driven methodology with full-stack and integration expertise.</p>
        <a href="/services.php">Learn More →</a>
      </div>
      <div class="card">
        <h3>AI Consulting</h3>
        <p>Help your organization build AI-aided software development capabilities and adopt modern development practices.</p>
        <a href="/services.php">Learn More →</a>
      </div>
      <div class="card">
        <h3>Products</h3>
        <p>Purpose-built software products for desktop, web, and mobile — coming soon.</p>
        <a href="/products.php">Learn More →</a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h2>Ready to build something great?</h2>
    <a href="/contact.php" class="btn btn-primary">Start a Conversation</a>
  </section>
</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
