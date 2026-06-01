# Brand Guide — softercolor

**Version:** 1.0  
**Date:** 2026-06-01  

---

## Logo

### Primary (Navy on White)
File: `public/assets/brand/logo.svg`  
Use on white or light backgrounds.

### Reversed (White on Dark)
File: `public/assets/brand/logo-reversed.svg`  
Use on dark backgrounds only.

### Favicon
File: `public/assets/brand/favicon.svg`  
The letterform `s` — used at 32×32 and 64×64.

### Rules
- Always use lowercase: `softercolor` — never `Softercolor` or `SOFTERCOLOR`
- Minimum width: 120px
- Clear space: at least 1× the cap-height on all sides
- Never stretch, skew, recolor with unapproved colors, or add effects (shadows, outlines)

---

## Color Palette

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **Navy** | `#1E3A8A` | 30, 58, 138 | Primary — logo, headings, key UI elements |
| **Blue** | `#2563EB` | 37, 99, 235 | Secondary — links, CTAs, hover states |
| **Sky** | `#38BDF8` | 56, 189, 248 | Accent — highlights, tags, gradient endpoint |
| **Ink** | `#0F172A` | 15, 23, 42 | Body text, dark backgrounds |
| **Slate** | `#475569` | 71, 85, 105 | Secondary text, captions, labels |
| **Mist** | `#F1F5F9` | 241, 245, 249 | Page backgrounds, card backgrounds |
| **White** | `#FFFFFF` | 255, 255, 255 | Content backgrounds |

### CSS Custom Properties
```css
:root {
  --color-navy:   #1E3A8A;
  --color-blue:   #2563EB;
  --color-sky:    #38BDF8;
  --color-ink:    #0F172A;
  --color-slate:  #475569;
  --color-mist:   #F1F5F9;
  --color-white:  #FFFFFF;
}
```

### Gradient (buttons, accents)
```css
background: linear-gradient(135deg, #1E3A8A 0%, #2563EB 100%);
```

---

## Typography

### Primary — Inter (UI & Body)
**Source:** [Google Fonts — Inter](https://fonts.google.com/specimen/Inter)

| Weight | Name | Usage |
|--------|------|-------|
| 400 | Inter Regular | Body text, paragraphs |
| 500 | Inter Medium | Labels, nav links, UI elements, logo |
| 600 | Inter SemiBold | Subheadings, card titles, CTAs |
| 700 | Inter Bold | Page headings (h1, h2) |

### Secondary — DM Serif Display (Headlines)
**Source:** [Google Fonts — DM Serif Display](https://fonts.google.com/specimen/DM+Serif+Display)

| Weight | Usage |
|--------|-------|
| 400 Regular | Hero headline, section titles that need presence |

> **Rationale:** Inter provides the clean/minimal tech feel; DM Serif Display adds warmth and editorial authority for big moments. Together they balance trustworthy and modern.

### Scale
```css
:root {
  --font-primary:   'Inter', system-ui, -apple-system, sans-serif;
  --font-display:   'DM Serif Display', Georgia, serif;

  --text-xs:    0.75rem;   /* 12px — captions */
  --text-sm:    0.875rem;  /* 14px — labels, meta */
  --text-base:  1rem;      /* 16px — body */
  --text-lg:    1.125rem;  /* 18px — lead text */
  --text-xl:    1.25rem;   /* 20px — card titles */
  --text-2xl:   1.5rem;    /* 24px — section headings */
  --text-3xl:   1.875rem;  /* 30px — page titles */
  --text-4xl:   2.25rem;   /* 36px — hero subheading */
  --text-5xl:   3rem;      /* 48px — hero headline */
}
```

### Google Fonts embed
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
```

---

## Voice & Tone

- **Confident, not arrogant** — expertise shown through clarity, not jargon
- **Direct** — short sentences, active voice
- **Smart but human** — technical credibility with a person behind it
- Tagline: *Build Smarter. Evolve Faster.*

---

## Assets

| File | Description |
|------|-------------|
| `public/assets/brand/logo.svg` | Primary wordmark (navy, paths) |
| `public/assets/brand/logo-reversed.svg` | Reversed wordmark (white on dark) |
| `public/assets/brand/favicon.svg` | `s` favicon mark |
| `public/assets/brand/favicon-32.png` | 32×32 favicon PNG |
