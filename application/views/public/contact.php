  <?php foreach ($data as $row) {}?>
  <?php 
    $section = $this->Default_Model->page_section_query('contact');
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

    <div class="container single-page contact-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="content-wrap">
                    <header class="entry-header">
                        <h2 class="entry-title">Contact me or just say HI</h2>

                         <?php  
                        echo '<div class="tags-links">';
                        $post = $this->Blog_Model->category_select();
                        foreach ($post as $cat) {  ?>
                              <a href="<?= $cat->cat_id ?>" >#<?= $cat->cat_name ?> </a>  
                       <?php }
                        echo '</div>';
                      ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?= $row->pag_desc ?>
                    </div><!-- .entry-content -->

                    <div class="contact-page-social">
                        <ul class="flex align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .header-bar-social -->
                    <br>
                    <br> 
                    <?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class');?>
                        <div class="alert alert-dismissible <?php echo $class;  ?>">
                            <strong><?=  $error ?></strong>    
                        </div>
                    <?php endif; ?>
                    <?php echo form_open_multipart('Contact/contact_info',['class'=>'contact-form']);?>
                    <div class="form-group">  
                        <?php  echo form_input(array('name'=> 'name','class'=> 'form-control', 'value'=> set_value('name'),'placeholder'   => 'name..')); ?>
                        <?php echo form_error('name');  ?> 
                    </div>

                    <div class="form-group">  
                        <?php  echo form_input(array('name'=> 'email','class'=> 'form-control', 'value'=> set_value('email'),'placeholder'   => 'email..')); ?>
                        <?php echo form_error('email');  ?> 
                    </div>

                    <div class="form-group">   
                        <?php $data = array(  'name'=> 'message','rows'=>'18','class'=> 'form-control','value'=> set_value('message'),'placeholder'   => 'message..'); echo form_textarea($data);?> 
                         <?php echo form_error('message');  ?> 
                    </div>   
 

                    <div class="form-group"> 
                        <div class="col-lg-6"> 
                        <?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
                        </div> 
                    </div>
                    </form><!-- .comment-form -->
                </div><!-- .content-wrap -->
            </div><!-- .col -->
            <?php //include('sidebar.php');?>
            <div class="col-12 col-lg-3">
                <div class="sidebar">
                    <div class="recent-posts">
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/thumb-1.jpg" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">My fall in love story</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/thumb-2.jpg" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">My fall in love story</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->
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
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->