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
	$cus_id = getcusidbyjcid($edit_job_card[0]['job_card_id']);
	$edit_customer_array = array('cus_id' => $cus_id);
	$edit_customer = $db->query("SELECT * FROM tbl_galaxy_customer WHERE customer_id = :cus_id", $edit_customer_array);

	$job_card_id = $edit_job_card[0]['job_card_id'];
	$customer_id = $edit_customer[0]['customer_id'];
	$name = $edit_customer[0]['customer_name'];
	$amount = $edit_job_card[0]['job_card_amount'];
	$address = $edit_customer[0]['customer_address'];
	$number = $edit_customer[0]['customer_number'];
	$job = $edit_job_card[0]['job_card_job_type'];
	$sales_man_name = $edit_job_card[0]['job_card_salesman'];
	$qty = $edit_job_card[0]['job_card_qty'];
}


// Adding data of JOB card-------------------------------------------------------------------
if (isset($_POST['btn-up'])) {

	$user_name = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
	
	$user_detect_array = array('user_name' => $user_name);
	// $job_card_id_sql = $db->query("SELECT MAX(job_card_id) FROM tbl_galaxy_sales_job_card");
	// $job_card_id = $job_card_id_sql[0]['MAX(job_card_id)'];
	// ++$job_card_id;
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

		$new_customer_array = array('cus_id' => $customer_id, 'cus_name' => $user_name, 'address' => $address, 'numberr' => $number, 'status' => '0');
		$new_customer_sql = $db->query("INSERT INTO tbl_galaxy_customer (customer_id, customer_name, customer_address, customer_number, customer_status) VALUES (:cus_id, :cus_name, :address, :numberr, :status)", $new_customer_array);
	}	

	// $job_card_id = ;
	$job_card_id_got = $job_card_id;
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
	$qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);
	$sales_man = filter_var($_POST['salesman'], FILTER_SANITIZE_STRING);
	$date_time = $current_date_time;
	$user_id = $_SESSION['user_id'];

	$data_array = array('job_card_id_got' => $job_card_id_got, 'customer_id' => $customer_id, 'amount' => $amount, 'sales_man' => $sales_man, 'qty' => $qty, 'job' => $job, 'date_time' => $date_time, 'user_id' => $user_id, 'uniq_id' => $edit_job_card_uniq_id);
	$data_sql = $db->query("UPDATE tbl_galaxy_sales_job_card SET job_card_id = :job_card_id_got, job_card_customer_id = :customer_id, job_card_job_type = :job, job_card_amount = :amount, job_card_qty = :qty, job_card_salesman = :sales_man, job_card_date_time = :date_time, job_card_added_user_id = :user_id WHERE job_card_uniq_id = :uniq_id", $data_array);

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


$data_list = $db->query("SELECT DISTINCT customer_name FROM tbl_galaxy_customer ORDER BY customer_uniq_id DESC");
// Adding data of JOB card-------------------------------------------------------------------
$include_file = DOC_ROOT.'pages/edit_job_card_page.php';
include DOC_ROOT.'template.php';
?>