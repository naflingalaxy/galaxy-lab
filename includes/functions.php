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
?>