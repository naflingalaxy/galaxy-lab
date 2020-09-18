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

$board_table_data = $db->query("SELECT * FROM tbl_galaxy_bristal_board ORDER BY board_added_date_time 
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
	$board_status = "Pending";
	$board_added_total_amount = $board_unit_qty*$board_price_per_unit;
	$board_added_user_id = $_SESSION['user_id'];

	$artboard_array = array('board_uniq_id' => $board_uniq_id, 'board_name' => $board_name, 'board_gsm' => $board_gsm, 'board_color' => $board_color, 'board_brand' => $board_brand, 'board_unit_qty' => $board_unit_qty, 'board_price_per_unit' => $board_price_per_unit, 'board_added_date_time' => $board_added_date_time, 'board_status' => $board_status, 'board_added_total_amount' => $board_added_total_amount, 'board_added_user_id' => $board_added_user_id);
	$artboard_query = $db->query("INSERT INTO tbl_galaxy_bristal_board (board_uniq_id, board_name, board_gsm, board_color, board_brand, board_unit_qty, board_price_per_unit, board_added_date_time, board_status, board_added_total_amount, board_added_user_id) VALUES (:board_uniq_id, :board_name, :board_gsm, :board_color, :board_brand, :board_unit_qty, :board_price_per_unit, :board_added_date_time, :board_status, :board_added_total_amount, :board_added_user_id)", $artboard_array);

	if ($artboard_query) {

		$successMessage = "Data Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");

	} else {

		$errorMessage = "Error in Adding Data.!";
		setcookie("errorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."bristal-board");
	}
}
// Data adding process End ---------------------------------------------------------   


// $page_data = $db->query("SELECT item_url FROM tbl_galaxy_stock_items WHERE item_section = '1'");

   
$include_file = DOC_ROOT.'pages/bristal_board_page.php';
include DOC_ROOT.'template.php';
?>