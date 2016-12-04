<?php
		
	unset($_SESSION['pid']);
	session_destroy();
	header("Location: index.php");
	exit;
		
?>