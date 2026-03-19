<?php

require './config/db.php';

$username = $_GET['username'] ?? '';

$query = "SELECT * FROM users WHERE username = '$username'";

$stmt = $pdo->query($query);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");

echo json_encode($results, JSON_PRETTY_PRINT);