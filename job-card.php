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
$job_table_data_active = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_status = 1 OR job_card_status = 2 ORDER BY job_card_id DESC");
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
	$max_id_value = $db->query("SELECT customer_id FROM tbl_galaxy_customer WHERE customer_name = :user_name", $user_detect_array);
	if ($max_id_value) {

	$cus_id = $db->query("SELECT customer_id, customer_address, customer_number FROM tbl_galaxy_customer WHERE customer_name = :user_name", $user_detect_array);
	$customer_id = $cus_id[0]['customer_id'];
	$address = $cus_id[0]['customer_address'];
	$number = $cus_id[0]['customer_number'];
	// $job_card_id = $cus_id[0]['MAX(job_card_id)'];
	// $job_card_id++;

	} else {
		$cus_id = $db->query("SELECT MAX(customer_id) FROM tbl_galaxy_customer", $user_detect_array);
		$customer_id = $cus_id[0]['MAX(customer_id)'];
		$customer_id++;
		$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
		$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
	}	

	// $job_card_id = ;
	$name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	
	$job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
	$qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$salesman = filter_var($_POST['salesman'], FILTER_SANITIZE_STRING);
	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];
	$jc_invoice_id = "0";

	// Job Card adding process
	$data_array = array('job_card_id' => $job_card_id, 'customer_id' => $customer_id, 'amount' => $amount, 'sales' => $salesman, 'job' => $job, 'qty' => $qty, 'date_time' => $date_time, 'user_id' => $user_id);
	$data_sql = $db->query("INSERT INTO tbl_galaxy_sales_job_card (job_card_id, job_card_customer_id, job_card_job_type, job_card_amount, job_card_qty, job_card_salesman, job_card_date_time, job_card_added_user_id) VALUES (:job_card_id, :customer_id, :job, :amount, :qty, :sales, :date_time, :user_id)", $data_array);
	

	if ($data_sql) {
		// user adding process if exit NO if no Yes
		$detect_array_customer = array('id' => $customer_id);
		$detect_sql_customer = $db->query("SELECT customer_id FROM tbl_galaxy_customer WHERE customer_id = :id", $detect_array_customer);

		if (!$detect_sql_customer) {
			$user_adding = array('customer_id' => $customer_id, 'name' => $name, 'address' => $address, 'cnumber' => $number, 'status' => "0");
			$user_adding_sql = $db->query("INSERT INTO tbl_galaxy_customer (customer_id, customer_name, customer_address, customer_number, customer_status) VALUES (:customer_id, :name, :address, :cnumber, :status)", $user_adding);

			if ($user_adding_sql) {
				$successMessage = "Job Card Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."job-card");

			} else {
				$errorMessage = "Error in Adding Job Card.!";
				setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."job-card");
			}
		}
		

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

if (isset($_GET['closeid'])) {
	$closeid = filter_var($_GET['closeid']);
	$stat = "2";
	$close_array = array('closeid' => $closeid, 'value' => $stat);
	$close_sql = $db->query("UPDATE tbl_galaxy_sales_job_card SET job_card_status = :value WHERE job_card_uniq_id = :closeid", $close_array);

	if ($close_sql) {
		$delsuccessMessage = "Job Card Closed Successfully.!";
		setcookie("delsuccessMessage", $delsuccessMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	} else {
		$delerrorMessage = "Error in Closing Job Card.!";
		setcookie("delerrorMessage", $delerrorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."job-card");
	}
}


$data_list = $db->query("SELECT DISTINCT customer_name FROM tbl_galaxy_customer ORDER BY customer_id DESC");
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/job_card_page.php';
include DOC_ROOT.'template.php';
?>