<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add">  
      <?php 
        foreach ($data as $value) {
          $id= $value->id;
          $name= $value->name;
          $image= $value->image;
        }
       ?>
	<?php echo form_open_multipart("Admin/Edit_slider/$id",['class'=>'my_form']);?>
		<div class="form-group">  
      
			<label for="exampleInputEmail1">Slider Title</label>
			<?php  echo form_input(array('name'=> 'name','class'=> 'form-control', 'value'=> set_value('name',$name))); ?>
			 
			 <?php echo form_error('name');  ?>   
		</div>
	 
	<div class="form-group">  
    <?php echo form_upload(['name'=> 'userfile','class'=>'form-control','value'=> set_value('userfile',$image)]);?> 
    <?php if(isset($upload_error)){echo $upload_error;} ?>

    <img style="height: 300px;width: 100%;" src="<?= $image ?>">

     
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