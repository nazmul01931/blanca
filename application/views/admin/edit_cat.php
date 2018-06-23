<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add">  
      <?php 
        foreach ($category as $row) { }
       ?>
	<?php echo form_open_multipart("Admin/edit_category/$row->cat_id",['class'=>'my_form']);?>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Category Title</label>
			<?php  echo form_input(array('name'=> 'cat_name','class'=> 'form-control', 'value'=> set_value('cat_name',$row->cat_name))); ?> 
			 <?php echo form_error('cat_name');  ?>   
		</div>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Category Discription</label>
			<?php  echo form_textarea(array('name'=> 'cat_desc','class'=> 'form-control', 'value'=> set_value('cat_desc',$row->cat_desc))); ?> 
			 <?php echo form_error('cat_desc');  ?>   
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