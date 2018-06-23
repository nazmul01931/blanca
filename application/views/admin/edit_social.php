<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add">  
      <?php 
        foreach ($social as $row) { }
       ?>
	<?php echo form_open_multipart("Admin/upadte_social/$row->social_id",['class'=>'my_form']);?>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Social Class</label>
			<?php  echo form_input(array('name'=> 'social_class','class'=> 'form-control', 'value'=> set_value('social_class',$row->social_class))); ?> 
			 <?php echo form_error('social_class');  ?>   
		</div>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Social Links</label>
			<?php  echo form_textarea(array('name'=> 'social_link','class'=> 'form-control', 'value'=> set_value('social_link',$row->social_link))); ?> 
			 <?php echo form_error('social_link');  ?>   
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