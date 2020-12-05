<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "sales";
$current_page_name_variable = "PDF";
// $page_name = "pdf";
$product_name = "PDF View";

// Required pages & varibles ----------------------------

if (isset($_GET['invoiceid'])) {
	$invoice_id = $_GET['invoiceid'];

	$invoice_array = array('id' => $invoice_id);
	$invoice_sql = $db->query("SELECT * FROM tbl_galaxy_invoice WHERE invoice_uniq_id = :id", $invoice_array);
}
if (isset($_GET['receiptid'])) {
	$receipt_id = $_GET['receiptid'];

	$receipt_array = array('id' => $receipt_id);
	$receipt_sql = $db->query("SELECT * FROM tbl_galaxy_receipt WHERE receipt_id = :id", $receipt_array);
	$total_amount = $receipt_sql[0]['receipt_amount']+$receipt_sql[0]['receipt_cheque_amount']+$receipt_sql[0]['receipt_direct_deposit_amount'];

	$check_invoice_id_array = array('id' => $receipt_sql[0]['receipt_jobcard_id']);
	$check_invoice_id_sql = $db->query("SELECT invoice_id FROM tbl_galaxy_invoice WHERE invoice_job_card_id = :id", $check_invoice_id_array);
	
}
if (isset($_GET['jobcardid'])) {
	$jobcard_id = $_GET['jobcardid'];

	$jobcard_array = array('id' => $jobcard_id);
	$jobcard_sql = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_uniq_id = :id", $jobcard_array);
	
}

// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/pdf_page.php';
include DOC_ROOT.'template.php';
?>