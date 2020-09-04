<?php
include_once ('top.php');

if (!isset($_SESSION['user_id'])) {
	session_destroy();
	header("Location:".HTTP_PATH);
}
else{
	session_destroy();
	header("Location:".HTTP_PATH);
}
?>