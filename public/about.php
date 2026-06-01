<?php
// softercolor — About
require_once __DIR__ . '/../src/layout/header.php';
?>

<main id="main-content">

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="tag">About</span>
      <h1 style="margin-top: var(--space-4);">Built on methodology.<br>Driven by craft.</h1>
      <p class="lead" style="margin-top: var(--space-4);">softercolor is a custom software development and AI consulting firm. We help organizations build better software — with a process designed to evolve.</p>
    </div>
  </section>

  <!-- Story -->
  <section>
    <div class="container">
      <div class="grid-2" style="align-items: start; gap: var(--space-16);">
        <div>
          <span class="tag">Our Story</span>
          <h2 style="margin-top: var(--space-4); margin-bottom: var(--space-6);">Why softercolor exists</h2>
          <p>Most software projects don't fail because of bad developers — they fail because of missing structure. Requirements drift, models are never written down, and the gap between intent and implementation grows with every sprint.</p>
          <p style="margin-top: var(--space-4);">softercolor was founded to fix that. We bring a methodology-first approach to software delivery: start with a clear model, trace every decision back to requirements, and design systems that are built to change.</p>
          <p style="margin-top: var(--space-4);">The name softercolor reflects our philosophy: precision and clarity, expressed with craft — not brute force.</p>
        </div>
        <div>
          <span class="tag">Mission</span>
          <h2 style="margin-top: var(--space-4); margin-bottom: var(--space-6);">What we're here to do</h2>
          <p>Help organizations build better software — faster, smarter, and with a clear path to evolution.</p>
          <p style="margin-top: var(--space-4);">We do that through the EDPS methodology: a model-driven approach to software development that brings structure and predictability to complex delivery without sacrificing speed.</p>
          <p style="margin-top: var(--space-4);">We work with teams that care about doing it right — and want a partner who does too.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EDPS Methodology -->
  <section style="background: var(--color-mist);">
    <div class="container">
      <div class="section-header">
        <span class="tag">Our Methodology</span>
        <h2 style="margin-top: var(--space-4);">The EDPS Approach</h2>
        <p>EDPS (Enterprise Domain-Process System) is our model-driven development methodology — the foundation of everything we build and every engagement we deliver.</p>
      </div>
      <div class="grid-2" style="gap: var(--space-6);">
        <div class="card">
          <h3 style="margin-bottom: var(--space-3);">Domain Modeling First</h3>
          <p>Before writing code, we build a clear model of your business domain. This becomes the single source of truth — traceable through every layer of the system.</p>
        </div>
        <div class="card">
          <h3 style="margin-bottom: var(--space-3);">Traceable Requirements</h3>
          <p>Every feature, task, and decision is linked back to a documented requirement. Nothing gets built without a clear reason — and nothing important gets missed.</p>
        </div>
        <div class="card">
          <h3 style="margin-bottom: var(--space-3);">Continuous Evolution</h3>
          <p>Systems designed with EDPS are built to change. The methodology separates stable domain logic from volatile implementation details — reducing the cost of change over time.</p>
        </div>
        <div class="card">
          <h3 style="margin-bottom: var(--space-3);">AI-Assisted Development</h3>
          <p>AI is most effective within a structured process. EDPS provides the scaffolding that makes AI-assisted development reliable, auditable, and genuinely faster.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2 class="display-heading">Want to work together?</h2>
      <p style="color: rgba(255,255,255,0.7); margin-bottom: var(--space-8);">Tell us about your project and let's see if we're a good fit.</p>
      <a href="/contact" class="btn btn-primary btn-lg">Get in Touch</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
