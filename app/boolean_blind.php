<?php

require './config/db.php';

$id=$_GET['id'] ?? 1;

$sql="SELECT * FROM users WHERE id=$id";

$res=$pdo->query($sql);

if($res->rowCount()>0){

echo "User exists";

}else{

echo "No user";

}