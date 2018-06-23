  <?php foreach ($data as $row) {}?>
  <?php 
    $section = $this->Default_Model->page_section_query('about');
     foreach ($section as  $sections) {}
    if(!empty($sections)): 
?> 
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-12">
                <div class="page-header flex justify-content-center align-items-center" style='background-image: url("<?=  $sections->sec_img ?>" )'>
                    <h1><?=  $sections->sec_name ?></h1>
                </div><!-- .page-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    
        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-lg-3">
                    <a href="#">
                        <div class="yt-subscribe">
                            <?php foreach ($message as $value) {} ?>
                            <img src="<?= $value->image ?>" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->
    <?php endif; ?>


    <div class="container single-page about-page">
        <div class="row">
            <div class="col-12">
                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                           <?= date(' M d Y',strtotime($row->created_at))?>
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"><?= $row->pag_slug ?></h2>

                        <?php  
                        echo '<div class="tags-links">';
                        $post = $this->Blog_Model->category_select();
                        foreach ($post as $cat) {  ?>
                              <a href="<?= $cat->cat_id ?>" >#<?= $cat->cat_name ?> </a>  
                       <?php }
                        echo '</div>';
                      ?>
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="<?= $row->image_path ?>" alt="">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                       <?= $row->pag_desc ?>
                    </div><!-- .entry-content -->

                    <figure class="about-second-image">
                        <img src="images/about-2.png" alt="">
                    </figure>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .row -->

        <div class="row">
        	<?php foreach ($award as  $awards): ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="awards-content">
                    <h2><?= $awards->place ?></h2>
                    <h4><?= $awards->name ?></h4>
                    <p><?= $awards->date ?></p>
                </div><!-- .awards-content -->
            </div><!-- .col -->
        <?php endforeach; ?>
           

        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                    <ul class="post-share flex align-items-center order-3 order-lg-1">
                        <label>Share</label>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- .post-share -->

                    <div class="comments-count order-1 order-lg-3">
                        <a href="#">2 Comments</a>
                    </div><!-- .comments-count -->
                </footer><!-- .entry-footer -->
            </div><!-- .content-wrap -->
        </div><!-- .col -->
    </div><!-- .container -->
</div><!-- .outer-container -->