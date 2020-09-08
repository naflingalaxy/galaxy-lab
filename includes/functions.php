<?php 

function links($sec_id) {
       $page_data = $db->query("SELECT item_url FROM tbl_galaxy_stock_items WHERE item_section = '1'");
       if ($page_data) {
       	 for ($z=0; $z < count($page_data); $z++) { 
       	 	$page_url = $page_data[$z]['item_url'];
       	 	return $page_url;
       	 }
       }
}
?>