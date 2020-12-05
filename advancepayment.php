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
$job_card_details = $db->query("SELECT * FROM tbl_galaxy_sales_job_card WHERE job_card_customer_id = '".$customer_id."'");
$item_description = $job_card_details[0]['job_card_job_type'];
$item_qty = $job_card_details[0]['job_card_qty'];
$c_id = $job_card_details[0]['job_card_qty'];

if ($job_card_details) {
	

		$data .= '<div class="col-md-6 mb-3"><label for="validationTooltip04">Customer Name</label><input type="text" class="form-control" name="name" id="name" autocomplete="off" value="'.getcusname($job_card_details[0]['job_card_customer_id']).'" required="" readonly><div class="invalid-tooltip">Please add a Item.</div></div><div class="col-md-6 mb-3"><label for="validationTooltip04">Description</label><input type="text" class="form-control" name="description" id="description" autocomplete="off" value="'.$job_card_details[0]['job_card_job_type'].'" required=""><div class="invalid-tooltip">Please add a Address.</div></div><div class="col-md-6 mb-3"><label for="validationTooltip04">Qty</label><input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,);" value="'.$job_card_details[0]['job_card_qty'].'" name="qty" id="qty" autocomplete="off" required=""><div class="invalid-tooltip">Please add a Address.</div></div><div class="col-md-6 mb-3"><label for="validationTooltip04">Rate</label><input type="text" class="form-control" oninput="this.value=this.value.replace(/[^.0-9]/g,);" value="'.$job_card_details[0]['job_card_amount'].'" name="rate" id="rate" maxlength="10" autocomplete="off" required=""><div class="invalid-tooltip">Please add a Number.</div></div><div class="col-md-6 mb-3"><label for="validationTooltip04">Discount Amount<code></code></label><input type="text" class="form-control" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,);" name="discount" id="discount" autocomplete="off" required=""><div class="invalid-tooltip">Please add a Number.</div></div>';
		echo $data;
	
}
if ($cus_advance_pay_sqll) {
			for ($x=0; $x < count($cus_advance_pay_sqll); $x++) { 
				if ($cus_advance_pay_sqll[$x]['account_credit'] != "0") {



					$data_option = "<option value='".$cus_advance_pay_sqll[$x]['account_credit']."'>".$cus_advance_pay_sqll[$x]['account_credit']."</option>";
				} 

				
	}
	// echo "<option selected disabled value="">Choose...</option>";
	echo '<div class="col-md-6 mb-3"><label for="validationTooltip04">Advance Paid</label><select class="custom-select cost-main-menu" onchange="advancechange();" id="advance" name="advance" required><option selected disabled value="">Choose...</option>'.$data_option.'</select></div>';
	

			
		} else {
					echo '<div class="col-md-6 mb-3"><label for="validationTooltip04">Advance Paid</label><select class="custom-select cost-main-menu" onchange="advancechange();" id="advance" name="advance" required><option selected disabled value="">Choose...</option><option value="0">no advance</option></select></div>';
					
				}		

		
// $tarrifList = json_encode($response);


?>



