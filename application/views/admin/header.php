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
    <?php echo link_tag('assets/css/admin_style.css'); ?> 
</head>
<body>
<div class="outer-container">
    <header class="site-header">
         

<div class="container">
    <div class="row custom_nav">
        <div class="col-11">  
            <nav class=" admin_menu"> 
                <ul class=" ">
                    <li class="<?php if($this->uri->segment(2)=='dashboard' || $this->uri->segment(2)==''){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin','Home',['class'=>'']);?>   </li> 

                    <li class="<?php if($this->uri->segment(2)=='add_blog'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_blog','Add New Post',['class'=>'']);?> </li>

                    <li class="<?php if($this->uri->segment(2)=='add_slider' || $this->uri->segment(2)=='Edit_slider'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_slider','Slider',['class'=>'']);?> </li>  

                    <li class="<?php if($this->uri->segment(2)=='add_category' || $this->uri->segment(2)=='edit_category'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_category','Category',['class'=>'']);?> </li>

                    <li class="<?php if($this->uri->segment(2)=='add_awards' || $this->uri->segment(2)=='edit_awards'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_awards','Awards',['class'=>'']);?> </li>    

                    <li class="<?php if($this->uri->segment(2)=='add_social' || $this->uri->segment(2)=='upadte_social'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_social','Social Link',['class'=>'']);?> </li>

                    <li class="<?php if($this->uri->segment(2)=='inbox'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/inbox','Inbox',['class'=>'']);?> </li>   

                    <li class="<?php if($this->uri->segment(2)=='add_section' || $this->uri->segment(2)=='update_section'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_section','Section',['class'=>'']);?> </li> 

                    <li class="<?php if($this->uri->segment(2)=='add_page' || $this->uri->segment(2)=='update_page'){echo 'active_admin_menu';}?>">
                        <?= anchor('Admin/add_page','Page',['class'=>'']);?> </li>   

                </ul>  
            </nav><!-- .site-navigation -->
        </div><!-- .col -->
        <div class="col-1 custom_nav">  
            <nav class="admin_menu"> 
                <ul class="">
                    <li><?= anchor('Login/Logout','Logout',['class'=>'']);?> </li>   
                </ul>  
            </nav><!-- .site-navigation -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->
    </header><!-- .site-header -->