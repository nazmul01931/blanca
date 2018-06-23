<?php include('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6"> 
		<div class="blog_add"> 
			<?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class'); ?>
			<div class="alert alert-dismissible <?php echo $class;  ?>"><strong><?=  $error ?></strong></div>
      <?php endif; ?>
	<?php echo form_open_multipart('Admin/awards_insert',['class'=>'my_form']);?>
		<div class="form-group">  
			<label for="exampleInputEmail1">Awards Title</label>
			<?php  echo form_input(array('name'=> 'name','class'=> 'form-control', 'value'=> set_value('name'),'placeholder'   => 'Name..')); ?> 
			 <?php echo form_error('name'); ?>   
		</div>
	 
		<div class="form-group">  
      <label for="exampleInputEmail1">Awards Position</label>
      <?php  echo form_input(array('name'=> 'place','class'=> 'form-control', 'value'=> set_value('place'),'placeholder'=> 'Awards position')); ?> 
       <?php echo form_error('place');  ?>   
    </div> 

    <div class="form-group">  
      <label for="exampleInputEmail1">Awards Date</label>
      <?php  echo form_input(array('name'=> 'date','class'=> 'form-control', 'value'=> set_value('date'),'placeholder'   => 'Award year..')); ?> 
       <?php echo form_error('date');  ?>   
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
                  <th  colspan="4">Place</th>
                  <th  colspan="2">year</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <?php if(isset($awards)){  
                  $i=0;
                  foreach ($awards as $row) : $i++;?>
                    <tr>
                      <th colspan="1" scope="row"><?= $i; ?></th> 
                      <td  colspan="3"><?= $row->name ?></td>   
                      <td  colspan="4"><?= $row->place ?></td>   
                      <td  colspan="2"><?= $row->date ?></td>   
                       <td colspan="1">
                          <?= anchor("Admin/edit_awards/{$row->id}",'Edit',['class'=>'btn btn-primary']);?>  
                       </td>
                       <td >
                        <?= 
                            form_open('Admin/delete_awards'),
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