<?php

require './config/db.php';

$id=$_GET['id'] ?? 1;

$id=str_replace("UNION","",$id);

$sql="SELECT * FROM users WHERE id=$id";

$res=$pdo->query($sql);

foreach($res as $r){

echo $r['username'];

}