<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_daily_sales";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "production";
$current_page_name_variable = "daily-sales";
$product_name = "dailysales";
// Required pages & varibles ----------------------------


$include_file = DOC_ROOT.'pages/daily_sales_page.php';
include DOC_ROOT.'template.php';
?>