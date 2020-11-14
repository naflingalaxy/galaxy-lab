<?php
// Required pages & varibles ----------------------------
if (isset($_POST['btn-save'])) {



$id = filter_var($_POST['idz'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST['modalcostprice'], FILTER_SANITIZE_STRING);
$qtzy = filter_var($_POST['modalqty'], FILTER_SANITIZE_STRING);

$update_array = array('id' => $id, 'price' => $price, 'qty' => $qtzy);
$update_sql = $db->query("UPDATE tbl_galaxy_price_list SET price_list_item_cost = :price, price_list_item_qty = :qty WHERE price_list_item_auto_id = :id",$update_array);
}



if (isset($_GET['s'])) {
	$val = intval($_GET['s']);
// echo $_GET['q'];exit();
// $val = $_GET['s'];
// $arrayName = array('val' => $val);
$price_list_data = $db->query("SELECT * FROM tbl_galaxy_price_list WHERE price_list_item_auto_id = '".$val."' ORDER BY price_list_item_auto_id ASC");
} 
else {
	$price_list_data = $db->query("SELECT * FROM tbl_galaxy_price_list ORDER BY price_list_item_auto_id ASC");
}
$price_list_data = $db->query("SELECT * FROM tbl_galaxy_price_list ORDER BY price_list_item_auto_id ASC");
// $price_list_data = $db->query("SELECT * FROM tbl_galaxy_price_list ORDER BY price_list_item_auto_id ASC");

// $price_list_data = $db->query("SELECT * FROM tbl_galaxy_price_list WHERE  = '".$val."' ORDER BY price_list_item_auto_id  DESC");

// $q = intval($_GET['s']);
// $val = $_GET['s'];
// echo $_GET['q'];exit();

// $arrayName = array('val' => $val);
// $dataset_specific = $db->query("SELECT * FROM tbl_galaxy_price_list WHERE price_list_item_id = '".$val."' ORDER BY price_list_item_auto_id ASC");
// $dataaa = "<option>fsd</option>";
// $data = "";
// $dataset_specific->execute();
// $result = $dataset_specific->fetchAll();
	


// $tarrifList = json_encode($response);


?>

	<div class="iq-card">
	                      
	<div class="iq-card-header d-flex justify-content-between">
	   <div class="iq-header-title">
	      <h4 class="card-title">Price Lists</h4>
	   </div>
	</div>
	<div class="iq-card-body">
	   <?php if (isset($_COOKIE['delerrorMessage'])) {?>
	      <div class="alert text-white bg-danger" role="alert">
	      <div class="iq-alert-text"><?php echo $_COOKIE['delerrorMessage']; ?></div>
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="ri-close-line"></i>
	      </button>
	   </div>
	   
	   <?php } if (isset($_COOKIE['delsuccessMessage'])) {?>
	      <div class="alert text-white bg-success" role="alert">
	      <div class="iq-alert-text"><?php echo $_COOKIE['delsuccessMessage']; ?></div>
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="ri-close-line"></i>
	      </button>
	   </div>
	   <?php } ?>
	   <div class="table-responsive" style="height: 60vh;">
	      <table id="datatable" class="table table-striped table-bordered" >
	<thead>
	   <tr>
	       <th style="display:none;">Ref Id</th>
	       <th>Item Id</th>
	       <th>Item Cost Price</th>
	       <th>Item Qty</th>
	       <th>Item Added Date</th>
	       <th>Item Added User</th>
	       <th style="width: 7%;">Option</th>
	   </tr>
	</thead>
	<tbody>
	<?php if ($price_list_data) {
	 for ($x=0; $x < count($price_list_data); $x++) { ?>
	   <tr class="tabrw">
	       <td class="unq_id" id="uniq_id" style="display:none;"><?php echo $price_list_data[$x]['price_list_item_auto_id']; ?></td>
	       <td class="<?php echo $price_list_data[$x]['price_list_item_id']; ?>"><?php echo $price_list_data[$x]['price_list_item_id']; ?></td>
	       <td contenteditable="true" class="prize"><?php echo $price_list_data[$x]['price_list_item_cost']; ?></td>
	       <td contenteditable="true" class="qtyz"><?php echo $price_list_data[$x]['price_list_item_qty']; ?></td>
	       <td><?php echo $price_list_data[$x]['price_list_item_added_date_time']; ?></td>
	       <td><?php echo $price_list_data[$x]['price_list_item_added_user_id']; ?></td>
	       <td>
	       	<button type="button" class="tbrw" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit" aria-hidden="true"></i></button>
	        <a href="<?php echo HTTP_PATH; ?>price-list?deleteid=<?php echo $price_list_data[$x]['price_list_item_auto_id']; ?>" class="badge edit-btn cancel delbtn"  onclick="return confirm('Are you sure you want to delete #<?php echo $price_list_data[$x]['price_list_item_auto_id']; ?> ?')"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
	   </tr>
	<?php }} ?>   
	</tbody>

	</table>
	   </div>
	</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">
          	 <form method="post">
             <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Confirm Changes</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
               
                	<input type="hidden" name="idz" id="idz">
                	<label for="validationTooltip04">Price</label>
                    <input type="text" name="modalcostprice" id="modalcostprice">
                    <label for="validationTooltip04">Qty</label>
                    <input type="text" name="modalqty" id="modalqty">
                
                	
                </div>
                <div class="modal-footer">
                	<button type="submit" name="btn-save" class="btn btn-primary">Save changes</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                </div>
             </div>
             </form>
          </div>
       </div>

