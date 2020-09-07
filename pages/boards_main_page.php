
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
              <div class="row row-eq-height">
                  <!-- Content Top Banner Start -->
               <?php $item_date = $db->query("SELECT * FROM tbl_galaxy_stock_items WHERE item_section = '1'");
                   if ($item_date) {
                      for ($x=0; $x < count($item_date); $x++) { 
               ?>
                  <div class="col-lg-3 col-md-6">
                     <div class="iq-card wow zoomIn">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                 <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                                    <i class="ri-add-box-line"></i>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-3">
                                 <h6 class="card-title text-uppercase text-secondary mb-0">ITEM</h6>
                                 <span class="h2 text-dark mb-0"><?php echo $item_date[$x]['item_name']; ?></span>
                              </div>
                           </div>
                           <p class="mb-0 text-muted mt-3">
                              <a href="#"><button type="button" class="btn">Add Item</button></a>
                           </p>
                        </div>
                     </div>
                  </div>

               <?php }} ?>
               </div>
              
            </div>
         </div>
      </div>
      <!-- Wrapper END -->

