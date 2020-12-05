<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';

require_once DOC_ROOT.'includes/functions.php';
$page_name = "sales summary";
$main_menu_category = "reports";
$current_page_name_variable = "sales-summary";
$product_name = "sales summary";





// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/sales_summary_page.php';
include DOC_ROOT.'template.php';
?>