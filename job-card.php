<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_art_board";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "jobcard";
$current_page_name_variable = "job-card";
$product_name = "Job Card";
// Required pages & varibles ----------------------------
$board_table_data = $db->query("SELECT * FROM tbl_galaxy_art_board ORDER BY board_auto_id  
	DESC");
$board_table_data_count = $db->query("SELECT SUM(board_unit_qty) FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");


$include_file = DOC_ROOT.'pages/job_card_page.php';
include DOC_ROOT.'template.php';
?>