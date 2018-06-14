
<footer class="sit-footer">
    <div class="outer-container">
        <div class="container-fluid">
            <div class="row footer-recent-posts">
                <?php 
                $table='tbl_blog';
                $con= "cat_id"; 
                $dition= 2; 
                $limit=4;
                $post = $this->Default_Model->select_post_bycat($table,$con, $dition, $limit);  
                foreach ($post as $value) {?>
                   
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="<?= base_url('Details/single');?>"><img style=" height:185px;width: 185px;" src="<?= $value->image_path ?>" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    <?= $value->created_at ?>
                                </div><!-- .entry-header -->

                                <h3><a href="<?= base_url('Details/single');?>"><?= $value->title ?></a></h3>

                                <?php  
                                    echo '<div class="tags-links">';
                                    $post = $this->Blog_Model->category_select();
                                    foreach ($post as $cat) {  ?>
                                          <a style="width: 100%;float: left;" href="<?= $cat->cat_id ?>" >#<?= $cat->cat_name ?> </a>  
                                   <?php }
                                    echo '</div>';
                                  ?>
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="#">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

            <?php  } ?>
                  

            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .outer-container -->

    <div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                <?php 
                $table='tbl_blog';
                $con= "cat_id"; 
                $dition= 2; 
                $limit=7;
                $post = $this->Default_Model->select_post_bycat($table,$con, $dition, $limit); 
                foreach ($post as $value) {?>
                <figure>
                    <a href="<?= base_url('Details/single');?>"><img style=" height:190px;width: 190px;"  src="<?= $value->image_path ?>" alt=""></a>
                </figure> 

                <?php } ?>

            </div>
        </div><!-- .row -->
    </div><!-- .container -->

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
<script type='text/javascript' src='<?php echo base_url('assets/js/bootstrap.min.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/swiper.min.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/custom.js');?>'></script>

</body>
</html>