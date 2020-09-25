<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_art_board";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "production";
$current_page_name_variable = "costing";
$product_name = "costing";
// Required pages & varibles ----------------------------
$board_table_data = $db->query("SELECT * FROM tbl_galaxy_art_board ORDER BY board_auto_id  
	DESC");
$board_table_data_count = $db->query("SELECT SUM(board_unit_qty) FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");

$dropdown_data = $db->query("SELECT item_id ,item_name FROM tbl_galaxy_stock_items ORDER BY item_id ASC LIMIT 10");
// Adding data of JOB card-------------------------------------------------------------------

// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/costing_page.php';
include DOC_ROOT.'template.php';
?>