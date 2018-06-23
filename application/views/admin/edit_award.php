<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add">  
      <?php 
        foreach ($awards as $row) { }
       ?>
	<?php echo form_open_multipart("Admin/edit_awards/$row->id",['class'=>'my_form']);?>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Awards name</label>
			<?php  echo form_input(array('name'=> 'name','class'=> 'form-control', 'value'=> set_value('name',$row->name))); ?> 
			 <?php echo form_error('name');  ?>   
		</div>
		<div class="form-group"> 
			<label for="exampleInputEmail1">Where from get Awards</label>
			<?php  echo form_input(array('name'=> 'place','class'=> 'form-control', 'value'=> set_value('place',$row->place))); ?> 
			 <?php echo form_error('place');  ?>   
		</div> 
		<div class="form-group"> 
			<label for="exampleInputEmail1">Wards year</label>
			<?php  echo form_input(array('name'=> 'date','class'=> 'form-control', 'value'=> set_value('date',$row->date))); ?> 
			 <?php echo form_error('date');  ?>   
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