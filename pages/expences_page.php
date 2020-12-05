               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Expence ()</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 <div class="col-md-6 mb-3">
                                 <label for="validationTooltip04">department</label>
                                          <select class="custom-select cost-main-menu" id="depart" name="depart" required>
                                             <option value="">Choose...</option>
                                             
                                             <option value="FUEL">FUEL</option>
                                             <option value="BIKE-PAYMENT">BIKE PAYMENT</option>
                                             <option value="TRANSPORT">TRANSPORT</option>
                                             <option value="ASSETS">ASSETS</option>
                                             <option value="DIALOG-BILL">Dialog Bill</option>
                                             <option value="General">STAFF WELFARE</option>
                                             <option value="MAINTENANCE">MAINTENANCE</option>
                                             <option value="MECHINE-MAINTAINCES">MECHINE MAINTAINCES</option>
                                             <option value="ELECTRICITY-BILL">ELECTRICITY BILL</option>
                                             <option value="FILTER-PAYMENT">FILTER PAYMENT</option>
                                             <option value="INK-LEASING">Ink leasing</option>
                                             <option value="DIE-CUT">DIE CUT</option>
                                             <option value="PLATE">PLATE</option>
                                             <option value="LAMINATING">LAMINATING</option>
                                             <option value="PETTY-CASH">PETTY CASH</option>

                                       </select>
                                 </div>
                                 <div class="col-md-6 mb-3 number">
                                    <label for="validationTooltip04">description</label>
                                    
                                    <input type="text" class="form-control" name="description" id="description" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3 number">
                                    <label for="validationTooltip04">amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="amount" id="number" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">reference number</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="reference" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 
                              </div>
                              

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add" class="btn btn-primary" type="submit">Add expence &emsp;# </button>
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
               
            
            <div class="row" style="margin-top: 30px;">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              
                              <div class="iq-card-body">
                                 <div class="iq-header-title">
                                    <h4 class="card-title"><a href="#" class="badge ml-3 badge-warning" style="font-weight: 600;font-size: 18px;">Expences</a></h4>
                                 </div>
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
                                 <div class="table-responsive" style="<?php if ($expenses_table_data) {echo "max-height: 60vh;";} ?>">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col" style="">Ref No</th>
                                             <th scope="col">Department</th>
                                              <th scope="col">Description</th>
                                              <th scope="col" style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;">Amount</th>
                                             <th scope="col">Expence Number</th>
                                             <!-- <th scope="col">Customer ID</th> -->
                                             <th scope="col">Added user</th>
                                             
                                            
                                             
                                             <th scope="col">Date</th>
                                             <th scope="col">status</th>
                                             <th scope="col">Edit / confirm</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($expenses_table_data) {
                                                      for ($x=0; $x < count($expenses_table_data); $x++) { ?>
                                          <tr>
                                             <td style="">#<?php echo $expenses_table_data[$x]['expenses_uniq_id']; ?></td>
                                             <td><?php echo $expenses_table_data[$x]['expenses_category']; ?></td>
                                             <td><?php echo $expenses_table_data[$x]['expenses_description']; ?></td>
                                             <td style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;"><?php echo $expenses_table_data[$x]['expenses_amount']; ?></td>
                                             <td><?php echo $expenses_table_data[$x]['expenses_number']; ?></td>

                                             
                                             
                                             <td><?php echo $expenses_table_data[$x]['expenses_added_user']; ?></td>
                                             <td><?php echo $expenses_table_data[$x]['expenses_date']; ?></td>
                                            
                                            <td><div class="badge badge-pill badge-warning text-white">pending</div></td>
                                             <td>
                                                
                                             <div class="d-inline-block">
                                                

                                                <a href="<?php echo HTTP_PATH; ?>edit-expenses?editid=<?php echo $expenses_table_data[$x]['expenses_uniq_id'];?>" class="badge edit-btn approve"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="<?php echo HTTP_PATH; ?>expenses?deleteid=<?php echo $expenses_table_data[$x]['expenses_uniq_id'];?>" class="badge edit-btn btn-primary" onclick="return confirm('Are you sure you want to confirm Expenses #<?php echo $expenses_table_data[$x]['expenses_uniq_id']; ?> ?')"><i class="fa fa-check" aria-hidden="true"></i></a>

                                             
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
         

         

        