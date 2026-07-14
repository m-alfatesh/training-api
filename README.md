# Training API

A simple Laravel project built during Week 2 - Day 1 of the DevOps internship, to learn Laravel fundamentals: installation, project structure, and creating basic routes.

## Project Structure

**app** — Contains the core application logic (Controllers, Models), where most of the project's programming happens.

**bootstrap** — Contains the initial startup files, responsible for loading Laravel's core configuration when the application starts.

**config** — Contains all project configuration files (database, sessions, mail, cache...), with each file responsible for a specific settings area.

**database** — Contains the database file (SQLite), along with Migrations that define the table structure, and Seeders for filling in sample data.

**public** — The only folder directly accessible from the browser, containing the main entry point (index.php) for every request reaching the application.

**resources** — Contains the view files (Views) built with Blade, along with the original CSS and JavaScript files before compilation.

**routes** — Contains the route definition files, most importantly web.php, which links each URL to the code responsible for handling it.

**storage** — A location for storing temporary files, error logs, and files uploaded by users.

**tests** — Contains automated tests to verify that the code works correctly without errors.


**.env** — Contains environment-specific configuration for this project (database connection type, session driver, mail settings...). This file is never pushed to GitHub since it may contain sensitive data, and it directly controls how the application behaves locally.

**composer.json** — Defines the project's dependencies and required versions, most importantly the PHP version (^8.3) and the Laravel Framework version (^13.8) needed for the project to run. It also lists development-only packages under "require-dev" (used for testing, not required in production).

**artisan** — Laravel's command-line tool, used to run helpful commands such as starting the local server (php artisan serve) or running database migrations (php artisan migrate).
