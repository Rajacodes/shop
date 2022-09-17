<?php

function signin() {
global $connection;

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

    
$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
$result = mysqli_query($connection, $query);

$check = mysqli_num_rows($result);

if($check>0){
    header("Location:index.php");
}else{
    echo "Sign in failed";
}

}

?>