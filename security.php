<?php
session_start();

if (!$_SESSION['userLogin'])
{
	header('location:index.php');
}

?>