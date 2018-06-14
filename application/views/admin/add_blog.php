<?php include('header.php'); ?>

<div class="container">
<div class="row">
	<div class="blog_add"> 

<?php echo form_open_multipart('Admin/stor_blog',['class'=>'my_form']);?>
<div class="form-group"> 
	<div class="col-lg-6">
	<label for="exampleInputEmail1">Blog Title</label>
	<?php  echo form_input(array('name'=> 'title','class'=> 'form-control', 'value'=> set_value('title'),'placeholder'   => 'title..')); ?>
	</div>
	<div class="col-lg-6"><?php echo form_error('title');  ?></div>
</div>

<div class="form-group"> 
	<div class="row">
		<div class="col-lg-6">
		<label for="">Blog Discrioption</label>
		<?php $data = array(  'name'=> 'body','class'=> 'form-control','value'=> set_value('body'),'placeholder'   => 'body..'); echo form_textarea($data);?> 
		</div>
		<div class="col-lg-6"><?php echo form_error('body');  ?></div>
	</div>
</div> 

 <div class="form-group"> 
	<div class="row">
		<div class="col-lg-6">
		<label for="">Category</label>
			<select name="cat_id" class="form-control">
				<option> Select One</option>
				<?php $result = $this->Blog_Model->category_select();?>
				<?php 
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
	<div class="row">
		<div class="col-lg-6">
		<label for="">Blog Image</label>
		<?php echo form_upload(['name'=> 'userfile','class'=>'form-control']);?> 
		</div>
		<div class="col-lg-6"><?php if(isset($upload_error)){echo $upload_error;} ?></div>
	</div>
</div>


<div class="form-group"> 
	<div class="col-lg-6"> 
	<?php  echo form_hidden(array('user_id'=>$this->session->userdata('user_id'))); ?> 
	<?php  //echo form_hidden(array('created_at',date('Y-M-d H:i:s') )); ?> 
	</div>
	<div class="col-lg-6"></div>
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