<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$page_name = "Receipt";
$main_menu_category = "sales";
$current_page_name_variable = "edit-receipt";
$product_name = "Edit Receipt";
// Required pages & varibles ----------------------------
$receipt_table_data = $db->query("SELECT * FROM tbl_galaxy_receipt ORDER BY receipt_uniq_id DESC");
$receipt_max_id = $db->query("SELECT MAX(receipt_id) FROM tbl_galaxy_receipt");
$job_table_data = $db->query("SELECT job_card_id, job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_status = 1");

 // if ($receipt_max_id) { $receipt_id = ++$receipt_max_id[0]['MAX(receipt_id)'];}
// Adding data of JOB card-------------------------------------------------------------------

if (isset($_GET['editid'])) {
	$edit_uniq_id = $_GET['editid'];
	$edit_array = array('id' => $edit_uniq_id);
	$edit_sql = $db->query("SELECT * FROM tbl_galaxy_receipt WHERE receipt_uniq_id = :id", $edit_array);
}





if (isset($_POST['btn-add-receipt-update'])) {
	$receipt_id = $edit_sql[0]['receipt_id'];
	$edit_uniq_id = $_GET['editid'];
	$job_id = filter_var($_POST['jobid'], FILTER_SANITIZE_STRING);
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$cash_amount = filter_var($_POST['cash_amount'], FILTER_SANITIZE_STRING);
	$amount_description = filter_var($_POST['amount_description'], FILTER_SANITIZE_STRING);
	$cheque_number = filter_var($_POST['cheque_number'], FILTER_SANITIZE_STRING);
	$cheque_amount = filter_var($_POST['cheque_amount'], FILTER_SANITIZE_STRING);
	$cheque_bank = filter_var($_POST['cheque_bank'], FILTER_SANITIZE_STRING);
	$cheque_date = filter_var($_POST['cheque_date'], FILTER_SANITIZE_STRING);
	$direct_ref = filter_var($_POST['direct_ref'], FILTER_SANITIZE_STRING);
	$direct_amount = filter_var($_POST['direct_amount'], FILTER_SANITIZE_STRING);
	$direct_bank = filter_var($_POST['direct_bank'], FILTER_SANITIZE_STRING);
	$direct_date = filter_var($_POST['direct_date'], FILTER_SANITIZE_STRING);
	$added_date = $current_date_time;
	
	$user_id = $_SESSION['user_id'];

	$receipt_array = array('edit_uniq_id' => $edit_uniq_id,'receipt_id' => $receipt_id, 'job_id' => $job_id, 'name' => $name, 'cash_amount' => $cash_amount, 'receipt_amount_letters' => $amount_description, 'cheque_number' => $cheque_number, 'cheque_amount' => $cheque_amount, 'cheque_bank' => $cheque_bank, 'cheque_date' => $cheque_date, 'direct_ref' => $direct_ref, 'direct_amount' => $direct_amount, 'direct_bank' => $direct_bank, 'direct_date' => $direct_date, 'added_date' => $added_date, 'user_id' => $user_id, 'status' => 0);
	$receipt_sql = $db->query("UPDATE tbl_galaxy_receipt SET receipt_id = :receipt_id, receipt_job_card_id = :job_id, receipt_cus_name = :name, receipt_amount = :cash_amount, receipt_amount_letters = :receipt_amount_letters, receipt_cheque_number = :cheque_number, receipt_cheque_amount = :cheque_amount, receipt_cheque_bank = :cheque_bank, receipt_cheque_date = :cheque_date, receipt_direct_deposit_ref_number = :direct_ref, receipt_direct_deposit_amount = :direct_amount, receipt_direct_deposit_bank = :direct_bank, receipt_direct_deposit_date_time = :direct_date, receipt_date_time = :added_date, receipt_added_user = :user_id, receipt_status = :status WHERE receipt_uniq_id = :edit_uniq_id", $receipt_array);

	if ($receipt_sql) {
		$successMessage = "Receipt Updated Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");

	} else {

		$errorMessage = "Error in Updating Receipt.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");
	}
}

// Confirm ID

if (isset($_GET['confirmid'])) {
	$confirm_id = $_GET['confirmid'];
	$confirm_array = array('id' => $confirm_id, 'status' => 1);
	$confirm_sql = $db->query("UPDATE tbl_galaxy_receipt SET receipt_status = :status WHERE receipt_uniq_id = :id", $confirm_array);

	if ($confirm_sql) {
		$successMessage = "Receipt Confirmed Successfully.!";
		setcookie("delsuccessMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");

	} else {

		$errorMessage = "Error in Confirming Receipt.!";
		setcookie("delerrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");
	}
}
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/edit_receipt_page.php';
include DOC_ROOT.'template.php';
?>