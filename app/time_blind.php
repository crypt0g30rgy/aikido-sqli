<?php

require './config/db.php';

$id=$_GET['id'] ?? 1;

$sql="SELECT * FROM users WHERE id=$id";

$pdo->query($sql);

echo "Request complete";