<?php
include "../connection.php";


if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
    $filename = $_FILES['upload']['name'];
    $tmpname = $_FILES['upload']['tmp_name'];
    echo $filename;
    echo $tmpname;
    $folder = '../assets/images/collection/';
    move_uploaded_file($tmpname,$folder.$filename);

	$query = "INSERT INTO products(proname, proprice, proimage) VALUES('$name','$price','$filename')";
	$result1 = mysqli_query($connection, $query);

	echo $result1;		
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <form action="http://localhost/project/admin/product.php" method='POST' enctype='multipart/form-data'>
   
    <input type="text" name="name" placeholder="product name"><br><br>
    
    <input type="text" name="price" placeholder="product price"><br><br>
    <input type="file" name="upload"><br>
    <!-- <img src="../assets/images/collection/arrivals1.png" alt=""> -->

    <button  type="submit" name="submit">submit</button>
    
    </form>
</body>
</html>
