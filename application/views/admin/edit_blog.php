<?php include('header.php'); ?>

<div class="container">
<div class="row">
	<div class="blog_add"> 

<?php echo form_open_multipart("Admin/update_blog/{$data->id}",['class'=>'my_form']);?>
<div class="form-group"> 
	<div class="col-lg-6">
	<label for="exampleInputEmail1">Blog Title</label>
	<?php  echo form_input(array('name'=> 'title','class'=> 'form-control', 'value'=> set_value('title',$data->title),'placeholder'   => 'title..')); ?>
	</div>
	 </br>
	<div class="col-lg-6"><?php echo form_error('title');  ?>
		<?php echo form_upload(['name'=> 'userfile','class'=>'form-control','value'=> set_value('userfile',$data->image_path)]);?> 
		<?php if(isset($upload_error)){echo $upload_error;} ?>

		<img style="height: 300px;width: 100%;" src="<?= $data->image_path ?>">

		 
		<?php  //echo form_hidden(array('user_id'=>$data->image_path)); ?> 
	</div>
</div>

<div class="form-group"> 
	<div class="row">
		<div class="col-lg-6">
		<label for="">Category</label>
			<select name="cat_id" class="form-control">
				<?php 
		      		$cate = $this->Blog_Model->category_select_id($data->cat_id);  
		      		foreach ($cate as $value) {?>
		      			 <option value="<?= $data->cat_id ?>"><?= $value->cat_name; ?></option>
		      		<?php }
		        ?>
				<?php $result = $this->Blog_Model->category_select();

					foreach ($result as $value) {?>
						<option value="<?= $value->cat_id ?>"><?= $value->cat_name ?></option>
					<?php }
				 ?> 

				
			</select>
		</div>
		<div class="col-lg-6"><?php if(isset($upload_error)){echo $upload_error;} ?></div>
	</div>
</div>

<div class="form-group"> 
	 
		<div class="col-lg-6">
		<label for="">Blog Discrioption</label>
		<?php $data = array(  'name'=> 'body','class'=> 'form-control','value'=> set_value('body',$data->body),'placeholder'   => 'body..'); echo form_textarea($data);?> 
		</div>
		<div class="col-lg-6"><?php echo form_error('body');  ?></div>
	 
</div>


 

<div class="form-group"> 
	<div class="col-lg-6"> 
	<?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
	</div>
	<div class="col-lg-6"></div>
</div>
	
 
     
</form>


</div>
</div>
</div>
<?php include('footer.php'); ?>