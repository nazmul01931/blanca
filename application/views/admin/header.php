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
            <div class="row">
                <div class="col-11">  
                    <nav class=" admin_menu"> 
                        <ul class=" ">
                            <li class="current-menu-item"><?= anchor('Admin','Home',['class'=>'btn btn-primary pull-right']);?></li> 
                            <li><?= anchor('Admin/add_blog','Add New Post',['class'=>'btn btn-primary pull-right']);?> </li>    
                            <li><?= anchor('Admin/add_slider','Slider',['class'=>'btn btn-primary pull-right']);?> </li>    
                            <li><?= anchor('Admin/add_category','Category',['class'=>'btn btn-primary pull-right']);?> </li>    
                        </ul>  
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
                <div class="col-1">  
                    <nav class="site-navigation admin_menu"> 
                        <ul class="flex-lg ">  
                          <span><?php echo anchor('login/logout', 'Logout'); ?></span> 
                        </ul>  
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->