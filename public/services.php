<?php
// Softercolor Website — Services
require_once __DIR__ . '/../src/layout/header.php';
?>

<main>
  <section class="page-hero">
    <h1>Our Services</h1>
    <p>Two service lines. One methodology. Built to evolve.</p>
  </section>

  <!-- Software Development Consulting -->
  <section class="service-detail" id="software-consulting">
    <h2>Software Development Consulting</h2>
    <p>We assist enterprise clients in building custom software using the <strong>EDPS model-driven development methodology</strong> — a proven approach to solution evolution that delivers quality at scale.</p>
    <h3>What We Deliver</h3>
    <ul>
      <li>Enterprise application design and development</li>
      <li>Model-driven architecture using EDPS process</li>
      <li>Full-stack development (frontend, backend, database)</li>
      <li>System and API integration services</li>
      <li>Solution evolution planning and roadmapping</li>
    </ul>
    <h3>Who This Is For</h3>
    <p>Organizations that need bespoke enterprise software and want a disciplined, methodology-backed approach — not just code.</p>
    <a href="/contact.php?inquiry=software-consulting" class="btn btn-primary">Request a Consultation</a>
  </section>

  <!-- AI Consulting -->
  <section class="service-detail" id="ai-consulting">
    <h2>AI Consulting</h2>
    <p>We help your team build <strong>AI-aided software development capabilities</strong> — enabling faster, smarter development through AI-assisted and model-driven practices.</p>
    <h3>What We Deliver</h3>
    <ul>
      <li>AI capability assessment and strategy</li>
      <li>Integration of AI tools into your development workflow</li>
      <li>Training and enablement for development teams</li>
      <li>EDPS-based AI-assisted methodology adoption</li>
    </ul>
    <h3>Who This Is For</h3>
    <p>Development teams and technology leaders looking to modernize their software delivery with AI — practically and sustainably.</p>
    <a href="/contact.php?inquiry=ai-consulting" class="btn btn-primary">Request a Consultation</a>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h2>Not sure which service fits?</h2>
    <p>Tell us what you're building and we'll figure it out together.</p>
    <a href="/contact.php" class="btn btn-primary">Get in Touch</a>
  </section>
</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
