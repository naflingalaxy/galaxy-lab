               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Job Card  (#<?php if (isset($new_jcard_id)) {echo $new_jcard_id;} ?>)</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Customer</label>
                                       <input type="text" id="customer" class="form-control" name="customer" list="numbers" autocomplete="off" oninput="hideList(this)" required>

                                       <datalist id="numbers" class="none">
                                          <?php if ($data_list) {
                                            for ($x=0; $x < count($data_list); $x++) {?>
                                          <option value="<?php echo $data_list[$x]['job_card_customer_name']; ?>"><?php echo $data_list[$x]['job_card_customer_name']; ?></option>
                                          <?php }} ?>
                                       </datalist>
                                    
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Address</label>
                                    
                                    <input type="text" class="form-control" name="address" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
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
                                    <label for="validationTooltip04">type of job</label>
                                    
                                    <input type="text" class="form-control" name="job" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="amount" id="" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
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



               <div class="row" style="margin-top: 30px;">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              
                              <div class="iq-card-body">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Job Cards (Pending)</h4>
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
                                 <div class="table-responsive" style="height: 60vh;">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col" style="display:none;">Ref No</th>
                                             <th scope="col">Job Card ID</th>
                                             <th scope="col">Customer ID</th>
                                             <th scope="col">Customer Name</th>
                                             <th scope="col">Address</th>
                                             <th scope="col">Number</th>
                                             <th scope="col">Job Type</th>
                                             <th scope="col">Amount</th>
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Added User</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Edit / Confirm</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($job_table_data) {
                                                      for ($x=0; $x < count($job_table_data); $x++) { ?>
                                          <tr>
                                             <td style="display:none;">#<?php echo $job_table_data[$x]['job_card_uniq_id']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_id']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_customer_id']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_customer_name']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_address']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_customer_number']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_job_type']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_amount']; ?></td>
                                             <td><?php echo $job_table_data[$x]['job_card_date_time']; ?></td>
                                             
                                             <td><?php echo $job_table_data[$x]['job_card_added_user_id']; ?></td>
                                            <td><div class="badge badge-pill badge-warning text-white">pending</div></td>
                                             <td>
                                                
                                             <div class="d-inline-block">
                                                

                                                <a href="<?php echo HTTP_PATH; ?>edit-job-card?editid=<?php echo $job_table_data[$x]['job_card_uniq_id'];?>" class="badge edit-btn approve"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="<?php echo HTTP_PATH; ?>job-card?confirmid=<?php echo $job_table_data[$x]['job_card_uniq_id'];?>" class="badge edit-btn btn-primary" onclick="return confirm('Are you sure you want to confirm Job Card #<?php echo $job_table_data[$x]['job_card_id']; ?> ?')"><i class="fa fa-check" aria-hidden="true"></i></a>

                                             
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

                        <div class="col-lg-12">
                           <div class="iq-card">
                              
                              <div class="iq-card-body">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Job Cards (Active)</h4>
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
                                 <div class="table-responsive" style="height: 60vh;">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col" style="display:none;">Ref No</th>
                                             <th scope="col">Job Card ID</th>
                                             <th scope="col">Customer ID</th>
                                             <th scope="col">Customer Name</th>
                                             <th scope="col">Address</th>
                                             <th scope="col">Number</th>
                                             <th scope="col">Job Type</th>
                                             <th scope="col">Amount</th>
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Added User</th>
                                             <th scope="col">Status</th>
                                             

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($job_table_data_active) {
                                                      for ($x=0; $x < count($job_table_data_active); $x++) { ?>
                                          <tr>
                                             <td style="display:none;">#<?php echo $job_table_data_active[$x]['job_card_uniq_id']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_id']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_customer_id']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_customer_name']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_address']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_customer_number']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_job_type']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_amount']; ?></td>
                                             <td><?php echo $job_table_data_active[$x]['job_card_date_time']; ?></td>
                                             
                                             <td><?php echo $job_table_data_active[$x]['job_card_added_user_id']; ?></td>
                                            <td><div class="badge badge-pill badge-success">active</div></td>
                                             
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
            
            function hideList(input) {
               var datalist = document.querySelector("datalist");
               if (input.value) {
                  datalist.class = "";          
               } else {
                  datalist.class = "none";
               }
            }
         </script>
         <script>
  
              $("#datatable tr").click(function() {
                var selected = $(this).hasClass("highlight");
                $("#datatable tr").removeClass("highlight");
                if(!selected)
                        $(this).addClass("highlight");
            });
            </script>
         
        