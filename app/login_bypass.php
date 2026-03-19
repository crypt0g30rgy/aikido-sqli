<?php

require './config/db.php';

if($_POST){

$user=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";

$res=$pdo->query($sql);

if($res->rowCount()>0){

echo "Logged in! FLAG: flag{basic_login_bypass}";

}else{

echo "Invalid login";

}

}

?>

<form method="POST">

<input name="username">
<input name="password" type="password">
<button>login</button>

</form>