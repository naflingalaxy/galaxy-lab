<?php
include 'top.php';
include 'includes/auth.php';

// require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "board";
$current_page_name_variable = "bristal-board";

// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_bristal_board";
require_once DOC_ROOT.'includes/functions.php';

// Required pages & varibles ----------------------------

$board_table_data = $db->query("SELECT * FROM tbl_galaxy_bristal_board ORDER BY board_auto_id  
	DESC");
$product_name = "Bristal Board";
// Data adding process start ---------------------------------------------------------
if (isset($_POST['btn-add'])) {
	$board_uniq_id = $uniq_id_bristal;
	$board_name = $product_name;
	$board_gsm = "0";
	// if ($board_gsm == 0) {
	// 	$board_gsm ="N/A";
	// }
	$board_color = filter_var($_POST['color'], FILTER_SANITIZE_STRING);
	$board_brand = "N/A";
	$board_unit_qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$board_price_per_unit = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
	$board_added_date_time = $current_date_time;
	$board_status = "pending";
	$board_added_total_amount = $board_unit_qty*$board_price_per_unit;
	$board_added_user_id = $_SESSION['user_id'];
	$board_edited_date_time = "0000-00-00 00:00:00.000000";
	$board_edited_user_id = "100";

	$artboard_array = array('board_uniq_id' => $board_uniq_id, 'board_name' => $board_name, 'board_gsm' => $board_gsm, 'board_color' => $board_color, 'board_brand' => $board_brand, 'board_unit_qty' => $board_unit_qty, 'board_price_per_unit' => $board_price_per_unit, 'board_added_date_time' => $board_added_date_time, 'board_status' => $board_status, 'board_added_total_amount' => $board_added_total_amount, 'board_added_user_id' => $board_added_user_id, 'board_edited_user_id' => $board_edited_user_id, 'board_edited_date_time' => $board_edited_date_time);
	$artboard_query = $db->query("INSERT INTO tbl_galaxy_bristal_board (board_uniq_id, board_name, board_gsm, board_color, board_brand, board_unit_qty, board_price_per_unit, board_added_date_time, board_status, board_added_total_amount, board_added_user_id, board_edited_user_id, board_edited_date_time) VALUES (:board_uniq_id, :board_name, :board_gsm, :board_color, :board_brand, :board_unit_qty, :board_price_per_unit, :board_added_date_time, :board_status, :board_added_total_amount, :board_added_user_id, :board_edited_user_id, :board_edited_date_time)", $artboard_array);

	if ($artboard_query) {

		$successMessage = "Data Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");

	} else {

		$errorMessage = "Error in Adding Data.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");
	}
}
// Data adding process End ---------------------------------------------------------   

// Status Update Active OR Cancel start---------------------------------------------
if (isset($_GET['editid'])) {
	$edit_id = filter_var($_GET['editid'], FILTER_SANITIZE_STRING);
	$status = filter_var($_GET['status'], FILTER_SANITIZE_STRING);
	$board_edited_user_id = $_SESSION['user_id'];
	$board_edited_date_time = $current_date_time;
	$edit_array = array('id' => $edit_id, 'status' => $status, 'edited_user_id' => $board_edited_user_id, 'edited_date_time' => $board_edited_date_time);
	$edit_quary = $db->query("UPDATE tbl_galaxy_bristal_board SET board_status = :status, board_edited_user_id = :edited_user_id, board_edited_date_time = :edited_date_time WHERE board_auto_id = :id", $edit_array);

	if ($edit_quary) {
		$successMessage = "Data Updated Successfully.!";
		setcookie("editsuccessMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");
	}else {

		$errorMessage = "Error in Updating Data.!";
		setcookie("editerrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");
	}
}
// Status Update Active OR Cancel end---------------------------------------------

// $page_data = $db->query("SELECT item_url FROM tbl_galaxy_stock_items WHERE item_section = '1'");

   
$include_file = DOC_ROOT.'pages/bristal_board_page.php';
include DOC_ROOT.'template.php';
?>