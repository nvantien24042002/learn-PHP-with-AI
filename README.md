# PHP
## Goals

- Learn PHP fundamentals
- Understand WordPress PHP code
- Practice Git and GitHub

## Product CRUD mini project

The app is in `php-crud-product/` and requires XAMPP with Apache, PHP, and MySQL.

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin and import `php-crud-product/db/schema.sql`.
3. Check the local database values in `php-crud-product/db/config.php`.
4. Open `http://localhost/learn-PHP-with-AI/php-crud-product/`.

The app supports listing, creating, editing, and deleting products. Create/edit forms validate input, escape rendered values, and use CSRF tokens; deletion requires a POST request.
