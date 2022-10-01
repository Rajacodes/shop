<?php
session_start();

// DATABASE 
include 'connection.php';


?>

<?php
if(isset($_POST['signin'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE email='$email' AND password='$password' ";
	$result= mysqli_query($connection, $query);
	$usertype= mysqli_fetch_array($result);
	if($usertype['usertype']=='admin'){
		$_SESSION['mail1']=$email;
		header("location:admin/panel.php");
	} 
	else if($usertype['usertype'] == 'user'){
		$_SESSION['mail2']=$email;
		header("location:index.php");

	}
	else {
		$_SESSION['status'] = 'Invalid user';
		header('location:login.php');
	}
}
?>


<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="/css/login.css">
	<body>
		<form  action="login.php" method="post" >	

		    <h3> Welcome </h3>		
		
			<input  type="email" placeholder="Email" name="email" autocomplete="off" required> <br> <br>
						
			<input  type="password" placeholder="Password" name="password" autocomplete="off" required> <br> <br>
					
			<button  type="submit" name="signin">Sign in</button>
			
		</form>	
		
	</body>
</head>
</html>