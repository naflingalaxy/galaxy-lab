<?php 
if (!isset($_SESSION['user_id'])) { 
	header("Location:".HTTP_PATH);
}
?>