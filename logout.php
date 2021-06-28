<?php 

if(isset($_GET['logout']))
{
	session_destroy();
	header('location:Homepage1.php?logout=true');
	exit;
}
?>