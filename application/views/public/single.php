 
<?php foreach ($data as $row) {}?>
 <?php 
    $section = $this->Default_Model->page_section_query('single');
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
    <div class="container single-page blog-page">
        <div class="row">
            <div class="col-12">
                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            <?= date(' M d Y',strtotime($row->created_at))?>
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"><?= $row->title?></h2>

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
                       <p><?= $row->body ?></p> 
                    </div><!-- .entry-content -->

                    <blockquote class="blockquote-text">
                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod</p>
                    </blockquote><!-- .blockquote-text -->

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="blog-page-half-img">
                                <img src="images/blog-img-1.png" alt="">
                            </figure><!-- .blog-page-half-img -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6">
                            <figure class="blog-page-half-img">
                                <img src="images/blog-img-2.png" alt="">
                            </figure><!-- .blog-page-half-img -->
                        </div><!-- .col -->
                    </div><!-- .row -->

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
                            <a href="#"><?php echo $this->Default_Model->comment_count($row->id);?> Comment</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="content-area">
                    <div class="post-comments">
                        <h3 class="comments-title">Comments</h3>

                        <ol class="comment-list">
                             
                            
                        </ol><!-- .comment-list -->
                    </div><!-- .post-comments -->

                    
                    <?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class');?>
                        <div class="alert alert-dismissible <?php echo $class;  ?>">
                            <strong><?=  $error ?></strong>    
                        </div>
                    <?php endif; ?>
                    <div class="comments-form">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a reply</h3>
                            <?php echo form_open("Details/comments/{$row->id}",['class'=>'comment-form']);?>

                                <?php  echo form_input(array('name'=> 'comment_sender_name', 'value'=> set_value('comment_sender_name'),'placeholder'=> 'Name')); ?> 
                                <?php echo form_error('comment_sender_name');  ?> 

                                <?php  echo form_input(array('name'=> 'com_email', 'value'=> set_value('com_email'),'placeholder'=> 'Email')); ?>
                                 <?php echo form_error('com_email');  ?> 

                                <?php echo form_textarea(array('name'=> 'comment','rows'=>'18','cols'=>"6",'class'=> 'form-control','value'=> set_value('comment'),'placeholder'=>'Messages'));?>
                                 <?php echo form_error('comment');  ?> 

                                <?php echo form_submit(array('value'=> 'Submit','name'=>'submit')); ?> 
                            </form><!-- .comment-form -->
                        </div><!-- .comment-respond -->
                    </div><!-- .comments-form -->
                </div><!-- .content-area -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->
 