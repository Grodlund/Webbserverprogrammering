
<?php

$username = $_POST['username'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$date = $_POST['date'];
$password = $_POST['password'];
 
     
$dbc = mysqli_connect("localhost","root","","register");
    
$query = "insert into users (username, name, mail, date, password) Values ('$username', '$name', '$mail', '$date', '$password');";
    
if(mysqli_query($dbc,$query)){
    echo "det funkar!!!!!!!!!!";
} 
else{
    echo "det funkar inte!!!!";
    echo "<br>".$query;
}

  
    ?>