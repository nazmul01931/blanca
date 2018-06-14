 <div class="col-12 col-lg-3">
                <div class="sidebar">
                    <div class="about-me">
                        <?php foreach ($message as $value) {
                           $title=$value->des;
                           $body=$value->fname;
                        } ?>
                        <h2><?php echo $body; ?></h2>

                        <p><?php echo $title; ?></p>
                    </div><!-- .about-me -->

                    <div class="recent-posts">
                        <?php foreach ($blog as $row) :?> 
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="<?= $row->image_path ?>" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    <?= date(' M d Y',strtotime($row->created_at))?>
                                </div><!-- .entry-header -->

                                <h3><a href="<?= base_url('Details/single'); ?>"><?= $row->title?></a></h3>

                               <?php  
                                    echo '<div class="tags-links">';
                                    $post = $this->Blog_Model->category_select();
                                    foreach ($post as $cat) {  ?>
                                          <a href="<?= $cat->cat_id ?>" >#<?= $cat->cat_name ?> </a>  
                                   <?php }
                                    echo '</div>';
                                  ?>
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap --> 
                    <?php endforeach; ?>

                    </div><!-- .recent-posts -->

                    <div class="tags-list">
                        <a href="#">Music</a>
                        <a href="#">Love</a>
                        <a href="#">Car</a>
                        <a href="#">Stories</a>
                        <a href="#">Photography</a>
                        <a href="#">Music</a>
                        <a href="#">Car</a>
                    </div><!-- .tags-list -->

                    <div class="sidebar-ads">
                        <img src="<?php echo base_url()?>/images/ads.jpg" alt="ads">
                    </div>
                </div><!-- .sidebar -->
            </div><!-- .col -->