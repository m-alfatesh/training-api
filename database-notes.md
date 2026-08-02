# Database Notes

## What is .env?

The `.env` file stores the project's environment configuration, such as the database connection, application settings, and other sensitive information. Laravel reads these values while the application is running.

---

## Why do we use .env?

We use `.env` to keep configuration separate from the application code. This allows each developer or server to use different settings without changing the project's source code.

---

## Why is .env not uploaded to GitHub?

The `.env` file contains sensitive information such as database credentials and API keys. Uploading it to GitHub may expose private information. Also, each developer has different local settings, so everyone should have their own `.env` file.

---

## Difference between .env and .env.example

- `.env` contains the real configuration values used by the application.
- `.env.example` is a template that shows which configuration variables are required without including sensitive information. New developers copy it to create their own `.env` file.

---

## What is Migration?

A Migration is a Laravel file that defines how to create or modify database tables. It works like a blueprint for the database structure.

---

## Why do we use Migrations?

Migrations allow every developer to build the same database structure without sharing the database itself. Developers only need to pull the project and run `php artisan migrate`.

---

## What is the benefit of tracking database changes?

Laravel records executed migrations in the `migrations` table. This allows it to:
- Know which migrations have already been executed.
- Show migration status.
- Roll back the latest batch of migrations.
- Prevent running the same migration multiple times.

---

## Difference between creating tables manually and using Migrations

Creating tables manually requires each developer to create and update the database by hand, which can lead to inconsistencies. Migrations automate the process, keep database changes under version control, and ensure every developer has the same database structure.
