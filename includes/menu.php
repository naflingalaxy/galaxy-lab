 <?php if (isset($_SESSION['user_id'])) { 

   ?>     
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?php echo HTTP_PATH; ?>index">
               <img src="images/logo.png" class="img-fluid" alt="">
               <span>Galaxy</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul class="iq-menu">
                     
                     <li class="<?php if ($main_menu_category == "board"){ echo "menu-open";} ?>">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-device-line"></i><span>Boards</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu <?php if ($main_menu_category == "board"){ echo "menu-open";} ?>" style="<?php if ($current_page_name_variable == "art-board") { echo "display: block;";} ?>">

                           
                           <?php 
                              $page_data = $db->query("SELECT item_url, item_name FROM tbl_galaxy_stock_items WHERE item_section = '1'");
                              if ($page_data) {
                                  for ($s=0; $s < count($page_data); $s++) { ?>
                           <li class="<?php if ($current_page_name_variable == $page_data[$s]['item_url']) { echo "active menu-open";}?>"><a href="<?php echo HTTP_PATH.$page_data[$s]['item_url']; ?>"><?php echo $page_data[$s]['item_name']; ?></a></li>
                           <?php }} ?>
                           
                        </ul>
                     </li>
                     <li class="<?php if ($main_menu_category == "paper"){ echo "menu-open";} ?>">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-file-fill"></i><span>Papers</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu <?php if ($main_menu_category == "paper"){ echo "menu-open";} ?>" style="<?php if ($page_name == "paper-board") { echo "display: block;";} ?>">
                          
                            <?php 
                              $page_data = $db->query("SELECT item_url, item_name FROM tbl_galaxy_stock_items WHERE item_section = '2'");
                              if ($page_data) {
                                  for ($s=0; $s < count($page_data); $s++) { ?>
                           <li class="<?php if ($current_page_name_variable == $page_data[$s]['item_url']) { echo "active menu-open";}?>"><a href="<?php echo HTTP_PATH.$page_data[$s]['item_url']; ?>"><?php echo $page_data[$s]['item_name']; ?></a></li>
                           <?php }} ?>
                           
                        </ul>
                     </li>
                     <li class="<?php if ($main_menu_category == "paint"){ echo "menu-open";} ?>">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-paint-brush-fill"></i><span>Paints</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu <?php if ($main_menu_category == "paint"){ echo "menu-open";} ?>" style="<?php if ($page_name == "paint") { echo "display: block;";} ?>">
                          
                          
                           <li class="<?php if ($current_page_name_variable == "paints") { echo "active menu-open";}?>"><a href="<?php echo HTTP_PATH; ?>add-paint">Add Paint</a></li>
                          
                           

                        </ul>
                     </li>
                     <li class="<?php if ($main_menu_category == "chemicals"){ echo "menu-open";} ?>">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-contrast-drop-line"></i><span>Chemicals</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu <?php if ($main_menu_category == "chemicals"){ echo "menu-open";} ?>" style="<?php if ($page_name == "chemicals") { echo "display: block;";} ?>">
                          
                           <!-- <li class=""><a href="<?php echo HTTP_PATH; ?>add-job-card">Add Job Card</a></li> -->
                           <?php 
                              $page_data = $db->query("SELECT item_url, item_name FROM tbl_galaxy_stock_items WHERE item_section = '4'");
                              if ($page_data) {
                                  for ($s=0; $s < count($page_data); $s++) { ?>
                           <li class="<?php if ($current_page_name_variable == $page_data[$s]['item_url']) { echo "active menu-open";}?>"><a href="<?php echo HTTP_PATH.$page_data[$s]['item_url']; ?>"><?php echo $page_data[$s]['item_name']; ?></a></li>
                           <?php }} ?>
                           

                        </ul>
                     </li>
                     <li class="<?php if ($main_menu_category == "jobcard"){ echo "menu-open";} ?>">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-contrast-drop-line"></i><span>Accounts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu <?php if ($main_menu_category == "jobcard"){ echo "menu-open";} ?>" style="<?php if ($page_name == "jobcard") { echo "display: block;";} ?>">
                          
                           <!-- <li class=""><a href="<?php echo HTTP_PATH; ?>add-job-card">Add Job Card</a></li> -->
                           <?php 
                              $page_data = $db->query("SELECT account_url, account_name FROM tbl_galaxy_accounts");
                              if ($page_data) {
                                  for ($s=0; $s < count($page_data); $s++) { ?>
                           <li class="<?php if ($current_page_name_variable == $page_data[$s]['account_url']) { echo "active menu-open";}?>"><a href="<?php echo HTTP_PATH.$page_data[$s]['account_url']; ?>"><?php echo $page_data[$s]['account_name']; ?></a></li>
                           <?php }} ?>
                           

                        </ul>
                     </li>
                     <li style="display: none;">
                        <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul class="iq-submenu">
                           <li><a href="app/index.html">Inbox</a></li>
                           <li><a href="app/email-compose.html">Email Compose</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
      </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="images/logo.png" class="img-fluid" alt="">
                     <span>Sofbox</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Dashboard</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo HTTP_PATH; ?>index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php $current_page = basename($_SERVER['PHP_SELF'],".php");  echo preg_replace("/[^a-zA-Z]/", " ", $current_page); ?></li>
                     </ul>
                  </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Type here to search..." />
                           </form>
                        </li>
                        
                        
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="<?php echo $_SESSION['user_image']; ?>" class="img-fluid rounded" alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height"><?php if (isset($_SESSION['user_full_name'])) {
                                      echo $_SESSION['user_full_name'];
                                    } ?></h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card iq-bg-primary-success-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-success">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 
                                
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-danger iq-sign-btn" href="<?php echo HTTP_PATH; ?>sign-out" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <?php } ?>