               <!-- Page Content  -->
         <div id="content-page" class="content-page">

            <div style="display:none;">
            <?php 
            
            $total_qty = '32';
            $total_qty_db = 0;
            $total_qty_db_assign = '0';
                                 if ($board_table_data) {
                                    
                                       // echo $board_table_data[$x]['board_unit_qty']."  ";

                                    if ($available_qty < $total_qty) { ?>
                                     
                                     <div class="alert text-white bg-primary" role="alert">
                                          <div class="iq-alert-icon">
                                             <i class="ri-alert-line"></i>
                                          </div>
                                          <div class="iq-alert-text">Insufficient Stock (<?php echo $available_qty; ?> unit Available)</div>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="ri-close-line"></i>
                                          </button>
                                       </div>  
                                    <?php
                                       
                                    } else {
                                       if ($total_qty <= $board_table_data[0]['board_unit_qty']) {
                                          $deducated_value = $board_table_data[0]['board_unit_qty'] - $total_qty;
                                          echo "Customer Asking TQ is smaller than our stock <br>".$total_qty."-".$board_table_data[0]['board_unit_qty']."=".$deducated_value;
                                          echo "<br>Rows 1 Effected";
                                          
                                        }
                                        else {

                                          for ($x=0; $x < count($board_table_data); $x++) { 
                                           $deducated_value = $total_qty - $board_table_data[$x]['board_unit_qty'];
                                           echo "<br>#".$board_table_data[$x]['board_auto_id']." Customer Asking TQ is grater than our stock <br>".$total_qty."-".$board_table_data[$x]['board_unit_qty']."= ".abs($deducated_value)."";
                                          $total_qty = $deducated_value;

                                          if ($deducated_value >= 0) {
                                             echo "<br>Can update / update".$deducated_value." > ".$board_table_data[$x]['board_unit_qty'];
                                          } else {
                                             echo "<br>Canot update 0 update".$deducated_value." > ".$board_table_data[$x]['board_unit_qty'];
                                              
                                          }
                                           if ($deducated_value <= 0) {

                                             break;
                                           }
                                          
                                           
                                          }
                                        echo "<br>Rows ".++$x." Effected";
                                          
                                        } 
                                    }
                                       
                                       
                                        
                                    
                                   
                                 }
                                 
                                  ?>
            </div>
            <div class="container-fluid">

               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Art Board </h4>
                           </div>
                        </div>

                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">

                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">GSM</label>
                                    <select class="custom-select" name="gsm" required>
                                       <option selected disabled value="">Choose...</option>

                                       <option value="230">230</option>
                                       <option value="260">260</option>
                                       <option value="310">310</option>
                                       <!-- <option value="N/A">N/A</option> -->
                                       
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Brand</label>
                                    <select class="custom-select" name="brand" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option value="gc">GC</option>
                                       <option value="bohui">Bohui</option>
                                       <!-- <option value="N/A">N/A</option> -->
                                      
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Price <code>(per unit)</code></label>
                                            <input type="number" class="form-control" name="price" pattern="[0-9]+([\.,][0-9]+)?" autocomplete="off" step="0.01" maxlength="6" required>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY <code>(unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="qty" autocomplete="off" maxlength="6" required>

                                          
                                 </div>
                                 
                                 
                                 
                              </div>
                              

                              <div class="form-group">
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

                  <div class="col-lg-6 col-md-12 mb-5 mb-xl-0">
                     <div class="row row-eq-height">
                  <!-- Content Top Banner Start -->
                  
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-warning rounded-circle">
                                    <i class="ri-account-box-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">GC 230</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "gc";$gsm = 230;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-danger rounded-circle">
                                    <i class="ri-account-box-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">GC 260</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "gc";$gsm = 260;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-success rounded-circle">
                                    <i class="ri-timer-2-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">GC 310</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "gc";$gsm = 310;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                                    <i class="ri-timer-2-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">Bohui 230</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "bohui";$gsm = 230;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-success rounded-circle">
                                    <i class="ri-timer-2-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">Bohui 260</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "bohui";$gsm = 260;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                                    <i class="ri-timer-2-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">Bohui 310</h6>
                                 <span class="h2 text-dark mb-0 counter"><?php $gc = "bohui";$gsm = 310;  echo getstockcount($gc, $gsm); ?></span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
                  </div>
               </div>
               <div class="row">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Recent Activity (<?php echo preg_replace("/[^a-zA-Z]/", " ", $current_page); ?>)</h4>
                                 </div>
                                 <div class="count-number">
                                    <button type="button" class="btn mb-1 btn-outline-success ml-3">
                                       Active <span class="badge badge-success ml-2 shadow-none"><?php $status_text = "Active"; echo getstatuscount($status_text); ?></span>
                                    </button>
                                    <button type="button" class="btn mb-1 btn-outline-primary ml-3">
                                       Pending <span class="badge badge-primary ml-2 shadow-none"><?php $status_text = "Pending"; echo getstatuscount($status_text); ?></span>
                                    </button>
                                    <button type="button" class="btn mb-1 btn-outline-danger ml-3">
                                       Cancelled <span class="badge badge-danger ml-2 shadow-none"><?php $status_text = "Cancelled"; echo getstatuscount($status_text); ?></span>
                                    </button>
                                    
                                    </div>
                                 
                              </div>
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
                                                   
                                                   
                                                   <a href="<?php echo HTTP_PATH."art-board?editid=".$board_table_data[$x]['board_auto_id']."&status=active"; ?>" class="badge edit-btn approve">Approve</a>
                                                   <a href="<?php echo HTTP_PATH."art-board?editid=".$board_table_data[$x]['board_auto_id']."&status=cancelled"; ?>" class="badge edit-btn cancel">Cancel</a>
                                                   
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