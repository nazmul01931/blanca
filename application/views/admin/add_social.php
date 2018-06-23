<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart('Admin/social_insert',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="exampleInputEmail1">Social Link Class ('fa fa-facebook')</label>
			<?php  echo form_input(array('name'=> 'social_class','class'=> 'form-control', 'value'=> set_value('social_class'),'placeholder'   => 'Social Class')); ?> 
			 <?php echo form_error('social_class');  ?>   
		</div>
	 
		<div class="form-group">  
      <label for="exampleInputEmail1">Social URL link</label>
      <?php  echo form_input(array('name'=> 'social_link','class'=> 'form-control', 'value'=> set_value('social_link'),'placeholder' => 'social URL')); ?> 
       <?php echo form_error('social_link');  ?>   
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
                  <th  colspan="3">Class</th> 
                  <th  colspan="4">URL Links</th> 
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <?php if(isset($social)){  
                  $i=0;
                  foreach ($social as $row) : $i++;?>
                    <tr>
                      <th colspan="1" scope="row"><?= $i; ?></th> 
                      <td  colspan="3"><?= $row->social_class ?></td>   
                      <td  colspan="4"><?= $row->social_link ?></td>      
                       <td colspan="1">
                          <?= anchor("Admin/upadte_social/{$row->social_id}",'Edit',['class'=>'btn btn-primary']);?>  
                       </td>
                       <td>
                        <?= 
                            form_open('Admin/delete_social'),
                            form_hidden('social_id',$row->social_id),
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