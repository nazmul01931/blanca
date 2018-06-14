<?php include('header.php'); ?>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="<?php echo base_url('images/slider.jpg'); ?>" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="<?php echo base_url('images/slider.jpg'); ?>" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="<?php echo base_url('images/slider.jpg'); ?>" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                    </div>
                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <a href="#">
                        <div class="yt-subscribe">
                            <img src="images/yt-subscribe.png" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">  
                    <?php foreach ($blog as $row) {?> 
                    <div class="content-wrap">
                        <p>Search Result for: <?= set_value('query');?></p>
                        <header class="entry-header">
                            <div class="posted-date">
                                <?= 
                                date($row->created_at)
                                 //mdate($row->created_at );
                                ?>
                            </div><!-- .posted-date -->

                            <h2 class="entry-title"><?= $row->title ?></h2>

                            <div class="tags-links">
                                <a href="#">#winter</a>
                                <a href="#">#love</a>
                                <a href="#">#snow</a>
                                <a href="#">#january</a>
                            </div><!-- .tags-links -->
                        </header><!-- .entry-header -->
                        
                        <figure class="featured-image">
                            <img src="images/1.jpg" alt="">
                        </figure><!-- .featured-image -->

                        <div class="entry-content">
                            <p><?= String_length($row->body) ?></p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                            <ul class="post-share flex align-items-center order-3 order-lg-1">
                                <label>Share</label>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- .post-share -->

                            <a class="read-more order-2" href="<?= base_url('Details/single');?>">Read more</a>

                            <div class="comments-count order-1 order-lg-3">
                                <a href="#"><?php echo $this->Default_Model->comment_count($row->id);?></a>
                            </div><!-- .comments-count -->
                        </footer><!-- .entry-footer -->
                    </div><!-- .content-wrap -->
                     <?php } ?>



                <div class="pagination">
                    <?= $this->pagination->create_links(); ?> 
                </div>
            </div><!-- .col -->

           <?= include('sidebar.php');?>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->


<?php include('footer.php'); ?>