
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Job Card</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Address</label>
                                    <input type="text" class="form-control" id="validationDefault02" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Contact No</label>
                                    <input type="text" class="form-control" id="validationDefault02" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefaultUsername">E-mail</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                       </div>
                                       <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Item</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <?php $item_date = $db->query("SELECT * FROM tbl_galaxy_items");
                                           if ($item_date) {
                                              for ($x=0; $x < count($item_date); $x++) { 
                                       ?>
                                       <option value="<?php echo $item_date[$x]['item_id']; ?>"><?php echo $item_date[$x]['item_name']; ?></option>
                                    <?php }} ?>
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-check">
                                 </div>
                              </div>
                              <div class="d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Preferences</h4>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Bank paper</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Bank paper</option>
                                       
                                       <option value="">Long - 60</option>
                                       <option value="">Long - 70</option>
                                       <option value="">Long - 80</option>
                                       <option value="">Long - 100</option>
                                       <option value="">short - 60</option>
                                       <option value="">short - 70</option>
                                       <option value="">short - 80</option>
                                       <option value="">short - 100</option>

                                    
                                    </select>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Art Paper</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Art Paper</option>
                                       
                                       <option value="">Art Paper - 100</option>
                                       <option value="">Art Paper - 120</option>
                                       <option value="">Art Paper - 150</option>
                                       

                                    
                                    </select>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="d-flex justify-content-between">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">NCR</h4>
                                       </div>
                                    </div>
                                    <label for="validationTooltip04">Art Paper</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Bank paper</option>
                                       
                                       <option value="">Art Paper - 100</option>
                                       <option value="">Art Paper - 120</option>
                                       <option value="">Art Paper - 150</option>
                                       

                                    
                                    </select>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefaultUsername">E-mail</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                       </div>
                                       <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Item</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>
                                       
                                       <option value="">hi</option>
                                       <option value="">hi</option>
                                    
                                    </select>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    
                                 </div>
                              </div>

                              <div class="form-group">
                                 <button class="btn btn-primary" type="submit">Submit form</button>
                              </div>

                           </form>
                        </div>
                     </div>
                     
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- Wrapper END -->

