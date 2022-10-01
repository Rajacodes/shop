<?php
//DATABASE CONNECTION
include "connection.php";
session_start();

if (isset($_POST['signup'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$usertype = $_POST['usertype'];

	$emailquery = "SELECT * FROM user WHERE email='$email' ";
	$emailrun = mysqli_query($connection, $emailquery);
	if(mysqli_num_rows($emailrun) > 0){
		$_SESSION['status']="Already email taken";
		$_SESSION['statuscode']="Error";
		header("location:index.php");
	}
	else {
		if($password === $confirm){
			$regquery = "INSERT INTO user(username, email, password, confirm, usertype) VALUES('$username', '$email','$password', '$confirm','$usertype')";
			$queryrun = mysqli_query($connection, $regquery);
			if($queryrun){
				$_SESSION['success'] = 'User profile added';
				$_SESSION['status_code'] = 'success';
				header('location:login.php');
			}
			else {
				$_SESSION['status'] = 'User profile not added';
				$_SESSION['status_code'] = 'error';
				header('location:register.php');
			}
		}
		else{
			$_SESSION['status2'] = 'Password does not match';
			$_SESSION['status_code'] = 'warning';
			header('location:register.php');
		}
	}

}
?>

<html>
<head>
	<title>HOME</title>
	<body>
		<form  action="register.php" method="post">	

			<h3> Welcome to shopping website </h3>
		    <h3> Create a new account </h3>			  
		
			<input  type="text" placeholder="Username" name="username" required autocomplete="off"> <br> <br>

			<input  type="email" placeholder="Email" name="email" required autocomplete="off"> <br> <br>
						
			<input  type="password" placeholder="Password" name="password" required autocomplete="off"> <br> <br>

			<input  type="password" placeholder="Password" name="confirm" required autocomplete="off"> <br> <br>

			<input type="hidden" name="usertype" value="user">
						
			<button  type="submit" name="signup">Sign up</button>	
			
		</form>	
		

	</body>
</head>
</html>

