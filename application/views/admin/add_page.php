<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart('Admin/Insert_page',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="">Page Title</label>
			<?php  echo form_input(array('name'=> 'pag_name','class'=> 'form-control', 'value'=> set_value('pag_name'),'placeholder'   => 'Page Title..')); ?> 
			 <?php echo form_error('pag_name');  ?>   
		</div>
	 
		<div class="form-group">  
      <label for="">Page Slug</label>
      <?php  echo form_input(array('name'=> 'pag_slug','class'=> 'form-control', 'value'=> set_value('pag_slug'),'placeholder'   => 'Page Slug..')); ?> 
       <?php echo form_error('pag_slug');  ?>   
    </div> 
    <div class="form-group">  
      <label for="">Page Discription</label>
      <?php  echo form_textarea(array('name'=> 'pag_desc','class'=> 'form-control', 'value'=> set_value('pag_desc'),'placeholder'   => 'Page Description..')); ?> 
       <?php echo form_error('pag_desc');  ?>   
    </div> 
    

    <div class="form-group">  
        
        <label for="">Blog Image</label>
        <?php echo form_upload(['name'=> 'userfile','class'=>'form-control']);?> 
       
        <?php if(isset($upload_error)){echo $upload_error;} ?> 
      
    </div>
	 
		<div class="form-group">  
			<?php echo form_submit(array( 'class'=> 'btn btn-primary','value'=> 'Submit','name'=>'submit')); ?> 
			 
		</div>
		
	 
	     
	</form>


	</div>
	</div>
</div>
<div class="row"> 
	<div class="col-lg-12 col-md-12">
		<div class="blog_add">  
 			<table class="table table-striped">
              <thead>
                <tr>
                  <th colspan="1">#</th>
                  <th  colspan="4">Title</th> 
                  <th  colspan="4">Slug</th>
                  <th  colspan="1">Desc</th>
                  <th  colspan="1">Image</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <?php if(isset($pages)){  
                  $i=0;
                  foreach ($pages as $row) : $i++;?>
                    <tr>
                      <th colspan="1" scope="row"><?= $i; ?></th> 
                      <td  colspan="4"><?= $row->pag_name ?></td>   
                      <td  colspan="2"><?= $row->pag_slug ?></td>   
                      <td  colspan="4"><?= String_length($row->pag_desc) ?></td>    
                      <td  colspan="2"><img style="height: 100px;width: 130px;" src="<?= $row->image_path ?>"></td>              
                       <td colspan="1">
                          <?= anchor("Admin/update_page/{$row->pag_id}",'Edit',['class'=>'btn btn-primary']);?>  
                       
                       </td>
                       <td>
                        <?= 
                            form_open('Admin/page_delete'),
                            form_hidden('pag_id',$row->pag_id),
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