<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php 
            foreach ($pages as $row) { } 
           ?>
      <?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
      <div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
    <?php echo form_open_multipart("Admin/update_page/$row->pag_id ",['class'=>'my_form']);?>

     <div class="form-group"> 
      <label for="exampleInputEmail1">Page Title</label>
      <?php  echo form_input(array('name'=> 'pag_name','class'=> 'form-control', 'value'=> set_value('pag_name',$row->pag_name))); ?> 
       <?php echo form_error('pag_name');  ?>   
    </div>

    <div class="form-group"> 
      <label for="exampleInputEmail1">Page Slug</label>
      <?php  echo form_input(array('name'=> 'pag_slug','class'=> 'form-control', 'value'=> set_value('pag_slug',$row->pag_slug))); ?> 
       <?php echo form_error('pag_slug');  ?>   
    </div> 

    <div class="form-group"> 
      <label for="exampleInputEmail1">Page Discription</label>
      <?php  echo form_textarea(array('name'=> 'pag_desc','class'=> 'form-control', 'value'=> set_value('pag_desc',$row->pag_desc))); ?> 
       <?php echo form_error('pag_desc');  ?>   
    </div> 

    <div class="form-group"><?php echo form_error('title');  ?>
      <?php echo form_upload(['name'=> 'userfile','class'=>'form-control','value'=> set_value('userfile',$row->image_path)]);?> 
      <?php if(isset($upload_error)){echo $upload_error;} ?>

      <img style="height: 300px;width: 100%;" src="<?= $row->image_path ?>"> 
      <?php  //echo form_hidden(array('user_id'=>$data->image_path)); ?> 
    </div>
	 
		<div class="form-group">  
			<?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
			 
		</div>
		
	 
	     
	</form>


	</div>
	</div>
</div>
 
</div>
<?php include('footer.php'); ?>