<?php
session_start();

if (!$_SESSION['adminLogin'])
{
	header('location:../index.php');
}

?>