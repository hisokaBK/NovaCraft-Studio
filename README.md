# NovaCraft Studio — PHP Website

A small multi-page studio website built with PHP templates and Tailwind CSS, with simple URL-based page selection.

## Pages

- Home
- About
- Services
- Contact

The `index.php` entry point reads the requested page from `PATH_INFO`, chooses an allowed view, and falls back to a 404 page for unknown routes.

## Stack

PHP, HTML, CSS, Tailwind CSS, and JavaScript tooling for styles.

## Project layout

- `index.php` — page selection/entry point.
- `views/` — page views.
- `templates/` — reusable sections such as the header, footer, and contact sections.
- `controllers/form_validation.php` — contact form validation logic.
- `assets/` — static assets.
- `tailwind.config.js`, `package.json` — frontend tooling.

## Local development

Serve the project using a local PHP/Apache setup, making `index.php` accessible as the entry point. Install frontend packages with `npm install` if you need to rebuild styles. The URL structure depends on the local web-server configuration.

## Scope

This is an educational PHP website/routing exercise, not a complete CMS or hosted studio service.
