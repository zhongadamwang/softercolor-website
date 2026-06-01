<?php
// softercolor — Home
require_once __DIR__ . '/../src/layout/header.php';
?>

<main id="main-content">

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1 class="display-heading">Build Smarter.<br>Evolve Faster.</h1>
      <p class="lead">Custom software development &amp; AI consulting powered by EDPS model-driven methodology.</p>
      <div class="hero-actions">
        <a href="/contact" class="btn btn-primary btn-lg">Get in Touch</a>
        <a href="/services" class="btn btn-outline btn-lg">Our Services</a>
      </div>
    </div>
  </section>

  <!-- Services Overview -->
  <section class="services-overview">
    <div class="container">
      <div class="section-header">
        <span class="tag">What We Do</span>
        <h2>Services built for modern software teams</h2>
        <p>From enterprise architecture to AI capability building — we help organizations develop better software, faster.</p>
      </div>
      <div class="service-cards">
        <div class="card">
          <h3>Software Development Consulting</h3>
          <p>Enterprise application development using EDPS model-driven methodology. Full-stack, integration, and architecture expertise.</p>
          <a href="/services">Learn more →</a>
        </div>
        <div class="card">
          <h3>AI Consulting</h3>
          <p>Build internal AI-aided development capabilities. Adopt model-driven practices that scale with your team.</p>
          <a href="/services">Learn more →</a>
        </div>
        <div class="card">
          <h3>Product Software</h3>
          <p>Purpose-built software products for desktop, web, and mobile — designed with the same rigor as our consulting work.</p>
          <a href="/products">Learn more →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Why softercolor -->
  <section>
    <div class="container">
      <div class="grid-2" style="align-items:center; gap: var(--space-16);">
        <div>
          <span class="tag">Our Approach</span>
          <h2 style="margin-top: var(--space-4); margin-bottom: var(--space-6);">Model-driven development that evolves with your business</h2>
          <p>The EDPS methodology brings structure and predictability to complex software delivery — without sacrificing speed. We help your team build systems that are designed to change.</p>
          <p style="margin-top: var(--space-4);">Whether you're starting fresh or modernizing an existing platform, we bring the process, tools, and expertise to get it done right.</p>
          <a href="/about" class="btn btn-outline" style="margin-top: var(--space-8);">About softercolor</a>
        </div>
        <div style="background: var(--color-mist); border-radius: var(--border-radius-lg); padding: var(--space-10); border: 1px solid var(--color-border);">
          <div style="display:flex; flex-direction:column; gap: var(--space-6);">
            <div>
              <h4 style="color: var(--color-navy); margin-bottom: var(--space-2);">Domain Modeling</h4>
              <p style="font-size: var(--text-sm);">Start with a clear model of your business domain before writing a line of code.</p>
            </div>
            <div>
              <h4 style="color: var(--color-navy); margin-bottom: var(--space-2);">Iterative Delivery</h4>
              <p style="font-size: var(--text-sm);">Ship working software in short cycles with traceable requirements throughout.</p>
            </div>
            <div>
              <h4 style="color: var(--color-navy); margin-bottom: var(--space-2);">AI-Assisted Development</h4>
              <p style="font-size: var(--text-sm);">Leverage AI tools intelligently within a structured process — not just as autocomplete.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2 class="display-heading">Ready to build something great?</h2>
      <a href="/contact" class="btn btn-primary btn-lg">Start a Conversation</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
