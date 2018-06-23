<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart('Admin/Insert_section',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="">Category Title</label>
			<?php  echo form_input(array('name'=> 'sec_name','class'=> 'form-control', 'value'=> set_value('sec_name'),'placeholder'   => 'Section Name..')); ?> 
			 <?php echo form_error('sec_name');  ?>   
		</div>
	 
		<div class="form-group">  
      <label for="">Category Discription</label>
      <?php  echo form_input(array('name'=> 'sec_page','class'=> 'form-control', 'value'=> set_value('sec_page'),'placeholder'   => 'Category Discription..')); ?> 
       <?php echo form_error('sec_page');  ?>   
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
                  <th  colspan="4">Title</th> 
                  <th  colspan="4">Image</th>
                  <th  colspan="1">Page</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <?php if(isset($section)){  
                  $i=0;
                  foreach ($section as $row) : $i++;?>
                    <tr>
                      <th colspan="1" scope="row"><?= $i; ?></th> 
                      <td  colspan="4"><?= $row->sec_name ?></td>   
                      <td  colspan="4"><img style="height: 100px;width: 200px;" src="<?= $row->sec_img ?>"></td>       
                      <td  colspan="1"><?= $row->sec_page ?></td>       
                       <td colspan="1">
                          <?= anchor("Admin/update_section/{$row->sec_id}",'Edit',['class'=>'btn btn-primary']);?>  
                       </td>
                       <td>
                        <?= 
                            form_open('Admin/delete_sec'),
                            form_hidden('sec_id',$row->sec_id),
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