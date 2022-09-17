<?php

if (isset($_POST['signup'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	$query = "INSERT INTO user(username, password) VALUES('$username','$password')";
	$result1 = mysqli_query($connection, $query);

	echo $result1;		
}

?>