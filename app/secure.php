<?php

require './config/db.php';

$id=$_GET['id'] ?? 1;

$stmt=$pdo->prepare("SELECT * FROM users WHERE id=?");

$stmt->execute([$id]);

foreach($stmt as $row){

echo $row['username'];

}