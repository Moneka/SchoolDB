<?php ob_start(); 
ini_set('session.save_path', 'tmp');
session_start();


$_SESSION['gid'] = $_GET['gid'];

header("Location: addnewcourse.php");

?>