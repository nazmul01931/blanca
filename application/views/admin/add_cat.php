<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart('Admin/category_insert',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="exampleInputEmail1">Category Title</label>
			<?php  echo form_input(array('name'=> 'cat_name','class'=> 'form-control', 'value'=> set_value('cat_name'),'placeholder'   => 'Category Name..')); ?> 
			 <?php echo form_error('cat_name');  ?>   
		</div>
	 
		<div class="form-group">  
      <label for="exampleInputEmail1">Category Discription</label>
      <?php  echo form_input(array('name'=> 'cat_desc','class'=> 'form-control', 'value'=> set_value('cat_desc'),'placeholder'   => 'Category Discription..')); ?> 
       <?php echo form_error('cat_desc');  ?>   
    </div> 
	 
		<div class="form-group">  
			<?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
			 
		</div>
		
	 
	     
	</form>


<?php echo form_open_multipart('Admin/unlink_image',['class'=>'my_form']);?>
    <div class="form-group">  
      <label for="exampleInputEmail1">Category Title</label>
      <?php  echo form_input(array('name'=> 'unlink','class'=> 'form-control', 'value'=> set_value('unlink'),'placeholder'   => 'Category Name..')); ?>  
    </div>
   
     
   
    <div class="form-group">  
      <?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
       
    </div>




	</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="blog_add">  
 			<table class="table table-striped">
              <thead>
                <tr>
                  <th colspan="1">#</th>
                  <th  colspan="3">Title</th> 
                  <th  colspan="4">Discription</th>
                  <th  colspan="2">Create at</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <?php if(isset($category)){  
                  $i=0;
                  foreach ($category as $row) : $i++;?>
                    <tr>
                      <th colspan="1" scope="row"><?= $i; ?></th> 
                      <td  colspan="3"><?= $row->cat_name ?></td>   
                      <td  colspan="4"><?= $row->cat_desc ?></td>   
                      <td  colspan="2"><?= date('d M Y',strtotime($row->cat_create_at)) ?></td>   
                       <td colspan="1">
                          <?= anchor("Admin/edit_category/{$row->cat_id}",'Edit',['class'=>'btn btn-primary']);?>  
                       
                        <?= 
                            form_open('Admin/delete_cat'),
                            form_hidden('cat_id',$row->cat_id),
                            form_submit(['name'=>'submit','value'=>'Delete', 'class'=>'btn btn-danger']),
                            form_close();
                          ?>
                      </td>
                    </tr>
                     <?php endforeach;?>
                     <?php }else{ ?>
                        <tr><td colspan="4">No Records Found</td></tr>
                    <?php } ?>
                 
              </tbody>
            </table>
        </div>
	</div>
</div>
</div>
<?php include('footer.php'); ?>