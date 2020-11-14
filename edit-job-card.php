<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_sales_job_card";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "sales";
$current_page_name_variable = "edit-job-card";
$product_name = "Edit Job Card";
// Required pages & varibles ----------------------------

if ($_GET['editid']) {
	
	$edit_job_card_uniq_id = $_GET['editid'];
	$edit_job_card_array = array('job_card_uniq_id' => $edit_job_card_uniq_id);
	$edit_job_card = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_uniq_id = :job_card_uniq_id", $edit_job_card_array);
	
	$job_card_id = $edit_job_card[0]['job_card_id'];
	$customer_id = $edit_job_card[0]['job_card_customer_id'];
	$name = $edit_job_card[0]['job_card_customer_name'];
	$amount = $edit_job_card[0]['job_card_amount'];
	$address = $edit_job_card[0]['job_card_address'];
	$number = $edit_job_card[0]['job_card_customer_number'];
	$job = $edit_job_card[0]['job_card_job_type'];
}


// Adding data of JOB card-------------------------------------------------------------------
if (isset($_POST['btn-up'])) {

	$user_name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	
	$user_detect_array = array('user_name' => $user_name);
	// $job_card_id_sql = $db->query("SELECT MAX(job_card_id) FROM tbl_galaxy_sales_job_card");
	// $job_card_id = $job_card_id_sql[0]['MAX(job_card_id)'];
	// ++$job_card_id;
	$max_id_value = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_customer_name = :user_name", $user_detect_array);
	if (count($max_id_value) > 1) {

	$cus_id = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_customer_name = :user_name", $user_detect_array);
	$customer_id = $cus_id[0]['job_card_customer_id'];
	// $job_card_id = $cus_id[0]['MAX(job_card_id)'];
	// $job_card_id++;

	} else {
		// $cus_id = $db->query("SELECT MAX(job_card_customer_id), MAX(job_card_id) FROM tbl_galaxy_sales_job_card", $user_detect_array);
		// $customer_id = $cus_id[0]['MAX(job_card_customer_id)'];
		// $customer_id++;
		$cus_id = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_customer_name = :user_name", $user_detect_array);
		$customer_id = $cus_id[0]['job_card_customer_id'];
		// $customer_id = $customer_id;
	}	

	// $job_card_id = ;
	$name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
	$job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];

	$data_array = array('customer_id' => $customer_id, 'name' => $name, 'amount' => $amount, 'address' => $address, 'cnumber' => $number, 'job' => $job, 'date_time' => $date_time, 'user_id' => $user_id, 'uniq_id' => $edit_job_card_uniq_id);
	$data_sql = $db->query("UPDATE tbl_galaxy_sales_job_card SET job_card_customer_id = :customer_id, job_card_customer_name = :name, job_card_address = :address, job_card_customer_number = :cnumber, job_card_job_type = :job, job_card_amount = :amount, job_card_date_time = :date_time, job_card_added_user_id = :user_id WHERE job_card_uniq_id = :uniq_id", $data_array);

	if ($data_sql) {
		$successMessage = "Data Updated Successfully.!";
		setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");

	} else {

		$errorMessage = "Error in Updating Data.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	}

}



		 
// if (isset($_GET['confirmid'])) {
// 	$confirmid = filter_var($_GET['confirmid']);
// 	$stat = "1";
// 	$confirm_array = array('confirmid' => $confirmid, 'value' => $stat);
// 	$confirm_sql = $db->query("UPDATE tbl_galaxy_sales_job_card SET job_card_status = :value WHERE job_card_uniq_id = :confirmid", $confirm_array);

// 	if ($confirm_sql) {
// 		$delsuccessMessage = "Data edited Successfully.!";
// 		setcookie("delsuccessMessage", $delsuccessMessage, time() + (5 * 1), "/"); // 1 minute
// 		header("Location:".HTTP_PATH."job-card");
// 	} else {
// 		$delerrorMessage = "Error in Confirming Data.!";
// 		setcookie("delerrorMessage", $delerrorMessage, time() + (5 * 1), "/"); // 1 minute
// 		header("Location:".HTTP_PATH."job-card");
// 	}
// }


$data_list = $db->query("SELECT DISTINCT job_card_customer_name FROM tbl_galaxy_sales_job_card ORDER BY job_card_id DESC");
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/edit_job_card_page.php';
include DOC_ROOT.'template.php';
?>