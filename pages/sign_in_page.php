        <!-- Sign in Start -->
        <section class="sign-in-page bg-white">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <p>Enter username and password to access admin panel.</p>
                            <form class="mt-4" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control mb-0" name="user_name" id="exampleInputEmail1" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <!-- <a href="#" class="float-right">Forgot password?</a> -->
                                    <input type="password" class="form-control mb-0" name="user_password" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <div class="d-inline-block w-100">
                                    <!-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary" name="signin-btn">Sign in</button>
                                </div>
                                <!-- <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div> -->
                            </form>
                            <?php if (isset($_COOKIE['cookieErrorMessage'])) {?>
                                <div class="alert text-white bg-danger" role="alert">
                                <div class="iq-alert-icon">
                                 <i class="ri-information-line"></i>
                                </div>
                                <div class="iq-alert-text">
                                    <?php echo $_COOKIE['cookieErrorMessage']; ?>
                                </div>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="ri-close-line"></i>
                                  </button>
                               </div>
                                <?php } ?>

                               
                            
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="sign-in-detail text-white bg-primary" >
                            <a class="sign-in-logo mb-5" href="#"><img src="images/logo-whitee.png" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>