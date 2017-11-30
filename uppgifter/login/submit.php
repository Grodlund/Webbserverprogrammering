<?php
$dbc = mysqli_connect("localhost","root","","register");



$username = $_POST["username"];
$password= $_POST["password"];

$query="SELECT * FROM register WHERE username='$username' AND password='$password';";

?>