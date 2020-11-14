               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Edit Job Card</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Customer</label>
                                       <input type="text" id="customer" class="form-control" value="<?php 
                                       if(isset($name)) {echo $name;} ?>" name="customer" list="numbers" autocomplete="off" oninput="hideList(this)" required>

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
                                    
                                    <input type="text" class="form-control" name="address" id="" value="<?php 
                                       if(isset($address)) {echo $address;} ?>" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Contact Number</label>
                                    
                                    <input type="text" class="form-control" value="<?php 
                                       if(isset($number)) {echo $number;} ?>" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="number" id="" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">type of job</label>
                                    
                                    <input type="text" class="form-control" value="<?php 
                                       if(isset($job)) {echo $job;} ?>" name="job" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" value="<?php 
                                       if(isset($amount)) {echo $amount;} ?>" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="amount" id="" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 
                                 
                              </div>
                              

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-up" class="btn btn-primary" type="submit">Update</button>
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
         
        