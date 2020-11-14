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
	$invoice_sql = $db->query("SELECT * FROM tbl_galaxy_invoice WHERE invoice_id = :id", $invoice_array);
}

// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/pdf_page.php';
include DOC_ROOT.'template.php';
?>