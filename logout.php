<?php
session_start();
if($_SESSION["active_user"])
{
	session_destroy();
	header('location:index.php?logout=true');
	exit;
}

?>