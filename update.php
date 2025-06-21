<?php

$pdo = include_once 'connection.php';

$userId = 1;
$newPassword = 'VeryStrongP@ssword';
$sql = "UPDATE users SET password = :password WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'password' => $newPassword,
    'id' => $userId
]);