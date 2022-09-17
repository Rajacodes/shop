<?php

// DATABASE 
include 'connection.php';

// SIGNUP 
include 'signup.php';

// LOGIN
include 'signin.php';

if (isset($_POST['signin'])) {
	
	signin();
}




?>

<html>
<head>
	<title>HOME</title>
	<body>
		<form  action="register.php" method="post">	

		    <h3> Welcome </h3>		
		  
		
			<input  type="text" placeholder="Username" name="username"> <br> <br>
						
			<input  type="password" placeholder="Password" name="password"> <br> <br>
						
			<button  type="submit" name="signup">Sign up</button>	

			<button  type="submit" name="signin">Sign in</button>


			
		</form>	
		

	</body>
</head>
</html>