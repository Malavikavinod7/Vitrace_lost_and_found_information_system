# Vitrace Lost and Found Information System

A full-stack PHP web application for managing lost and found items on a college campus. The system supports secure reporting, item search, category management, and basic administration.

## Repository Contents

- `index.php` — public landing page and item listing
- `about.php` — about page content
- `contact.php` — contact form endpoint
- `found.php` — report found items page
- `home.php` — homepage view
- `view.php` — item detail page
- `Login.php` — authentication controller
- `Master.php` — main action controller for CRUD operations
- `Users.php` — user management actions
- `DBConnection.php` — database connection wrapper
- `SystemSettings.php` — application settings and session helper
- `lfis_db.sql` — database schema and seed data

## Requirements

- PHP 7.4 or newer
- MySQL / MariaDB
- PHP extensions: `mysqli`, `gd`
- Apache or Nginx with rewrite support
- `uploads/` directory writable by the web server for image storage

## Setup

1. Copy `initialize.example.php` to `initialize.php`.
2. Update database credentials and `base_url` in `initialize.php`.
3. Import `lfis_db.sql` into your MySQL server:

   ```sql
   mysql -u username -p database_name < lfis_db.sql
   ```

4. Place the project in your web server document root.
5. Make sure the `uploads/` directory is writable by the server.

## Important Notes

- `initialize.php` is excluded from Git and should contain your local database credentials.
- `uploads/` is also ignored in git because it stores runtime-generated files.
- If your site is not hosted at the web root, update `base_url` in `initialize.php` accordingly.

## Contribution

Feel free to add a license, improve documentation, or add setup scripts for Composer and deployment.
