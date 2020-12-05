<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
require_once DOC_ROOT.'classes/db_connection.php';

require_once DOC_ROOT.'includes/functions.php';

$q = intval($_GET['q']);
// echo $_GET['q'];exit();
$val = $_GET['q'];
$qty = "1";
$customer_id = getcusidbyjcid($val);
$data = "";
$status = "0";

$cus_advance_pay_sqll = $db->query("SELECT * FROM tbl_galaxy_customer_account WHERE account_customer_id = '".$customer_id."' AND account_status = '".$status."'");
$job_card_details = $db->query("SELECT job_card_job_type FROM tbl_galaxy_sales_job_card WHERE job_card_customer_id = '".$customer_id."'");
$item_description = $job_card_details[0]['job_card_job_type'];
$item_qty = $job_card_details[0]['job_card_qty'];
$c_id = $job_card_details[0]['job_card_qty'];
// echo $c_id;		

echo json_encode(Array(
    'name' => "8",
    'phone' => "1234567890",
    'details' => "Details about..."
));
		
// $tarrifList = json_encode($response);


?>



