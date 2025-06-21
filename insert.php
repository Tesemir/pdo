<?php

$pdo = include_once 'connection.php';

$name = 'John Doe';
$email = 'johndoe@example.com';
$password = 'p@ssword';

$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        'email' => $email,
        'name' => $name,
        'password' => $password
    ]);
} catch (PDOException $exception) {
    echo "Mistake: {$exception->getMessage()}";
}