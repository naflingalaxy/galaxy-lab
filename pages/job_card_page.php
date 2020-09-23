               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Job Card </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Name</label>
                                    
                                    <input type="text" class="form-control" name="name" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Item</label>
                                    
                                    <input type="text" class="form-control" name="item" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Address</label>
                                    
                                    <input type="text" class="form-control" name="address" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Contact Number</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="number" id="" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Email</label>
                                    
                                    <input type="email" class="form-control" name="email" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Email.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Quantity</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="quantity" id="" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-6">
                                    <label for="validationTooltip04">size</label>
                                          <select class="custom-select" id="" name="brand" required>
                                             <option selected disabled value="">Choose...</option>
                                             <option value="A6">A6</option>
                                             <option value="A5">A5</option>
                                             <option value="A4">A4</option>
                                             <option value="A3">A3</option>
                                             <option value="A2">A2</option>
                                             <option value="B5">B5</option>
                                             <option value="B4">B4</option>
                                             <option value="B3">B3</option>
                                             <option value="legal">Legal</option>
                                             <option value="letter">Letter</option>
                                             <option value="3intoA4">3 into A4</option>
                                             <option value="3intoA3">3 into A3</option>
                                       </select>
                                 </div>
                                 <div class="col-md-6 mb-3 form-group">
                                    

                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadio6" name="timespan" value="ongoing" class="custom-control-input" required> 
                                       <label class="timespan custom-control-label" for="customRadio6"> One Color</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadio2" name="timespan" value="history" class="timespan custom-control-input" required>
                                       <label class="custom-control-label" for="customRadio2"> Two Color</label>
                                    </div>
                                 <div class="col-md-12 single">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label for="validationTooltip04">One Side color</label>
                                          <select class="custom-select" id="" name="brand" required>
                                             <option selected disabled value="">Choose...</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                       </select>
                                       <div class="invalid-tooltip">
                                          Please select a valid state.
                                       </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                                 <div class="col-md-12 end_date">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label for="validationTooltip04">front side color</label>
                                          <select class="custom-select" id="" name="brand" required>
                                             <option selected disabled value="">Choose...</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                       </select>
                                       <div class="invalid-tooltip">
                                          Please select a valid state.
                                       </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="validationTooltip04">back side color</label>
                                          <select class="custom-select" id="" name="brand" required>
                                             <option selected disabled value="">Choose...</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                       </select>
                                       <div class="invalid-tooltip">
                                          Please select a valid state.
                                       </div>
                                       </div>
                                    </div>
                                  </div>
                                  
                                 </div>
                                 
                                 
                                 
                                 
                              </div>
                              

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add" class="btn btn-primary" type="submit">Add</button>
                              </div>

                           </form>
                           <?php if (isset($_COOKIE['errorMessage'])) {?>
                              <div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-text"><?php echo $_COOKIE['errorMessage']; ?></div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           
                           <?php } if (isset($_COOKIE['successMessage'])) {?>
                              <div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text"><?php echo $_COOKIE['successMessage']; ?></div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                     
                  </div>
                  
               </div>
               <!-- <input type="radio" class="timespan" name="timespan" value="ongoing">On-going
<input type="radio" class="timespan" name="timespan" value="history">Historical
    <div class="end_date">End Date</div> -->



               <div class="row" style="margin-top: 150px;">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              
                              <div class="iq-card-body">
                                 <?php if (isset($_COOKIE['editerrorMessage'])) {?>
                                    <div class="alert text-white bg-danger" role="alert">
                                    <div class="iq-alert-text"><?php echo $_COOKIE['editerrorMessage']; ?></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 
                                 <?php } if (isset($_COOKIE['editsuccessMessage'])) {?>
                                    <div class="alert text-white bg-success" role="alert">
                                    <div class="iq-alert-text"><?php echo $_COOKIE['editsuccessMessage']; ?></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 <?php } ?>
                                 <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col">Ref No</th>
                                             <th scope="col">ID</th>
                                             <th scope="col">GSM</th>
                                             <th scope="col">Brand</th>
                                             <th scope="col">Qty</th>
                                             <th scope="col">Price (per unit)</th>
                                             <th scope="col">Total</th>
                                             <th scope="col">Added User</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Options</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($board_table_data) {
                                                      for ($x=0; $x < count($board_table_data); $x++) { ?>
                                          <tr>
                                             <td>#<?php echo $board_table_data[$x]['board_auto_id']; ?></td>
                                             <td><?php echo $board_table_data[$x]['board_uniq_id']; ?></td>
                                             <td><?php if ($board_table_data[$x]['board_gsm'] == "0") {echo "N/A";} else {echo $board_table_data[$x]['board_gsm'];} ?></td>
                                             <td><?php echo $board_table_data[$x]['board_brand']; ?></td>
                                             <td><?php echo $board_table_data[$x]['board_unit_qty']; ?></td>
                                             <td><?php echo $board_table_data[$x]['board_price_per_unit']; ?></td>
                                             <td><?php echo $board_table_data[$x]['board_added_total_amount']; ?></td>
                                             <td><?php echo $board_table_data[$x]['board_added_user_id']; ?></td>
                                             <td>
                                                <?php if ($board_table_data[$x]['board_status'] == "active") {?>
                                                <div class="badge badge-pill badge-success"><?php  echo $board_table_data[$x]['board_status']; ?></td></div>
                                             <?php } else if ($board_table_data[$x]['board_status'] == "cancelled") { ?>
                                                <div class="badge badge-pill badge-danger text-white"><?php  echo $board_table_data[$x]['board_status']; ?></td></div>
                                             <?php } else { ?>
                                                <div class="badge badge-pill badge-warning text-white"><?php  echo $board_table_data[$x]['board_status']; ?></div>
                                             <?php } ?>
                                             </td>
                                             <td><?php echo $board_table_data[$x]['board_added_date_time']; ?></td>
                                             <!-- <td><?php echo $board_table_data[$x]['board_auto_id']; ?></td> -->
                                             <td class="edit-record">
                                                <?php if ($board_table_data[$x]['board_status'] == "pending") {?>
                                                <div class="d-inline-block">
                                                   
                                                   
                                                   <a href="<?php echo HTTP_PATH."box-board?editid=".$board_table_data[$x]['board_auto_id']."&status=active"; ?>" class="badge edit-btn approve">Approve</a>
                                                   <a href="<?php echo HTTP_PATH."box-board?editid=".$board_table_data[$x]['board_auto_id']."&status=cancelled"; ?>" class="badge edit-btn cancel">Cancel</a>
                                                   
                                                </div>
                                             <?php } ?>
                                             </td>
                                          </tr>
                                          <?php }} ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
            </div>
         </div>
         

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script>
            $(document).ready(function() {
             $('.end_date').hide();
             $('.single').hide();
                 $('.timespan').click(function () {
                  var selected = $(this).val();  
                     if(selected == 'history') {
                      $('.end_date').show();
                      $('.single').hide();
                   } else {
                      $('.single').show();
                      $('.end_date').hide();
                    }
                   //  if(selected == 'ongoing') {
                   //    $('.single').show();
                      
                   // } else {
                   //    $('.single').hide();
                      
                   //  }
             });       
           });
         </script>
         
        