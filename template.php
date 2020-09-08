<?php

// if (!isset($_SESSION['user_id'])) { 
// 	header("Location:".HTTP_PATH);
// }
// include_once DOC_ROOT.'classes/db_connection.php';
include_once DOC_ROOT.'classes/db_connection.php';
include DOC_ROOT.'includes/head.php';
include DOC_ROOT.'includes/menu.php';
require_once($include_file);
include DOC_ROOT.'includes/footer.php';
?>