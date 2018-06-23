<?php include('header.php'); ?>
<div class="container">
    <div class="row">   
            <div class="body_content"> 
                 <?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class');?>
                    <div class="alert alert-dismissible <?php echo $class;  ?>">
                        <strong><?=  $error ?></strong>    
                    </div>
                <?php endif; ?>

                <div class="inbox_view">
                  <div class="sender_text">
                    <?php 
                      foreach ($inbox as $row) :?>
                        
                      <h6><?= $row->name?></h6>
                      <span style="color: #ccc;font-size: 12px;"><?= $row->email?> || <?= date('Y M d ',strtotime($row->date)) ?></span>
                      <p><?= $row->message ?> </p>
                    <?php endforeach; ?>
                  </div>
                  <hr> 
                  <div class="chating_container">
                    
                  </div>
                  <div class="chating form">
                    <?php echo form_open_multipart("Admin/replay_inbox_ans/$row->id",['class'=>'contact-form']);?>
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
                  </div>
                </div>
                
            </div>
    </div>
</div>
<?php include('footer.php'); ?>