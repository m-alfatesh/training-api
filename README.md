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

## Commands Used

```bash
# Install PHP and required extensions
sudo apt update
sudo apt install php8.3-cli php8.3-common php8.3-mbstring php8.3-xml php8.3-curl php8.3-zip -y
sudo apt install php8.3-sqlite3 -y

# Install Composer
sudo apt install composer -y

# Install Laravel Installer
composer global require laravel/installer

# Create the project
laravel new training-api

# Run the local server
cd training-api
php artisan serve

# Run database migrations
php artisan migrate

# Git setup
git init
git branch -m main
git remote add origin git@github.com:m-alfatesh/training-api.git
git add .
git commit -m "Initial commit: Laravel training-api project setup"
git push origin main
```

## What I Learned This Week

- How to install PHP, Composer, and the Laravel Installer, and understanding the role of each tool.
- How to create a new Laravel project and run it locally.
- The purpose of Laravel's core folders (app, routes, config, database...) and key files (.env, composer.json, artisan).
- How to define basic routes, including ones that return plain text and ones that return JSON data.
- How to connect a local project to a new GitHub repository and push the first commit using SSH.

## Biggest Challenge & How I Solved It

The biggest issue was that the SQLite PHP extension wasn't installed initially, which caused two separate errors: first "could not find driver" when running the app, and then "no such table: sessions" after installing the extension, since the database migrations had failed silently during project creation. I solved it by installing the missing `php8.3-sqlite3` extension, then manually running `php artisan migrate` to create the required tables.
