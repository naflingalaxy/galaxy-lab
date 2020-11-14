<?php
// Required pages & varibles ----------------------------
include 'top.php';
include 'includes/auth.php';
require_once DOC_ROOT.'classes/db_connection.php';

require_once DOC_ROOT.'includes/functions.php';

$q = intval($_GET['q']);
// echo $_GET['q'];exit();
$val = $_GET['q'];
// $arrayName = array('val' => $val);
$dataset_specific = $db->query("SELECT * FROM tbl_galaxy_price_list WHERE price_list_item_id = '".$val."' ORDER BY price_list_item_auto_id ASC");
$dataaa = "<option>fsd</option>";
$data = "";
// $dataset_specific->execute();
// $result = $dataset_specific->fetchAll();
if ($dataset_specific) {
	for ($s=0; $s < count($dataset_specific); $s++) {

		$data .= "<option value='".$dataset_specific[$s]['price_list_item_cost']."'>".$dataset_specific[$s]['price_list_item_cost']."</option>";
	}
	// echo "<option selected disabled value="">Choose...</option>";
	echo "<option selected disabled value=''>Choose...</option>".$data;
	// echo "<input type='text' name='data1' id='data1' value='".$data."'>";
	// echo '<script> var test = "<option>23</option><option>33</option><option>12</option><option>90</option><option>3</option><option>12.5</option>";';
	// echo 'window.test = "'.$data.'";';
	// echo "</script>";
         
}
		


// $tarrifList = json_encode($response);


?>

