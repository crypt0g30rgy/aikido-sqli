<?php

require './config/db.php';

$id=$_GET['id'] ?? 1;

$sql="SELECT id,username,role FROM users WHERE id=$id";

$res=$pdo->query($sql);

foreach($res as $row){

echo $row['username']." - ".$row['role']."<br>";

}