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
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <?php foreach ($message as $value) {$msg= $value->fname; $email= $value->email;} ?>
                            <p>HELLO WORLD, MY NAME IS <?php echo $msg; ?></p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="#"><?php echo $email;?></a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <?php foreach ($social as $value) {
                                    if(!empty($value->social_class)){ 
                                ?>
                                <li><a href="<?php echo $value->social_link; ?>"><i class="<?php echo $value->social_class; ?>"></i></a></li> 
                                <?php } } ?>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <?= form_open('User/search',['class='=>'myform','role'=>'search']);?>
                                <input type="search" name="query" placeholder="Search" value="">
                            <?= form_close();?>
                            <?= form_error('query');?>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="<?= base_url() ?>" rel="home">Blanca</a></h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li> 
                                <?= anchor('Login','Login') ?>
                            </li> 
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <?= form_open('user/search',['class='=>'myform','role'=>'search']) ?>
                                <input type="search"  >
                            <?= form_close();?>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->