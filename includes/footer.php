
      <!-- Footer -->
      <?php if (isset($_SESSION['user_id'])) { ?>
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright <?php echo date("Y"); ?> <a href="#">Galaxy</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <?php } ?>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo HTTP_PATH; ?>js/jquery.min.js"></script> 
      <script src="<?php echo HTTP_PATH; ?>js/popper.min.js"></script>
      <script src="<?php echo HTTP_PATH; ?>js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/waypoints.min.js"></script>
      <script src="<?php echo HTTP_PATH; ?>js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php echo HTTP_PATH; ?>js/custom.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> 

   </body>


</html>