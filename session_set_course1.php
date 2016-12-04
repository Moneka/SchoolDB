<?php ob_start();

session_start();
ini_set('session.save_path', 'tmp');
$_SESSION['cid'] = $_GET['code'];

header("Location: deleteCourse.php");

?>