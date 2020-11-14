<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "sales";
$current_page_name_variable = "invoice";
$product_name = "Invoice";
// Required pages & varibles ----------------------------
$invoice_table_data = $db->query("SELECT * FROM tbl_galaxy_invoice ORDER BY invoice_uniq_id DESC");
$invoice_max_id = $db->query("SELECT MAX(invoice_id) FROM tbl_galaxy_invoice");
$job_table_data = $db->query("SELECT job_card_id, job_card_customer_name FROM tbl_galaxy_sales_job_card WHERE job_card_status = 1");

if ($invoice_max_id) { $invoice_id = ++$invoice_max_id[0]['MAX(invoice_id)'];}
// Adding data of JOB card-------------------------------------------------------------------
if (isset($_POST['btn-add'])) {

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

	$invoice_array = array('job_id' => $job_id, 'invoice_id' => $invoice_id, 'cname' => $cname, 'description' => $description, 'qty' => $qty, 'rate' => $rate, 'discount' => $discount, 'advance' => $advance, 'date_time' => $date_time, 'user_id' => $user_id, 'status' => 0);
	$invoice_sql = $db->query("INSERT INTO tbl_galaxy_invoice (invoice_job_card_id, invoice_id, invoice_customer_name, invoice_description, invoice_qty, invoice_rate, invoice_discount, invoice_advance, invoice_date_time, invoice_added_user, invoice_status) VALUES (:job_id, :invoice_id, :cname, :description, :qty, :rate, :discount, :advance, :date_time, :user_id, :status)", $invoice_array);

	if ($invoice_sql) {
		$successMessage = "Invoice Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."invoice");

	} else {

		$errorMessage = "Error in Adding Invoice.!";
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
$include_file = DOC_ROOT.'pages/invoice_page.php';
include DOC_ROOT.'template.php';
?>