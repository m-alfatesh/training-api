# Migration & Model Notes

## 1. What is a Migration?

A Migration is a Laravel feature used to create and modify database tables using code. It keeps the database structure consistent across all developers and environments.

---

## 2. What is a Model?

A Model represents a database table in Laravel and is used to interact with its records. It allows creating, reading, updating, and deleting data without writing SQL directly.

---

## 3. What is the relationship between a Model and a Table?

Each Model represents a table in the database.

Example:

- Product Model → products table

The Model is the bridge between the Laravel application and the database table.

---

## 4. What do `up()` and `down()` do in a Migration?

- `up()` creates or modifies database tables.
- `down()` reverses the changes made in `up()`, usually by dropping the table.

---

## 5. What is the purpose of `$fillable` in a Model?

`$fillable` defines which fields are allowed to be mass assigned. It protects sensitive fields such as `id`, `created_at`, and `updated_at` from being modified by users.

---

## 6. What is the difference between `migrate` and `rollback`?

- `php artisan migrate` executes new migrations and creates or updates database tables.
- `php artisan migrate:rollback` reverts the latest migration batch and undoes the last changes.
