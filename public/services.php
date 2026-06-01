<?php
// softercolor — Services
require_once __DIR__ . '/../src/layout/header.php';
?>

<main>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="tag">Services</span>
      <h1 style="margin-top: var(--space-4);">Two service lines.<br>One methodology.</h1>
      <p class="lead" style="margin-top: var(--space-4);">Built to evolve with your business — from first model to production.</p>
    </div>
  </section>

  <!-- Software Development Consulting -->
  <section id="software-consulting">
    <div class="container">
      <div class="grid-2" style="align-items: start; gap: var(--space-16);">
        <div>
          <span class="tag">Service 01</span>
          <h2 style="margin-top: var(--space-4); margin-bottom: var(--space-6);">Software Development Consulting</h2>
          <p>We help enterprise clients build custom software using the <strong>EDPS model-driven development methodology</strong> — a structured approach to software delivery that scales and evolves without accumulating technical debt.</p>
          <p style="margin-top: var(--space-4);">From domain modeling to production deployment, we bring process discipline to every phase of delivery.</p>
          <a href="/contact" class="btn btn-primary" style="margin-top: var(--space-8);">Request a Consultation</a>
        </div>
        <div style="display: flex; flex-direction: column; gap: var(--space-4);">
          <div class="card">
            <h4>Enterprise Application Development</h4>
            <p style="font-size: var(--text-sm);">Bespoke applications designed from your domain model — maintainable, extensible, and built to last.</p>
          </div>
          <div class="card">
            <h4>Architecture &amp; Integration</h4>
            <p style="font-size: var(--text-sm);">Full-stack architecture, API design, and system integration using modern tools and proven patterns.</p>
          </div>
          <div class="card">
            <h4>EDPS Process Adoption</h4>
            <p style="font-size: var(--text-sm);">Implement model-driven development in your team — with training, tooling, and hands-on delivery.</p>
          </div>
          <div class="card">
            <h4>Solution Roadmapping</h4>
            <p style="font-size: var(--text-sm);">Phased delivery planning with traceable requirements, clear milestones, and evolution pathways.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AI Consulting -->
  <section id="ai-consulting" style="background: var(--color-mist);">
    <div class="container">
      <div class="grid-2" style="align-items: start; gap: var(--space-16);">
        <div style="display: flex; flex-direction: column; gap: var(--space-4);">
          <div class="card">
            <h4>AI Capability Assessment</h4>
            <p style="font-size: var(--text-sm);">Understand where AI can genuinely improve your development process — without the hype.</p>
          </div>
          <div class="card">
            <h4>Workflow Integration</h4>
            <p style="font-size: var(--text-sm);">Integrate AI tools into your existing development lifecycle in a structured, measurable way.</p>
          </div>
          <div class="card">
            <h4>Team Enablement</h4>
            <p style="font-size: var(--text-sm);">Training and coaching for development teams to adopt AI-assisted practices confidently.</p>
          </div>
          <div class="card">
            <h4>AI-Assisted EDPS</h4>
            <p style="font-size: var(--text-sm);">Apply EDPS methodology with AI acceleration — faster modeling, smarter iteration, less rework.</p>
          </div>
        </div>
        <div>
          <span class="tag">Service 02</span>
          <h2 style="margin-top: var(--space-4); margin-bottom: var(--space-6);">AI Consulting</h2>
          <p>We help development teams build <strong>AI-aided software development capabilities</strong> — not as a shortcut, but as a structural improvement to how your team thinks and delivers.</p>
          <p style="margin-top: var(--space-4);">AI is most powerful when applied within a disciplined process. We combine EDPS with AI tools to help your team move faster without losing quality or control.</p>
          <a href="/contact" class="btn btn-primary" style="margin-top: var(--space-8);">Request a Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2 class="display-heading">Not sure which service fits?</h2>
      <p style="color: rgba(255,255,255,0.7); margin-bottom: var(--space-8);">Tell us what you're building and we'll figure it out together.</p>
      <a href="/contact" class="btn btn-primary btn-lg">Get in Touch</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
