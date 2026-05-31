# Softercolor Website

> **Build Smarter. Evolve Faster.** — Custom Software Development & AI Consulting

Official company website for [Softercolor](https://softercolor.com), a custom software development and AI consulting service provider powered by the **EDPS model-driven development methodology**.

---

## Pages

| Page | Description |
|------|-------------|
| Home | Hero section, value proposition, primary CTA |
| Services | Software Development Consulting, AI Consulting, Products |
| Products | Proprietary software products (desktop, web, mobile) |
| About | Founder story, mission, EDPS methodology |
| Contact | Inquiry form → info@softercolor.com |
| Privacy Policy | PIPEDA-compliant |

---

## Tech Stack

| Layer | Tech |
|-------|------|
| Backend | PHP 8.x |
| Frontend | HTML5, CSS3, minimal JavaScript |
| Email | PHPMailer + SMTP |
| Database | MySQL (available, not used in Phase 1) |
| Hosting | HostGator shared hosting (cPanel) |
| Domain | softercolor.com |

---

## Project Structure

```
softercolor-website/
├── public/                  # Web root (point cPanel document root here)
│   ├── index.php            # Home page
│   ├── services.php         # Services page
│   ├── products.php         # Products page
│   ├── about.php            # About page
│   ├── contact.php          # Contact page
│   ├── privacy.php          # Privacy Policy page
│   ├── form-handler.php     # Contact form PHP handler
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   ├── sitemap.xml
│   └── robots.txt
├── src/                     # Shared PHP components
│   ├── layout/
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── nav.php
│   └── mail/
│       └── send-inquiry.php
├── vendor/                  # Composer dependencies (PHPMailer)
├── docs/
│   └── analysis/            # EDPS analysis artifacts
├── composer.json
├── .env.example
└── README.md
```

---

## Setup

### Requirements
- PHP 8.x
- Composer
- HostGator cPanel account with PHP + MySQL

### Local Development

```bash
git clone https://github.com/zhongadamwang/softercolor-website.git
cd softercolor-website
composer install
cp .env.example .env
# Edit .env with your SMTP credentials
php -S localhost:8000 -t public/
```

### Deployment

1. Push changes to `main`
2. Upload `public/`, `src/`, `vendor/` to HostGator via SFTP or cPanel File Manager
3. Point document root to `public/`
4. Set environment variables in `.htaccess` or cPanel

---

## EDPS Methodology

This project follows the **EDPS (Enterprise-Driven Process System)** model-driven development methodology — Softercolor's core differentiator. Analysis artifacts are in `docs/analysis/`.

---

## Contact

📧 info@softercolor.com  
🌐 https://softercolor.com
