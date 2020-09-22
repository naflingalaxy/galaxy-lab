               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Bristal Board </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Color</label>
                                    <select class="custom-select" id="validationTooltip04" name="color" required>
                                       <option selected disabled value="">Choose...</option>
                                       
                                       <option value="white">White</option>
                                       <option value="green">Green</option>
                                       <option value="blue">Blue</option>
                                       <option value="pink">Pink</option>
                                       <option value="yellow">Yellow</option>
                                       <option value="N/A">N/A</option>
                                       
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid color.
                                    </div>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Price <code>(per unit)</code></label>
                                          <input type="number" class="form-control" name="price" pattern="[0-9]+([\.,][0-9]+)?" autocomplete="off" step="0.01" maxlength="6" required>
                                 </div>

                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY <code>(unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="validationDefault03" name="qty" maxlength="6" autocomplete="off" required>

                                          
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
                                       <div class="icon iq-icon-box rounded-circle iq-bg-success-white rounded-circle">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                       <h6 class="card-title text-uppercase text-secondary mb-0">Bristal Board White</h6>
                                       <span class="h2 text-dark mb-0 counter"><?php $color = "white"; echo getstockcountbristal($color); ?></span>
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
                                       <h6 class="card-title text-uppercase text-secondary mb-0">Bristal Board Green</h6>
                                       <span class="h2 text-dark mb-0 counter"><?php $color = "green"; echo getstockcountbristal($color); ?></span>
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
                                       <div class="icon iq-icon-box rounded-circle iq-bg-success-blue rounded-circle">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                       <h6 class="card-title text-uppercase text-secondary mb-0">Bristal Board Blue</h6>
                                       <span class="h2 text-dark mb-0 counter"><?php $color = "blue"; echo getstockcountbristal($color); ?></span>
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
                                       <div class="icon iq-icon-box rounded-circle iq-bg-success-pink rounded-circle">
                                          <i class="ri-timer-2-line"></i>
                                       </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                       <h6 class="card-title text-uppercase text-secondary mb-0">Bristal Board Pink</h6>
                                       <span class="h2 text-dark mb-0 counter"><?php $color = "pink"; echo getstockcountbristal($color); ?></span>
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
                                       <div class="icon iq-icon-box rounded-circle iq-bg-success-yellow rounded-circle">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                       <h6 class="card-title text-uppercase text-secondary mb-0">Bristal Board Yellow</h6>
                                       <span class="h2 text-dark mb-0 counter"><?php $color = "yellow"; echo getstockcountbristal($color); ?></span>
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
                                             <th scope="col">Color</th>
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
                                             <td><span class="badge <?php echo strtolower($board_table_data[$x]['board_color']); ?> badge-warning ml-3"><?php echo $board_table_data[$x]['board_color']; ?></span></td>
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
                                                   
                                                   
                                                   <a href="<?php echo HTTP_PATH."bristal-board?editid=".$board_table_data[$x]['board_auto_id']."&status=active"; ?>" class="badge edit-btn approve">Approve</a>
                                                   <a href="<?php echo HTTP_PATH."bristal-board?editid=".$board_table_data[$x]['board_auto_id']."&status=cancelled"; ?>" class="badge edit-btn cancel">Cancel</a>
                                                   
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