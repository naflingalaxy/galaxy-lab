               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Daily Sales</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              
                              
                              <div class="form-row">
                                 <div class="col-md-6 mb-6 seperate">
                                    <label for="validationTooltip04">Paper/Board</label>
                                          <select class="custom-select cost-main-menu" id="maincat" name="size" required>
                                             <option selected disabled value="">Choose...</option>
                                             
                                             <option value="1">Job Card</option>
                                             <option value="2">Invoice</option>
                                             <option value="3">Cash Reciept</option>
                                             
                                             
                                       </select>
                                       <div id="check" class="red box form-my">You have selected <strong>red option</strong> so i am here</div>
  
                                 </div>
                                 
                                 
                                 <!-- <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Job Card Id</label>
                                    
                                    <input type="number" class="form-control" name="jid" id="" autocomplete="off" required disabled>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div> -->
                                  <div class="form-row" id="loadd">
                                    <div class="" id="artboard">
                                    
                                    </div>
                                  </div>
                              </div>
                              
                              <div class="line"></div>
                              <div class="form-row" id="ld">
                                 
                               </div>
                              <div class="form-row">
                                 <div class="col-md-2 mb-3">
                                 <input type="hidden" value="hii" id="btnClickedValue_0" name="valuee" style="width: 100%;" value="" />

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 
                                 <button name="btn-add" class="btn btn-primary" id="submit" type="submit">Add</button><!-- <input type="submit" value="Join"> -->

                              </div>
                              </div> 
                              <div class="col-md-4 mb-3">
                              
                                
                              </div>
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
                  <div class="col-sm-12 col-lg-1"></div>
                  <div class="col-sm-12 col-lg-5">
                  
                     
                     <div id="snackbar-item-limit"><i class="fa fa-exclamation-triangle"></i>You Can Only ad 5 Items</div>
                  </div>
               </div>
               

               
            </div>
         </div>
         

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script>
            $(document).ready(function() {
  $("select").change(function() {
    $(this).find("option:selected").each(function() {
      var optionValue = $(this).attr("value");

      // Art Board------------------------------
      if (optionValue == "1") {   
         
          $('#loadd').addClass('cost-seperate');
         
         
         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-4 mb-3"><label for="validationTooltip04">Job Card Id</label><input type="number" class="form-control" name="jid" id="" autocomplete="off" required><div class="invalid-tooltip">Please add a Address.</div></div><div class="col-md-4 mb-3"><label for="validationTooltip04">Sales Man</label><input type="number" class="form-control" name="salesman" id="" autocomplete="off" required><div class="invalid-tooltip">Please add a Address.</div></div>';
         // Art board getting cost and selling price-------------------------------
            
                 
            //-----------------------------------------------------------------------------
        
      } else {
         
          document.getElementById("artboard").innerHTML = '';
          
      }

      

      
      if (optionValue == "44") {
        //  $('#loadd').removeClass('cost-seperate');
        // $('.artboard').show();
      }
    });
  }).change();
});


</script>

         
        