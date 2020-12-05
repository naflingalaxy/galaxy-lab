               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Job Card  (<?php if (isset($new_jcard_id)) {echo $new_jcard_id;} ?>)</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row">
                                 
                                 
                                 <div class="col-md-6 mb-3 number">
                                    <label for="validationTooltip04">category</label>
                                    
                                    <input type="text" class="form-control" name="address" id="address" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3 number">
                                    <label for="validationTooltip04">brand</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="number" id="number" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">sub category</label>
                                    
                                    <input type="text" class="form-control" name="job" id="" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">gsm</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="qty" id="qty" maxlength="6" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">type</label>
                                    
                                    <input type="text" class="form-control" name="amount" id="amount" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">color</label>
                                    
                                    <input type="text" class="form-control" name="amount" id="amount" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">origin</label>
                                    
                                    <input type="text" class="form-control"  name="amount" id="amount" maxlength="10" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Total Amount</label>
                                    
                                    <input type="text" class="form-control" name="" id="multiple" maxlength="6" autocomplete="off" readonly
                                     required>
                                    <div class="invalid-tooltip">
                                       Please add a Number.
                                    </div>
                                 </div>
                              </div>
                              

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add" class="btn btn-primary" type="submit">Add Job Card &emsp;# <?php if (isset($new_jcard_id)) {echo $new_jcard_id;} ?></button>
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
               
            </div>
         </div>
         

        