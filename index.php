<?php
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$main_menu_category = "home";
$current_page_name_variable = "home-page";
$include_file = DOC_ROOT.'pages/index_page.php';
include DOC_ROOT.'template.php';
?>