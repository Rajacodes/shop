<?php
session_start();
session_unset();
session_destroy();
if(session_destroy())
{
header("Location: login.php");
}
?>
