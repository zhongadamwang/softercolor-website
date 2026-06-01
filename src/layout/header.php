<?php
// Shared header + nav
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

// Per-page title and description
$pageTitles = [
  'index'   => 'softercolor — Build Smarter. Evolve Faster.',
  'services'=> 'Services — softercolor',
  'products'=> 'Products — softercolor',
  'about'   => 'About — softercolor',
  'contact' => 'Contact — softercolor',
  'privacy' => 'Privacy Policy — softercolor',
];
$pageDescs = [
  'index'   => 'Custom software development and AI consulting powered by EDPS model-driven methodology.',
  'services'=> 'Software development consulting, AI consulting, and proprietary software products.',
  'products'=> 'Purpose-built software products by softercolor — coming soon.',
  'about'   => 'Learn about softercolor, our founder, and the EDPS methodology.',
  'contact' => 'Get in touch with softercolor for software and AI consulting inquiries.',
  'privacy' => 'Privacy policy for softercolor.com.',
];
$title = $pageTitles[$currentPage] ?? 'softercolor';
$desc  = $pageDescs[$currentPage] ?? 'Custom software development and AI consulting.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <link rel="icon" type="image/svg+xml" href="/assets/brand/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <a href="/" class="logo" aria-label="softercolor home">
        <img src="/assets/brand/logo.svg" alt="softercolor" height="22">
      </a>
      <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="/" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Home</a>
        <a href="/services" class="<?= $currentPage === 'services' ? 'active' : '' ?>">Services</a>
        <a href="/products" class="<?= $currentPage === 'products' ? 'active' : '' ?>">Products</a>
        <a href="/about" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a>
        <a href="/contact" class="btn btn-outline <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
      </nav>
    </div>
  </header>
