<?php
// Shared header + nav
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

// Per-page SEO metadata
$seoData = [
  'index' => [
    'title'       => 'softercolor — Build Smarter. Evolve Faster.',
    'description' => 'Custom software development and AI consulting powered by EDPS model-driven methodology. We help organizations build better software, faster.',
    'canonical'   => 'https://www.softercolor.com/',
    'og_type'     => 'website',
  ],
  'services' => [
    'title'       => 'Services — softercolor',
    'description' => 'Software development consulting and AI consulting services. EDPS model-driven methodology for enterprise applications and AI capability building.',
    'canonical'   => 'https://www.softercolor.com/services',
    'og_type'     => 'website',
  ],
  'products' => [
    'title'       => 'Products — softercolor',
    'description' => 'Proprietary software products by softercolor — desktop, web, and mobile applications. Coming soon.',
    'canonical'   => 'https://www.softercolor.com/products',
    'og_type'     => 'website',
  ],
  'about' => [
    'title'       => 'About — softercolor',
    'description' => 'Learn about softercolor, our founder, mission, and the EDPS model-driven development methodology that underpins everything we build.',
    'canonical'   => 'https://www.softercolor.com/about',
    'og_type'     => 'website',
  ],
  'contact' => [
    'title'       => 'Contact — softercolor',
    'description' => 'Get in touch with softercolor for software development consulting, AI consulting, or product licensing inquiries.',
    'canonical'   => 'https://www.softercolor.com/contact',
    'og_type'     => 'website',
  ],
  'privacy' => [
    'title'       => 'Privacy Policy — softercolor',
    'description' => 'Privacy policy for softercolor.com. How we collect, use, and protect your information under PIPEDA.',
    'canonical'   => 'https://www.softercolor.com/privacy',
    'og_type'     => 'website',
  ],
];

$seo = $seoData[$currentPage] ?? $seoData['index'];
$ogImage = 'https://www.softercolor.com/assets/brand/og-image.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?= htmlspecialchars($seo['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($seo['canonical']) ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="<?= htmlspecialchars($seo['og_type']) ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($seo['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($seo['description']) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($seo['canonical']) ?>">
  <meta property="og:image"       content="<?= $ogImage ?>">
  <meta property="og:site_name"   content="softercolor">
  <meta property="og:locale"      content="en_CA">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($seo['title']) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($seo['description']) ?>">
  <meta name="twitter:image"       content="<?= $ogImage ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/brand/favicon.svg">

  <!-- Schema.org structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://www.softercolor.com/#organization",
        "name": "softercolor",
        "url": "https://www.softercolor.com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.softercolor.com/assets/brand/logo.svg"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "email": "info@softercolor.com",
          "contactType": "customer service"
        },
        "description": "Custom software development and AI consulting powered by EDPS model-driven methodology.",
        "areaServed": "CA",
        "knowsAbout": ["Software Development", "AI Consulting", "EDPS Methodology", "Enterprise Software"]
      },
      {
        "@type": "WebSite",
        "@id": "https://www.softercolor.com/#website",
        "url": "https://www.softercolor.com",
        "name": "softercolor",
        "publisher": {
          "@id": "https://www.softercolor.com/#organization"
        }
      },
      {
        "@type": "WebPage",
        "@id": "<?= htmlspecialchars($seo['canonical']) ?>#webpage",
        "url": "<?= htmlspecialchars($seo['canonical']) ?>",
        "name": "<?= htmlspecialchars($seo['title']) ?>",
        "description": "<?= htmlspecialchars($seo['description']) ?>",
        "isPartOf": {
          "@id": "https://www.softercolor.com/#website"
        }
      }
    ]
  }
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <a href="/" class="logo" aria-label="softercolor home">
        <img src="/assets/brand/logo.svg" alt="softercolor" height="22" width="auto">
      </a>
      <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="/"        class="<?= $currentPage === 'index'    ? 'active' : '' ?>">Home</a>
        <a href="/services" class="<?= $currentPage === 'services'  ? 'active' : '' ?>">Services</a>
        <a href="/products" class="<?= $currentPage === 'products'  ? 'active' : '' ?>">Products</a>
        <a href="/about"    class="<?= $currentPage === 'about'     ? 'active' : '' ?>">About</a>
        <a href="/contact"  class="btn btn-outline <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
      </nav>
    </div>
  </header>
