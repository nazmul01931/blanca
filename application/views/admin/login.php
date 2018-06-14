<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <?php echo link_tag('assets/css/bootstrap.min.css'); ?>
    <?php echo link_tag('assets/css/font-awesome.min.css'); ?>
    <?php echo link_tag('assets/css/swiper.min.css'); ?>
    <?php echo link_tag('assets/css/style.css'); ?> 
    <?php echo link_tag('assets/css/custom_style.css'); ?> 
    <?php echo link_tag('assets/css/admin_style.css'); ?> 
</head>
<body>
 
<div class="container">
    <div class="row"> 
        <div class="col-lg-4   col-md-4  col-sm-4"></div>
        <div class="col-lg-4   col-md-4  col-sm-4">
            <div class="row">
                <div class="login_wrap"> 
                    <?php if($error = $this->session->flashdata('Login_failed')): ?>
                    <div class="alert alert-dismissible alert-danger">
                        <strong><?=  $error ?></strong>    
                    </div>
                <?php endif; ?>
                    <?php echo form_open('Login/admin_login',['class'=>'my_form']); ?>
                        <?php 
                            $data = array( 
                                        'name'          => 'username',
                                        'class'         => 'form-control',
                                        'value'         => set_value('username'),
                                        'placeholder'   => 'Username..'
                                    );
                            echo form_input($data);
                            $data = array( 
                                        'name'          => 'password',
                                        'class'         => 'form-control',
                                        'value'         => set_value('password'),
                                        'placeholder'   => 'Password..'
                                    );
                             echo form_password($data);
                             $data = array(
                                        'name'          => 'button',
                                        'class'            => 'btn btn-primary',
                                        'value'         => 'true',
                                        'type'          => 'submit',
                                        'content'       => 'Login'
                                ); 
                                echo form_button($data);
                                 

                                
                        ?> 
                         
                    </form>
                    <p><a href="">Forget Password</a> <a href=" Signup">SignUp</a></p>
                    </div>              
                </div>
            </div>
            <div class="col-lg-4   col-md-4  col-sm-4  ">
                <div class="login_wrap">
                    
                <?php echo form_error('username'); ?>
                </div>
                <div class="login_wrap">
                    
                <?php echo form_error('password'); ?>
                </div>
         </div>
        </div>
         
    </div>
</div>
    
    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->
 
<script type='text/javascript' src='<?php echo base_url('assets/js/jquery.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/swiper.min.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/custom.js');?>'></script>

</body>
</html>