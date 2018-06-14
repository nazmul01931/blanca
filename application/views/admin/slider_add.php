<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>">
                <strong><?=  $error ?></strong>    
            </div>
            <?php endif; ?>
	<?php echo form_open_multipart('Admin/slider_add',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="exampleInputEmail1">Slider Title</label>
			<?php  echo form_input(array('name'=> 'name','class'=> 'form-control', 'value'=> set_value('name'),'placeholder'   => 'name..')); ?>
			 
			 <?php echo form_error('name');  ?>   
		</div>
	 
		<div class="form-group"> 
			<label for="">Slider Image</label>
			<?php echo form_upload(['name'=> 'userfile','class'=>'form-control']);?> 
			<?php if(isset($upload_error)){echo $upload_error;} ?>  
		 
		</div> 
	 
		<div class="form-group">  
			<?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
			 
		</div>
		
	 
	     
	</form>


	</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="blog_add">  
 			<table class="table table-striped">
              <thead>
                <tr>
                  <th colspan="1">#</th>
                  <th  colspan="3">Title</th> 
                  <th  colspan="4">Image</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if(isset($slider)){  
                  foreach ($slider as $row) :?>
                    <tr>
                      <th colspan="1" scope="row">1</th> 
                      <td  colspan="3"><?= $row->name ?></td>  
                      <td colspan="4"><img style="height: 80px;width: 100px;" src="<?= $row->image ?>"></td> 
                       <td colspan="1">
                          <?= anchor("Admin/Edit_slider/{$row->id}",'Edit',['class'=>'btn btn-primary']);?>  
                      </td>
                      <td>
                        <?= 
                            form_open('admin/delete_slide'),
                            form_hidden('id',$row->id),
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