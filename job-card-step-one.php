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

// Adding data of JOB card-------------------------------------------------------------------
if (isset($_POST['btn-add'])) {
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$item = filter_var($_POST['item'], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$quantity = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
	$size = filter_var($_POST['size'], FILTER_SANITIZE_STRING);
	$single_color_count = "N/A";
	$single_colors = "N/A";
	$double_f_color_count = "N/A";
	$double_f_colors = "N/A";
	$double_b_color_count = "N/A";
	$double_b_colors = "N/A";

	if ($_POST['timespan'] == "single") {
		$single_color_count = filter_var($_POST['colorcount'], FILTER_SANITIZE_STRING);
		$single_colors = filter_var($_POST['singlesidecolor'], FILTER_SANITIZE_STRING);
		$double_f_color_count = "N/A";
	$double_f_colors = "N/A";
	$double_b_color_count = "N/A";
	$double_b_colors = "N/A";
	} else {
		$double_f_color_count = filter_var($_POST['colorcounttwo_f_side'], FILTER_SANITIZE_STRING);
		$double_f_colors = filter_var($_POST['double_f_sidecolor'], FILTER_SANITIZE_STRING);
		$double_b_color_count = filter_var($_POST['colorcounttwo_b_side'], FILTER_SANITIZE_STRING);
		$double_b_colors = filter_var($_POST['double_b_sidecolor'], FILTER_SANITIZE_STRING);
		$single_color_count = "N/A";
		$single_colors = "N/A";
	}

	echo "  Name -".$name."  item =".$item."  adress =".$address."  number =".$number."  mail=".$email."  qty=".$quantity.$size."  single side colors=".$single_color_count."  color=".$single_colors."  double f side colors=".$double_f_color_count."  color=".$double_f_colors."  double b side colors=".$double_b_color_count."  double b side clr".$double_b_colors;exit();

}
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/job_card_step_one_page.php';
include DOC_ROOT.'template.php';
?>