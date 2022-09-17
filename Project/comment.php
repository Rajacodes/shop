<?php

if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$comment = $_POST['comment'];
    $message = $_POST['message'];
	

	$query = "INSERT INTO comment(email, commit, message) VALUES('$email','$comment','$message')";
	$result1 = mysqli_query($connection, $query);

	echo $result1;		
}

?>

<!-- <form action="index.php" method="post">
	<input type="email" class="form-control" placeholder="Enter Email Here...." name="email"><br>
    <input type="text" class="form-control" placeholder="Enter Comment Here...." name="comment"><br>
	<input type="text" class="form-control" placeholder="Enter Message Here...." name="message"><br>
	<button name="submit">Submit</button>
</form> -->


