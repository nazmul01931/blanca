<?php include('header.php'); ?>
<div class="container">
    <div class="row"> 
        <div class="body_content"><h1>Blog List</h1></div>
            <div class="body_content">
                 <?php if($error = $this->session->flashdata('feedback')): $class = $this->session->flashdata('feedback_class');?>
                    <div class="alert alert-dismissible <?php echo $class;  ?>">
                        <strong><?=  $error ?></strong>    
                    </div>
                <?php endif; ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th colspan="1">#</th>
                      <th  colspan="3">Title</th>
                      <th style="width:55%;" colspan="4">Body</th>
                      <th style="width:55%;" colspan="4">Date</th>
                      <th style="width:55%;" colspan="4">Image</th>
                      <th colspan="1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(count($articles)):
                      $count = $this->uri->segment(3,0);
                      foreach ($articles as $row) :?>
                        <tr>
                          <th colspan="1" scope="row"><?= ++$count;?></th> 
                          <td  colspan="3"><?= $row->title ?></td> 
                          <td colspan="4"><?= String_length($row->body); ?>... </td> 
                          <td colspan="2"><?= date('Y M d H:i:s',strtotime($row->created_at)) ?></td> 
                          <td colspan="2"><img style="height: 80px;width: 100px;" src="<?= $row->image_path ?>"></td> 
                          <td colspan="1">
                              <?= anchor("Admin/Edit_blog/{$row->id}",'Edit',['class'=>'btn btn-primary']);?>  
                          </td>
                          <td>
                            <?= 
                                form_open('admin/delete_blog'),
                                form_hidden('id',$row->id),
                                form_submit(['name'=>'submit','value'=>'Delete', 'class'=>'btn btn-danger']),
                                form_close();
                              ?>
                          </td>
                        </tr>
                         <?php endforeach;?>
                         <?php else: ?>
                            <tr><td colspan="4">No Records Found</td></tr>
                        <?php endif; ?>
                     
                  </tbody>
                </table>
                <div class="custom_pagination"> 
                  <?= $this->pagination->create_links();?>
                </div>  
                
            </div>
    </div>
</div>
<?php include('footer.php'); ?>