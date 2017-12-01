<?php
$dbc = mysqli_connect("localhost","root","","register");



$username = $_POST["username"];
$password = $_POST["password"];

$query="SELECT * FROM users WHERE username='$username' AND password='$password';";

$results = mysqli_query($dbc,$query);

if(mysqli_fetch_array($results)){ 
    
    echo  "Successfully logged in!";
     
}

else{
    
    echo "Didn't work";
}
?>