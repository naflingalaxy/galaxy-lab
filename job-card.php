<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "sales";
$current_page_name_variable = "job-card";
$product_name = "Job Card";
// Required pages & varibles ----------------------------
$job_table_data = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_status = 0 ORDER BY job_card_id DESC");
$job_table_data_active = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_status = 1 ORDER BY job_card_id DESC");
$jcard_id = $db->query("SELECT MAX(job_card_id) FROM tbl_galaxy_sales_job_card");
$new_jcard_id = $jcard_id[0]['MAX(job_card_id)'];
++$new_jcard_id;


// Adding data of JOB card-------------------------------------------------------------------
if (isset($_POST['btn-add'])) {

	$user_name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	
	$user_detect_array = array('user_name' => $user_name);
	$job_card_id_sql = $db->query("SELECT MAX(job_card_id) FROM tbl_galaxy_sales_job_card");
	$job_card_id = $job_card_id_sql[0]['MAX(job_card_id)'];
	++$job_card_id;
	$max_id_value = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_customer_name = :user_name", $user_detect_array);
	if ($max_id_value) {

	$cus_id = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_customer_name = :user_name", $user_detect_array);
	$customer_id = $cus_id[0]['job_card_customer_id'];
	// $job_card_id = $cus_id[0]['MAX(job_card_id)'];
	// $job_card_id++;

	} else {
		$cus_id = $db->query("SELECT MAX(job_card_customer_id), MAX(job_card_id) FROM tbl_galaxy_sales_job_card", $user_detect_array);
		$customer_id = $cus_id[0]['MAX(job_card_customer_id)'];
		$customer_id++;
		
	}	

	// $job_card_id = ;
	$name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
	$job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];

	$data_array = array('job_card_id' => $job_card_id, 'customer_id' => $customer_id, 'name' => $name, 'amount' => $amount, 'address' => $address, 'cnumber' => $number, 'job' => $job, 'date_time' => $date_time, 'user_id' => $user_id);
	$data_sql = $db->query("INSERT INTO tbl_galaxy_sales_job_card (job_card_id, job_card_customer_id, job_card_customer_name, job_card_address, job_card_customer_number, job_card_job_type, job_card_amount, job_card_date_time, job_card_added_user_id) VALUES (:job_card_id, :customer_id, :name, :address, :cnumber, :job, :amount, :date_time, :user_id)", $data_array);

	if ($data_sql) {
		$successMessage = "Job Card Added Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");

	} else {

		$errorMessage = "Error in Adding Job Card.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	}

}



		 
if (isset($_GET['confirmid'])) {
	$confirmid = filter_var($_GET['confirmid']);
	$stat = "1";
	$confirm_array = array('confirmid' => $confirmid, 'value' => $stat);
	$confirm_sql = $db->query("UPDATE tbl_galaxy_sales_job_card SET job_card_status = :value WHERE job_card_uniq_id = :confirmid", $confirm_array);

	if ($confirm_sql) {
		$delsuccessMessage = "Job Card Confirmed Successfully.!";
		setcookie("delsuccessMessage", $delsuccessMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	} else {
		$delerrorMessage = "Error in Confirming Job Card.!";
		setcookie("delerrorMessage", $delerrorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	}
}


$data_list = $db->query("SELECT DISTINCT job_card_customer_name FROM tbl_galaxy_sales_job_card ORDER BY job_card_id DESC");
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/job_card_page.php';
include DOC_ROOT.'template.php';
?>