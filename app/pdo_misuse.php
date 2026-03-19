<?php

require './config/db.php';

$username = $_GET['username'] ?? '';

/*
 Developer mistake:
 Input is concatenated BEFORE prepare()
*/

$sql = "SELECT id, username, role FROM users WHERE username = '$username'";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){

    echo $row['username']." - ".$row['role']."<br>";

}

if(count($results) > 1){

    echo "<br>FLAG: flag{pdo_prepare_misuse}";

}

// $order = $_GET['order'];

// $sql = "SELECT * FROM users ORDER BY $order";

// $stmt = $pdo->prepare($sql);
// $stmt->execute();