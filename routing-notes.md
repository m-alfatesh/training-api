# Laravel Routing Notes

## Difference Between Route Types

- **GET:** Used to retrieve data.
- **POST:** Used to create new data.
- **PUT:** Used to update all data in a resource.
- **PATCH:** Used to update part of the data.
- **DELETE:** Used to delete data.

---

## What is a Route Parameter?

A Route Parameter is a value sent inside the URL. Laravel receives this value and passes it to the route function.

Example:

```text
/user/Mohammed
```

Here, `Mohammed` is the route parameter.

---

## What is an Optional Parameter?

An Optional Parameter is a parameter that is not required. If no value is provided, Laravel uses a default value.

Example:

```text
/welcome
```

or

```text
/welcome/Mohammed
```

Both URLs work.

---

## What is a Named Route?

A Named Route is a route with a unique name. Instead of using the URL directly, the application can use the route name. This makes it easier to change URLs later without changing the code everywhere.

---

## What is a Route Group?

A Route Group is used to organize multiple routes that share the same settings, such as a common prefix or middleware. This helps reduce duplicate code.

---

## What is Middleware?

Middleware is a layer between the request and the route. It checks the request before allowing it to reach the route. For example, it can check authentication, permissions, or age before giving access.
