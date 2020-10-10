<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
// require_once DOC_ROOT.'classes/db_connection.php';
$table_name = "tbl_galaxy_art_board";
require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "production";
$current_page_name_variable = "costing";
$product_name = "costing";
// Required pages & varibles ----------------------------
$board_table_data = $db->query("SELECT * FROM tbl_galaxy_art_board ORDER BY board_auto_id  
	DESC");
$board_table_data_count = $db->query("SELECT SUM(board_unit_qty) FROM tbl_galaxy_art_board WHERE board_gsm = '230' AND board_status = 'Active' ORDER BY board_added_date_time 
	DESC");

$dropdown_data = $db->query("SELECT item_id ,item_name FROM tbl_galaxy_stock_items WHERE item_cost_id = 1 ORDER BY item_id ASC LIMIT 11");



// $myString = filter_var($_POST['btnClickedValuee'], FILTER_SANITIZE_STRING);
// $my = explode(',', $myString);
// echo "result".$my;
// $string =  isset($_POST['valuee']); 
// $str_arr = explode (",", $string);  
// print_r($str_arr); 
// if (isset($_POST['btn-pending'])) {
	
// }
if (isset($_POST['btn-add'])) {
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
	$qty = filter_var($_POST['qty_main'], FILTER_SANITIZE_STRING);
	$artwork = filter_var($_POST['artwork'], FILTER_SANITIZE_STRING);
	$plate = filter_var($_POST['plate'], FILTER_SANITIZE_STRING);
	$laminating = filter_var($_POST['laminating'], FILTER_SANITIZE_STRING);
	$die_cutter = filter_var($_POST['die_cutter'], FILTER_SANITIZE_STRING);
	$die_cutting_charge = filter_var($_POST['die_cutting_charge'], FILTER_SANITIZE_STRING);
	$perparization = filter_var($_POST['perparization'], FILTER_SANITIZE_STRING);
	$transport = filter_var($_POST['transport'], FILTER_SANITIZE_STRING);
	$other = filter_var($_POST['other'], FILTER_SANITIZE_STRING);
	$impression = filter_var($_POST['impression'], FILTER_SANITIZE_STRING);
	$user_id = $_SESSION['user_id'];
	// $lastId = $db->lastInsertId();

	$parent_data_array = array('name' => $name, 'descr' => $desc, 'qty' => $qty, 'artwork' => $artwork, 'plate' => $plate, 'laminating' => $laminating, 'die_cutter' => $die_cutter, 'die_cutting_charge' => $die_cutting_charge, 'perparization' => $perparization, 'transport' => $transport, 'other' => $other, 'impression' => $impression, 'date_time' => $current_date_time, 'added_user_id' => $user_id);
	$parent_data_sql = $db->query("INSERT INTO tbl_galaxy_cost_parent (cost_parent_name, cost_parent_desc, cost_parent_qty, cost_parent_artwork, cost_parent_plate, cost_parent_laminating, cost_parent_cutter, cost_parent_cutter_charge, cost_parent_preparization, cost_parent_transport, cost_parent_other, cost_parent_impression, cost_parent_added_date_time, cost_parent_added_user_id) VALUES (:name, :descr, :qty, :artwork, :plate, :laminating, :die_cutter, :die_cutting_charge, :perparization, :transport, :other, :impression, :date_time, :added_user_id)", $parent_data_array);
	$parent_last_id = $db->lastInsertId();

	if ($parent_data_sql) {
		
		
		if (isset($_POST['valuee'])) {
		$string =  $_POST['valuee'];

		$array = explode(",",$string);
		$count = count($array);
		
		$min = 0;
		$max = $count;
		$max_loop = $max/4;
		$output = array_slice($array, $min, $max);
		$x = 0;
		
		

		for ($z=0; $z < $max_loop; $z++) {
		
			if ($x < 4) {
				$arrayName = array('parent_id' => $parent_last_id, 'name' => $output[0], 'qty' => $output[1], 'cost' => $output[2], 'profit' => $output[3]);
				$sql = $db->query("INSERT INTO tbl_galaxy_cost_child (cost_parent_id, cost_name, cost_qty, cost_cost, cost_pro) VALUES (:parent_id, :name, :qty, :cost, :profit)", $arrayName);
				$x=4;
				// print_r($string);
				// print_r($array);echo "   counting   :  ".$count;exit();
				$successMessage = "Data Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");

			}
			else if ($x >= 4 && $x < 8) {
				$arrayName = array('parent_id' => $parent_last_id, 'name' => $output[4], 'qty' => $output[5], 'cost' => $output[6], 'profit' => $output[7]);
				$sql = $db->query("INSERT INTO tbl_galaxy_cost_child (cost_parent_id, cost_name, cost_qty, cost_cost, cost_pro) VALUES (:parent_id, :name, :qty, :cost, :profit)", $arrayName);
				$x=8;
				$successMessage = "Data Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");
			}
			else if ($x >= 8 && $x < 12) {
				$arrayName = array('parent_id' => $parent_last_id, 'name' => $output[8], 'qty' => $output[9], 'cost' => $output[10], 'profit' => $output[11]);
				$sql = $db->query("INSERT INTO tbl_galaxy_cost_child (cost_parent_id, cost_name, cost_qty, cost_cost, cost_pro) VALUES (:parent_id, :name, :qty, :cost, :profit)", $arrayName);
				$x=12;
				$successMessage = "Data Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");
			}
			else if ($x >= 12 && $x < 16) {
				$arrayName = array('parent_id' => $parent_last_id, 'name' => $output[12], 'qty' => $output[13], 'cost' => $output[14], 'profit' => $output[15]);
				$sql = $db->query("INSERT INTO tbl_galaxy_cost_child (cost_parent_id, cost_name, cost_qty, cost_cost, cost_pro) VALUES (:parent_id, :name, :qty, :cost, :profit)", $arrayName);
				$x=16;
				$successMessage = "Data Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");
			}
			else if ($x >= 16 && $x < 20) {
				$arrayName = array('parent_id' => $parent_last_id, 'name' => $output[16], 'qty' => $output[17], 'cost' => $output[18], 'profit' => $output[19]);
				$sql = $db->query("INSERT INTO tbl_galaxy_cost_child (cost_parent_id, cost_name, cost_qty, cost_cost, cost_pro) VALUES (:parent_id, :name, :qty, :cost, :profit)", $arrayName);
				$x=20;
				$successMessage = "Data Added Successfully.!";
				setcookie("successMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");
			} else {
				$errorMessage = "Error in Adding Data.!";
				setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."costing");
			}

		}

		// echo "Meet Me: ".$variable_01." ".$variable_02;
		
	}
	} else {
		$errorMessage = "Error in Adding Data.!";
		setcookie("errorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."costing");
	}
}


// if (isset($_POST['btn-d'])) {
	
	 


// }

$include_file = DOC_ROOT.'pages/costing_page.php';
include DOC_ROOT.'template.php';
?>