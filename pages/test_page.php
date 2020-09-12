               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">
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
                                       <option value="N/A">N/A</option>
                                       
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
                                       <option value="N/A">N/A</option>
                                      
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Price <code>(per unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="price" maxlength="6" required>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY <code>(unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="qty" maxlength="6" required>

                                          
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

                  <div class="col-lg-4 col-md-12 mb-5 mb-xl-0">
                     <div class="iq-card wow fadeInUp" data-wow-delay="0.8s">
                        
                        <div class="iq-card-body">
                         
                           <div class="row">
                              <div class="col-md-6">
                                 <div id="apex-column"></div>
                              </div>
                              <div class="col-md-6 align-self-center">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <h5 class="text-dark mb-0">Stock Item Quantity</h5>
                                       <h2 class="text-primary">85%<small class="ml-3">Traffic</small></h2>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <h6 class="d-inline-block w-100 mb-2">Previous scores</h6>
                                       <h5>August<span class="ml-3 font-size-22 text-success">69%</span></h5>
                                       <h5>September<span class="ml-3 font-size-22 text-danger">40%</span></h5>
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
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                       <i class="ri-more-2-fill"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                          <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="iq-card-body">
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
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Options</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($board_table_data) {
                                                      for ($x=0; $x < count($board_table_data); $x++) { ?>
                                          <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td><?php echo $board_table_data[$x]['board_price_per_unit']; ?></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <!-- <td><?php echo $board_table_data[$x]['board_auto_id']; ?></td> -->
                                             <td class="edit-record">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle edit text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                                   <i class="ri-equalizer-line"></i>
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                      
                                                      
                                                   </div>
                                                </div>
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