<?php
// Shared header + nav
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Softercolor — Build Smarter. Evolve Faster.</title>
  <meta name="description" content="Softercolor — custom software development and AI consulting powered by EDPS model-driven methodology.">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <a href="/" class="logo">Softercolor</a>
      <nav class="site-nav">
        <a href="/" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Home</a>
        <a href="/services.php" class="<?= $currentPage === 'services' ? 'active' : '' ?>">Services</a>
        <a href="/products.php" class="<?= $currentPage === 'products' ? 'active' : '' ?>">Products</a>
        <a href="/about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a>
        <a href="/contact.php" class="btn btn-outline <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
      </nav>
    </div>
  </header>
