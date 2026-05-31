# Requirements — PRJ-01 Website

**Project:** PRJ-01 · Website  
**Org:** ORG-05 · Softercolor  
**Generated:** 2026-05-31  
**Updated:** 2026-05-31 (refined via stakeholder interview)  
**Source:** Business vision + stakeholder Q&A  
**Method:** EDPS requirements ingestion from business context

---

## Summary

Softercolor is a custom software development and AI consulting service provider operating two business lines: (1) consulting services helping enterprise clients build software using EDPS model-driven methodology, and (2) proprietary software products sold directly (desktop, web, mobile). The Phase 1 website is a lean, focused marketing site — English only, no CMS needed (updates are rare), hosted on HostGator shared hosting (PHP + MySQL). Core goals: establish credibility, communicate services clearly, and convert visitors into inquiries.

---

## Requirements Table

| ID | Description | Type | Tags | Confidence | Source |
|----|-------------|------|------|------------|--------|
| R-001 | The hero section shall display the tagline "Build Smarter. Evolve Faster. Custom Software & AI Consulting." with a clear sub-headline and a primary CTA button directing visitors to the Contact page. | functional | homepage, branding, conversion | 0.98 | stakeholder |
| R-002 | The website shall include a Services page presenting three offerings: (1) Software Development Consulting, (2) AI Consulting, (3) Product Software. | functional | services, navigation | 0.98 | stakeholder |
| R-003 | The Software Development Consulting service shall describe: assisting clients in building enterprise applications using EDPS model-driven development methodology, full-stack development, and integration services. | functional | services, content | 0.98 | stakeholder |
| R-004 | The AI Consulting service shall describe: helping clients build internal AI-aided software development capabilities, enabling AI-assisted and model-driven development practices within their organizations. | functional | services, content | 0.98 | stakeholder |
| R-005 | The Products page or section shall present Softercolor's proprietary software products (desktop, web, and mobile apps) with placeholder content at launch, indicating products are in development or coming soon. | functional | products, content | 0.95 | stakeholder |
| R-006 | The website shall include an About page presenting the founder's story, background, mission, and the EDPS methodology as Softercolor's core differentiator. | functional | about, trust | 0.92 | stakeholder |
| R-007 | The website shall include a Contact page with a contact form and the company email address info@softercolor.com. | functional | contact, conversion | 0.98 | stakeholder |
| R-008 | The contact form shall capture: visitor name, email, company/organization (optional), inquiry type, and message body. Inquiry type options: Software Development Consulting · AI Consulting Service · Product / Licensing Inquiry · General Inquiry. | functional | contact, forms | 0.98 | stakeholder |
| R-009 | Contact form submissions shall trigger an email notification to info@softercolor.com with all submitted field values. | functional | contact, email, notifications | 0.98 | stakeholder |
| R-010 | The website shall include a clear navigation menu accessible from all pages with links to: Home · Services · Products · About · Contact. | functional | navigation, ux | 0.98 | stakeholder |
| R-011 | Each page shall include a call-to-action (CTA) directing visitors toward a consultation request or the Contact page. | functional | conversion, cta | 0.92 | business-vision |
| R-012 | The website shall integrate analytics tracking (e.g., Google Analytics or privacy-first alternative such as Plausible) to monitor visitor behavior and conversion events. | functional | analytics, business-intelligence | 0.88 | business-vision |
| R-013 | The website shall be fully responsive and render correctly on desktop, tablet, and mobile devices. | nonfunctional | responsive, mobile, ux | 0.98 | industry-standard |
| R-014 | The website shall achieve a Google PageSpeed Insights score of ≥ 85 on both desktop and mobile. | nonfunctional | performance, seo | 0.90 | industry-standard |
| R-015 | The website shall use HTTPS and have a valid SSL certificate. | nonfunctional | security, compliance | 0.99 | industry-standard |
| R-016 | The website shall be optimized for search engines (SEO): proper meta tags, structured data (schema.org), sitemap.xml, and robots.txt. | nonfunctional | seo, discoverability | 0.92 | business-vision |
| R-017 | The website shall load the initial viewport content (LCP) within 2.5 seconds on a standard broadband connection. | nonfunctional | performance, ux | 0.90 | industry-standard |
| R-018 | The website shall meet WCAG 2.1 AA accessibility standards (keyboard navigation, color contrast, alt text for images). | nonfunctional | accessibility, compliance | 0.88 | industry-standard |
| R-019 | The website shall display Softercolor's brand identity consistently: logo, color palette (softer colors), typography, and visual style across all pages. | nonfunctional | branding, design | 0.95 | business-vision |
| R-020 | The website shall be built with PHP (no heavy CMS required) given that content updates are infrequent; content may be hardcoded or managed via simple flat-file/config approach. | constraint | maintainability, php | 0.92 | stakeholder |
| R-021 | The website shall be deployable to a HostGator shared hosting account with PHP and MySQL support (cPanel-based). | constraint | deployment, infrastructure, hostgator | 0.98 | stakeholder |
| R-022 | The website shall include a Privacy Policy page compliant with applicable privacy regulations (PIPEDA for Canada). | constraint | legal, compliance | 0.88 | legal |
| R-023 | The website domain shall be softercolor.com (or a subdomain thereof). | assumption | domain, infrastructure | 0.95 | stakeholder |
| R-024 | The website shall be English-only at launch. | assumption | language, scope | 1.00 | stakeholder |
| R-025 | Out of scope for Phase 1: Blog/Insights section, Portfolio/Case Studies, Testimonials, Client Logos, multi-language (French), e-commerce, payment processing, client portal, login functionality. | out-of-scope | phase-boundary | 1.00 | stakeholder |

---

*Refined 2026-05-31 via stakeholder interview. Ready for edps-goals and edps-domain-extract.*
