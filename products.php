<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';

require_once DOC_ROOT.'includes/functions.php';
$page_name = "products";
$main_menu_category = "store";
$current_page_name_variable = "products";
$product_name = "products";





// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/products_page.php';
include DOC_ROOT.'template.php';
?>