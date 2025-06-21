### PHP using PDO implemented CRUD operations


## Features
Full CRUD Functionality Create, Read, Update, and Delete products effortlessly

## Tech Stack
- PHP
- MySQL

## Setup
Prerequisites PHP 7.0+ MySQL 5.7+ Web server (Apache/Nginx)

```bash
git clone https://github.com/yourusername/pdo.git
cd php-pdo
Set up the database
```

```php
<?php

$host = 'localhost';
$dbname = 'your_dbname';
$username = 'your_username';
$password = 'your_password';
$port = your_port;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;", $username, $password);
    return $pdo;
} catch (PDOException $exception) {
    echo "Error DB connection: {$exception->getMessage()}";
    return null;
}
```
Place the project in your web server's root directory
Access via: http://localhost/php-pdo/delete.php
