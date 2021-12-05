<?php
session_start();

if (isset($_SESSION['u_Fname'])) {
	$session_user = $_SESSION['u_Fname'];
}
else{
	header('Location:login.php');
}
session_destroy();
header('Location:login.php');
?>