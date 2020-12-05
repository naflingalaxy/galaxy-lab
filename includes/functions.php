<?php 

// function getUrlId($itemId) {
// 	global $db;
// 	$getitem_array = array("itemid"=> $itemId);
//        $page_data = $db->query("SELECT item_url FROM tbl_galaxy_stock_items WHERE item_section = :itemid", $getitem_array);
//        if ($page_data) {
//        	   for ($x=0; $x < count($page_data); $x++) { 
//        	   		$page_url = $page_data[$x]['item_url'];
//        	   		 return $page_url;
//        	   }
//        }
      
// }
function getstatuscount($statusID){
	global $db;
	global $table_name;

	
		$array = array("Statusid"=> $statusID);
		$select_status = $db->query("SELECT COUNT(board_status) FROM $table_name WHERE board_status = :Statusid", $array);
		$status_count = $select_status[0]['COUNT(board_status)'];
	
	
	return $status_count;
}

function getstockcount($brand, $gsm){
	global $db;
	global $table_name;

	
		$array = array('brand' => $brand, 'gsm' => $gsm);
		$select_count = $db->query("SELECT SUM(board_unit_qty) FROM $table_name WHERE board_status = 'active' AND board_brand = :brand AND board_gsm = :gsm", $array);
		$item_count = $select_count[0]['SUM(board_unit_qty)'];
	
	
	return $item_count;
}

function getstockcountbristal($color){
	global $db;
	global $table_name;

	
		$array = array('color' => $color);
		$select_count = $db->query("SELECT SUM(board_unit_qty) FROM $table_name WHERE board_color = :color", $array);
		$item_count = $select_count[0]['SUM(board_unit_qty)'];
	
	
	return $item_count;
}

function getcusname($cusID){
	global $db;
	global $table_name;

	
		$array = array("cusid"=> $cusID);
		$select_name = $db->query("SELECT customer_name FROM tbl_galaxy_customer WHERE customer_id = :cusid", $array);
		$selected_name = $select_name[0]['customer_name'];
	
	
	return $selected_name;
}

function getcusidbyjcid($jid) {
	global $db;
	global $table_name;

	
		$array = array("jc_id"=> $jid);
		$select_cus_id = $db->query("SELECT job_card_customer_id FROM tbl_galaxy_sales_job_card WHERE job_card_id = :jc_id", $array);
		$select_detect_cus_id = $select_cus_id[0]['job_card_customer_id'];
	
	
	return $select_detect_cus_id;

}

function totalcreditamount($cusid) {
	global $db;
	global $table_name;

	
		$array = array("cusid"=> $cusid);
		$select_cus_id = $db->query("SELECT receipt_amount, receipt_cheque_amount, receipt_direct_deposit_amount FROM tbl_galaxy_receipt WHERE receipt_cus_id = :cusid", $array);
		$select_detect_cus_id = $select_cus_id[0]['receipt_amount']+$select_cus_id[0]['receipt_cheque_amount']+$select_cus_id[0]['receipt_direct_deposit_amount'];
	
	
	return $select_detect_cus_id;

}
?>

