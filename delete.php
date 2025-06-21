<?php

$pdo = include_once 'connection.php';

$userId = 1;
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);