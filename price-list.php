<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_price_list";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "accounts";
$current_page_name_variable = "price-list";
$product_name = "price-list";
// Required pages & varibles ----------------------------
$board_table_data = $db->query("SELECT * FROM tbl_galaxy_art_board ORDER BY board_auto_id  
	DESC");
$board_table_data_count = $db->query("SELECT SUM(board_unit_qty) FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");

$dropdown_data = $db->query("SELECT item_id ,item_name FROM tbl_galaxy_stock_items WHERE item_cost_id = 1 ORDER BY item_id ASC LIMIT 11");





// $myString = filter_var($_POST['btnClickedValuee'], FILTER_SANITIZE_STRING);
// $my = explode(',', $myString);
// echo "result".$my;
// $string =  isset($_POST['valuee']); 
// $str_arr = explode (",", $string);  
// print_r($str_arr); 
// if (isset($_POST['btn-pending'])) {
	
// }
if (isset($_POST['add'])) {
	$id = filter_var($_POST['item_id'], FILTER_SANITIZE_STRING);
	$price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
	$qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$added_date = $current_date_time;
	$added_user_id = $_SESSION['user_id'];
	
	$price_array = array('id' => $id, 'price' => $price, 'qty' => $qty, 'added_date' => $added_date, 'added_user_id' => $added_user_id);
	$price_data_sql = $db->query("INSERT INTO tbl_galaxy_price_list (price_list_item_id, price_list_item_cost, price_list_item_qty, price_list_item_added_date_time, price_list_item_added_user_id) VALUES (:id, :price, :qty, :added_date, :added_user_id)", $price_array);

	if ($price_data_sql) {
		$successMessage = "Data Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."price-list");
	} else {
		$errorMessage = "Error in Adding Data.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."price-list");
	}
}


// if (isset($_POST['btn-d'])) {

// Delete price list by id
	 
if (isset($_GET['deleteid'])) {
	$delete_id = $_GET['deleteid'];
	$delete_array = array('delete_id' => $delete_id);
	$delete_sql = $db->query("DELETE FROM tbl_galaxy_price_list WHERE price_list_item_auto_id = :delete_id", $delete_array);

	if ($delete_sql) {
		$delsuccessMessage = "Data Deleted Successfully.!";
		setcookie("delsuccessMessage", $delsuccessMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."price-list");
	} else {
		$delerrorMessage = "Error in Deleting Data.!";
		setcookie("delerrorMessage", $delerrorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."price-list");
	}
}

// }

$include_file = DOC_ROOT.'pages/price_list_page.php';
include DOC_ROOT.'template.php';
?>