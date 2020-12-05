
<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$page_name = "Receipt";
$main_menu_category = "sales";
$current_page_name_variable = "receipt";
$product_name = "Receipt";
// Required pages & varibles ----------------------------
$receipt_table_data = $db->query("SELECT * FROM tbl_galaxy_receipt ORDER BY receipt_uniq_id DESC");
$receipt_max_id = $db->query("SELECT MAX(receipt_id) FROM tbl_galaxy_receipt");
$job_table_data = $db->query("SELECT job_card_id FROM tbl_galaxy_sales_job_card WHERE job_card_status = 1");
$invoice_table_data = $db->query("SELECT invoice_id, invoice_customer_name FROM tbl_galaxy_invoice WHERE invoice_status = 1");
$data_list = $db->query("SELECT DISTINCT customer_name FROM tbl_galaxy_customer ORDER BY customer_id DESC");


 if ($receipt_max_id) { $receipt_id = ++$receipt_max_id[0]['MAX(receipt_id)'];}
// Adding data of JOB card-------------------------------------------------------------------

if (isset($_POST['btn-add-receipt'])) {

	$user_name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	
	$user_detect_array = array('user_name' => $user_name);
	
	if ($_POST['customer'] != "") {
		$max_id_value = $db->query("SELECT customer_id FROM tbl_galaxy_customer WHERE customer_name = :user_name", $user_detect_array);
		if ($max_id_value) {

		$cus_id = $db->query("SELECT customer_id, customer_address, customer_number FROM tbl_galaxy_customer WHERE customer_name = :user_name", $user_detect_array);
		$customer_id = $cus_id[0]['customer_id'];
		$customer_number = $cus_id[0]['customer_number'];
		$customer_address = $cus_id[0]['customer_address'];
		// $job_card_id = $cus_id[0]['MAX(job_card_id)'];
		// $job_card_id++;

		} else {
			$cus_id = $db->query("SELECT MAX(customer_id) FROM tbl_galaxy_customer", $user_detect_array);
			$customer_id = $cus_id[0]['MAX(customer_id)'];
			$customer_id++;
			$customer_number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
			$customer_address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
			
		}

	} else {

		
	}
	
	
	if ($_POST['invoiceid'] == "") {
		$invoice_id = "0";
		$job_card_id_detected = "0";
	} else {
		$invoice_id = filter_var($_POST['invoiceid'], FILTER_SANITIZE_STRING);
		$job_card_id_detect_array = array('invoice_id' => $invoice_id);
		$job_card_id_detect = $db->query("SELECT invoice_job_card_id, invoice_customer_id FROM tbl_galaxy_invoice WHERE invoice_id = :invoice_id", $job_card_id_detect_array);
		$job_card_id_detected = $job_card_id_detect[0]['invoice_job_card_id'];
		$customer_id = $job_card_id_detect[0]['invoice_customer_id'];

	}
	
	if (!isset($user_name)) {
		$name = "0";
		$customer_payment_type = "Down";
	} else {
		$name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
		$customer_payment_type = "Advance";
	}
	
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
	$total_sum_amount = $cheque_amount+$direct_amount+$cash_amount;

	if ($cheque_number == "") {
		$cheque_number = "0";
	}
	if ($cheque_amount == "") {
		$cheque_amount = "0";
	}
	if ($cheque_bank == "") {
		$cheque_bank = "0";
	}
	if ($cheque_date == "") {
		$cheque_date = "0";
	}
	if ($direct_ref == "") {
		$direct_ref = "0";
	}
	if ($direct_amount == "") {
		$direct_amount = "0";
	}
	if ($direct_bank == "") {
		$direct_bank = "0";
	}
	if ($direct_date == "") {
		$direct_date = "0";
	}


	
	$user_id = $_SESSION['user_id'];
	// if customer field not filled this condition wont work
	if ($_POST['customer'] != "") {
		// check if customer already exist
		$customer_field_value =$_POST['customer'];
		$cus_check_array = array('cust_name' => $_POST['customer']);
		$check_customer_exist = $db->query("SELECT customer_name FROM tbl_galaxy_customer WHERE customer_name = :cust_name", $cus_check_array);

		if (!$check_customer_exist) {
			// Adding New Customer
			$customer_array = array('cus_id' => $customer_id, 'cus_name' => $customer_field_value, 'customer_address' => $customer_address, 'customer_number' => $customer_number, 'status' => "0");
			$customer_sql = $db->query("INSERT INTO tbl_galaxy_customer (customer_id, customer_name, customer_address, customer_number, customer_status) VALUES (:cus_id, :cus_name, :customer_address, :customer_number, :status)", $customer_array);
			// Adding customer account payments
			$credit = $total_sum_amount;
			$debit = "0";
			$update_cus_check_array = array('cust_id' => $customer_id, 'credit' => $credit, 'date_time' => $added_date, 'debit' => $debit, 'receipt_id' => $receipt_id);
			$update_check_customer_exist = $db->query("INSERT INTO tbl_galaxy_customer_account (account_customer_id, account_added_receipt_id, account_credit, account_debit, account_date_time) VALUES (:cust_id, :receipt_id, :credit, :debit, :date_time)", $update_cus_check_array);

		} else{
			$cus_check_array_already_cus = array('cust_name' => $_POST['customer']);
			$check_customer_exist_already_cus = $db->query("SELECT customer_name, customer_id FROM tbl_galaxy_customer WHERE customer_name = :cust_name", $cus_check_array_already_cus);
			
			$cus_id = $check_customer_exist_already_cus[0]['customer_id'];
			
			// Adding customer account payments
			$credit = $total_sum_amount;
			$debit = "0";
			$update_cus_check_array_already_customer = array('custo_id' => $cus_id, 'date_time' => $added_date, 'credit' => $credit, 'debit' => $debit, 'status' => "0", 'receipt_id' => $receipt_id);
			$update_check_customer_exist_already_customer = $db->query("INSERT INTO tbl_galaxy_customer_account (account_customer_id, account_added_receipt_id, account_credit, account_debit, account_status, account_date_time) VALUES (:custo_id, :receipt_id, :credit, :debit, :status,:date_time)", $update_cus_check_array_already_customer);
		}

		
	}
	
	// echo $job_id."  _".$name."  _".$cash_amount."  _".$amount_description."  _".$cheque_number."  _".$cheque_amount."  _".$cheque_bank."  _".$cheque_date."  _".$direct_ref."  _".$direct_amount."  _".$direct_bank."  _".$direct_date."  _".$added_date;
	$receipt_array = array('receipt_id' => $receipt_id, 'job_id' => $job_card_id_detected, 'invoice_id' => $invoice_id, 'customer_id' => $customer_id, 'cash_amount' => $cash_amount, 'receipt_amount_letters' => $amount_description, 'cheque_number' => $cheque_number, 'cheque_amount' => $cheque_amount, 'cheque_bank' => $cheque_bank, 'cheque_date' => $cheque_date, 'direct_ref' => $direct_ref, 'direct_amount' => $direct_amount, 'direct_bank' => $direct_bank, 'direct_date' => $direct_date, 'added_date' => $added_date, 'user_id' => $user_id, 'status' => "0");
	$receipt_sql = $db->query("INSERT INTO tbl_galaxy_receipt (receipt_id, receipt_jobcard_id, receipt_invoice_id, receipt_cus_id, receipt_amount, receipt_amount_letters, receipt_cheque_number, receipt_cheque_amount, receipt_cheque_bank, receipt_cheque_date, receipt_direct_deposit_ref_number, receipt_direct_deposit_amount, receipt_direct_deposit_bank, receipt_direct_deposit_date_time, receipt_date_time, receipt_added_user, receipt_status) VALUES (:receipt_id, :job_id, :invoice_id, :customer_id, :cash_amount, :receipt_amount_letters, :cheque_number, :cheque_amount, :cheque_bank, :cheque_date, :direct_ref, :direct_amount, :direct_bank, :direct_date, :added_date, :user_id, :status)", $receipt_array);
	// Adding payment also when receipt added
			

	if ($receipt_sql) {
		$successMessage = "Receipt Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");

	} else {

		$errorMessage = "Error in Adding Receipt.!";
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

if (isset($_GET['deleteid'])) {
	$delete_id = $_GET['deleteid'];
	$delete_array = array('delete_id' => $delete_id);
	$delete_sql = $db->query("DELETE FROM tbl_galaxy_receipt WHERE receipt_uniq_id = :delete_id", $delete_array);

	if ($delete_sql) {
		$successMessage = "Receipt Deleted Successfully.!";
		setcookie("delsuccessMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");

	} else {

		$errorMessage = "Error in Deleting Receipt.!";
		setcookie("delerrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."receipt");
	}
}
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/receipt_page.php';
include DOC_ROOT.'template.php';
?>