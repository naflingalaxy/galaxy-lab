<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';

require_once DOC_ROOT.'includes/functions.php';
$page_name = "daily expenses";
$main_menu_category = "accounts";
$current_page_name_variable = "expenses";
$product_name = "expenses";

$expenses_table_data = $db->query("SELECT * FROM tbl_galaxy_daily_expenses");

if (isset($_POST['btn-add'])) {
	$department = filter_var($_POST['depart'], FILTER_SANITIZE_STRING);
	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$reference = filter_var($_POST['reference'], FILTER_SANITIZE_STRING);
	// $reference = filter_var($_POST['reference'], FILTER_SANITIZE_STRING);
	$status = "0";
	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];

	$ex_array = array('department' => $department, 'description' => $description, 'amount' => $amount, 'reference' => $reference, 'status' => $status, 'date_time' => $date_time, 'user_id' => $user_id);
	$ex_sql = $db->query("INSERT INTO tbl_galaxy_daily_expenses (expenses_category, expenses_description, expenses_amount, expenses_number, expenses_added_user, expenses_date, expenses_status) VALUES (:department, :description, :amount, :reference, :user_id, :date_time, :status)", $ex_array);

	if ($ex_sql) {
		$successMessage = "Expence Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."expenses");

	} else {
		$errorMessage = "Error in Adding Expence.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."expenses");
	}
}



// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/expences_page.php';
include DOC_ROOT.'template.php';
?>