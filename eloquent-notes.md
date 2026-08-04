# Eloquent ORM Notes

## 1. What is Eloquent ORM?

Eloquent ORM is Laravel's built-in Object Relational Mapper (ORM). It allows developers to interact with the database using PHP Models instead of writing raw SQL queries.

---

## 2. What is the relationship between the Product Model and the products table?

The Product Model represents the `products` table in the database. Each record in the table is represented as a Product object, allowing Laravel to read, create, update, and delete records easily.

---

## 3. What is the difference between using SQL and Eloquent?

### SQL
- Uses raw SQL queries.
- Requires writing statements such as SELECT, INSERT, UPDATE, and DELETE.
- More database-specific.

Example:
```sql
SELECT * FROM products;
```

### Eloquent
- Uses PHP methods through Models.
- Easier to read and maintain.
- Integrates with Laravel features such as relationships, validation, and mass assignment.

Example:

```php
Product::all();
```
