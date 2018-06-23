 <?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			 <?php 
		        foreach ($section as $row) { } 
		       ?>
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart("Admin/update_section/$row->sec_id ",['class'=>'my_form']);?>
		 <div class="form-group"> 
			<label for="exampleInputEmail1">Section Title</label>
			<?php  echo form_input(array('name'=> 'sec_name','class'=> 'form-control', 'value'=> set_value('sec_name',$row->sec_name))); ?> 
			 <?php echo form_error('sec_name');  ?>   
		</div>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Section Discription</label>
			<?php  echo form_input(array('name'=> 'sec_page','class'=> 'form-control', 'value'=> set_value('sec_page',$row->sec_page))); ?> 
			 <?php echo form_error('sec_page');  ?>   
		</div> 
		<div class="form-group"><?php echo form_error('title');  ?>
			<?php echo form_upload(['name'=> 'userfile','class'=>'form-control','value'=> set_value('userfile',$row->sec_img)]);?> 
			<?php if(isset($upload_error)){echo $upload_error;} ?>

			<img style="height: 300px;width: 100%;" src="<?= $row->sec_img ?>">

			 
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