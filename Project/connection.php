<?php
$connection = mysqli_connect("localhost","root","","shop");
if($connection){
    echo "connect";
}
else{
    echo "not connect";
}
   
?>