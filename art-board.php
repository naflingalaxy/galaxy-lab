<?php
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$main_menu_category = "board";
$current_page_name_variable = "art-board";
$product_name = "Art Board";
$board_table_data = $db->query("SELECT * FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");
$board_table_data_count = $db->query("SELECT SUM(board_unit_qty) FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");
if ($board_table_data_count) {
	$available_qty = $board_table_data_count[0]['SUM(board_unit_qty)'];

}













if (isset($_POST['btn-add'])) {
	$board_uniq_id = $uniq_id_artboard;
	$board_name = $product_name;
	$board_gsm = filter_var($_POST['gsm'], FILTER_SANITIZE_STRING);
	if ($board_gsm == 0) {
		$board_gsm ="N/A";
	}
	$board_color = "N/A";
	$board_brand = filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
	$board_unit_qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$board_price_per_unit = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
	$board_added_date_time = $current_date_time;
	$board_status = "Pending";
	$board_added_total_amount = $board_unit_qty*$board_price_per_unit;
	$board_added_user_id = $_SESSION['user_id'];

	$artboard_array = array('board_uniq_id' => $board_uniq_id, 'board_name' => $board_name, 'board_gsm' => $board_gsm, 'board_color' => $board_color, 'board_brand' => $board_brand, 'board_unit_qty' => $board_unit_qty, 'board_price_per_unit' => $board_price_per_unit, 'board_added_date_time' => $board_added_date_time, 'board_status' => $board_status, 'board_added_total_amount' => $board_added_total_amount, 'board_added_user_id' => $board_added_user_id);
	$artboard_query = $db->query("INSERT INTO tbl_galaxy_art_board (board_uniq_id, board_name, board_gsm, board_color, board_brand, board_unit_qty, board_price_per_unit, board_added_date_time, board_status, board_added_total_amount, board_added_user_id) VALUES (:board_uniq_id, :board_name, :board_gsm, :board_color, :board_brand, :board_unit_qty, :board_price_per_unit, :board_added_date_time, :board_status, :board_added_total_amount, :board_added_user_id)", $artboard_array);

	if ($artboard_query) {

		$successMessage = "Data Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."art-board");

	} else {

		$errorMessage = "Error in Adding Data.!";
		setcookie("errorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."art-board");
	}
}



$include_file = DOC_ROOT.'pages/art_board_page.php';
include DOC_ROOT.'template.php';
?>