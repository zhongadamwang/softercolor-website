<?php
// softercolor — Privacy Policy
require_once __DIR__ . '/../src/layout/header.php';
?>

<main>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="tag">Legal</span>
      <h1 style="margin-top: var(--space-4);">Privacy Policy</h1>
      <p style="margin-top: var(--space-4); color: var(--color-slate);">Last updated: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <!-- Content -->
  <section>
    <div class="container">
      <div style="max-width: 720px;">

        <p class="lead" style="margin-bottom: var(--space-10);">softercolor is committed to protecting your privacy. This policy explains what information we collect, how we use it, and your rights under Canadian privacy law.</p>

        <h2 style="margin-bottom: var(--space-4);">1. Information We Collect</h2>
        <p>We collect only the information you voluntarily provide through our contact form:</p>
        <ul style="margin-top: var(--space-3); margin-left: var(--space-6); display: flex; flex-direction: column; gap: var(--space-2); list-style: disc;">
          <li style="color: var(--color-slate);">Full name</li>
          <li style="color: var(--color-slate);">Email address</li>
          <li style="color: var(--color-slate);">Company or organization (optional)</li>
          <li style="color: var(--color-slate);">Inquiry type and message content</li>
        </ul>
        <p style="margin-top: var(--space-4);">We do not collect payment information, create user accounts, or track individual visitors by name.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">2. How We Use Your Information</h2>
        <p>Information submitted through our contact form is used solely to respond to your inquiry. We do not sell, share, rent, or distribute your personal information to any third parties for marketing or other purposes.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">3. Data Storage</h2>
        <p>Contact form submissions are transmitted via email to our team using a secure SMTP connection. We do not store submissions in a database. Email records are retained only as long as necessary to manage the inquiry and are subject to our email provider's data retention policies.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">4. Cookies &amp; Analytics</h2>
        <p>This website may use third-party analytics tools (such as Google Analytics or Plausible) to understand aggregate visitor behavior — pages visited, time on site, and general geographic region. These tools may use cookies or similar technologies.</p>
        <p style="margin-top: var(--space-4);">Analytics data is collected in aggregate and is not linked to any identifiable individual. You may opt out of analytics tracking through your browser settings or via your analytics provider's opt-out mechanism.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">5. Your Rights (PIPEDA)</h2>
        <p>Under Canada's <em>Personal Information Protection and Electronic Documents Act</em> (PIPEDA), you have the right to:</p>
        <ul style="margin-top: var(--space-3); margin-left: var(--space-6); display: flex; flex-direction: column; gap: var(--space-2); list-style: disc;">
          <li style="color: var(--color-slate);">Know what personal information we hold about you</li>
          <li style="color: var(--color-slate);">Request correction of inaccurate information</li>
          <li style="color: var(--color-slate);">Request deletion of your personal information</li>
          <li style="color: var(--color-slate);">Withdraw consent to our use of your information</li>
        </ul>
        <p style="margin-top: var(--space-4);">To exercise any of these rights, contact us at <a href="mailto:info@softercolor.com">info@softercolor.com</a>. We will respond within 30 days.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">6. Third-Party Services</h2>
        <p>Our website is hosted on HostGator. Email notifications are sent via Google's Gmail service. These providers have their own privacy policies governing data processed through their infrastructure.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">7. Changes to This Policy</h2>
        <p>We may update this policy from time to time. The "last updated" date at the top of this page will reflect any changes. Continued use of the website after changes constitutes acceptance of the updated policy.</p>

        <h2 style="margin-top: var(--space-10); margin-bottom: var(--space-4);">8. Contact</h2>
        <p>Questions or concerns about this policy? Contact us at <a href="mailto:info@softercolor.com">info@softercolor.com</a>.</p>

        <div style="margin-top: var(--space-12); padding: var(--space-6); background: var(--color-mist); border-radius: var(--border-radius); border: 1px solid var(--color-border);">
          <p style="font-size: var(--text-sm); color: var(--color-slate);">softercolor operates in Alberta, Canada and is subject to the federal <em>Personal Information Protection and Electronic Documents Act</em> (PIPEDA). For more information, visit the <a href="https://www.priv.gc.ca" target="_blank" rel="noopener">Office of the Privacy Commissioner of Canada</a>.</p>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../src/layout/footer.php'; ?>
