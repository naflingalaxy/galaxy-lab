<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "sales";
$current_page_name_variable = "edit invoice";
$product_name = "editInvoice";
// Required pages & varibles ----------------------------
$invoice_table_data = $db->query("SELECT * FROM tbl_galaxy_invoice ORDER BY invoice_uniq_id DESC");
$invoice_max_id = $db->query("SELECT MAX(invoice_uniq_id) FROM tbl_galaxy_invoice");
$job_table_data = $db->query("SELECT job_card_id, job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_status = 2");

if ($invoice_max_id) { $invoice_id = $invoice_max_id[0]['MAX(invoice_uniq_id)'];}
// Update data of Invoice-------------------------------------------------------------------

if (isset($_GET['editid'])) {
	$edit_id = $_GET['editid'];
	$update_data_retrive_array = array('id' => $edit_id);
	$update_data_retrive_sql = $db->query("SELECT * FROM tbl_galaxy_invoice WHERE invoice_uniq_id = :id", $update_data_retrive_array);

	if ($update_data_retrive_sql) {
		if ($update_data_retrive_sql[0]['invoice_status'] == 0) {

			$edit_invoice_id = $update_data_retrive_sql[0]['invoice_id'];
			$edit_job_id = $update_data_retrive_sql[0]['invoice_job_card_id'];
			$edit_cname = $update_data_retrive_sql[0]['invoice_customer_name'];
			$edit_desc = $update_data_retrive_sql[0]['invoice_description'];
			$edit_qty = $update_data_retrive_sql[0]['invoice_qty'];
			$edit_rate = $update_data_retrive_sql[0]['invoice_rate'];
			$edit_discount = $update_data_retrive_sql[0]['invoice_discount'];
			$edit_advance = $update_data_retrive_sql[0]['invoice_advance'];
		} else {
			header("Location:".HTTP_PATH."404");
		}
		
	}
	
}

if (isset($_POST['btn-update'])) {
	$edit_id = $_GET['editid'];
	// $job_card_id = ;
	$job_id = filter_var($_POST['jobid'], FILTER_SANITIZE_STRING);
	$cname = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
	$qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$rate = filter_var($_POST['rate'], FILTER_SANITIZE_STRING);
	$discount = filter_var($_POST['discount'], FILTER_SANITIZE_STRING);
	$advance = filter_var($_POST['advance'], FILTER_SANITIZE_STRING);

	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];

	$update_invoice_array = array('uniqid' => $edit_id,'job_id' => $job_id, 'invoice_id' => $invoice_id, 'cname' => $cname, 'description' => $description, 'qty' => $qty, 'rate' => $rate, 'discount' => $discount, 'advance' => $advance, 'date_time' => $date_time, 'user_id' => $user_id, 'status' => 0);
	$update_invoice_sql = $db->query("UPDATE tbl_galaxy_invoice SET invoice_job_card_id = :job_id, invoice_id = :invoice_id, invoice_customer_name = :cname, invoice_description = :description, invoice_qty = :qty, invoice_rate = :rate, invoice_discount = :discount, invoice_advance = :advance, invoice_date_time = :date_time, invoice_added_user = :user_id, invoice_status = :status WHERE invoice_uniq_id = :uniqid", $update_invoice_array);

	if ($update_invoice_sql) {
		$successMessage = "Invoice Updated Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."invoice");

	} else {

		$errorMessage = "Error in Updating Invoice.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."invoice");
	}

}



		 
if (isset($_GET['confirmid'])) {
	$confirmid = filter_var($_GET['confirmid']);
	$stat = "1";
	$confirm_array = array('confirmid' => $confirmid, 'value' => $stat);
	$confirm_sql = $db->query("UPDATE tbl_galaxy_invoice SET invoice_status = :value WHERE invoice_uniq_id = :confirmid", $confirm_array);

	if ($confirm_sql) {
		$delsuccessMessage = "Invoice Confirmed Successfully.!";
		setcookie("delsuccessMessage", $delsuccessMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."invoice");
	} else {
		$delerrorMessage = "Error in Confirming Invoice.!";
		setcookie("delerrorMessage", $delerrorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."invoice");
	}
}



// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/edit_invoice_page.php';
include DOC_ROOT.'template.php';
?>