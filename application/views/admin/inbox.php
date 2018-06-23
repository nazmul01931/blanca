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
                      <th  colspan="3">name</th>
                      <th  colspan="2">Email</th>
                      <th  colspan="4">Message</th>
                      <th  colspan="2">Date</th>
                      <th colspan="1">Action</th>
                    </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
                    <?php if(count($inbox)):
                      $count = $this->uri->segment(3,0);
                      foreach ($inbox as $row) :?>
                        <tr>
                          <th colspan="1" scope="row"><?= ++$count;?></th> 
                          <td  colspan="3"><?= $row->name ?></td> 
                          <td  colspan="2"><?= $row->email ?></td> 
                          <td colspan="4"><?= String_length($row->message); ?>... </td> 
                          <td colspan="2"><?= date('Y M d ',strtotime($row->date)) ?></td>   
                          <td colspan="1">
                              <?= anchor("Admin/inbox_reply/{$row->id}",'Reply',['class'=>'btn btn-primary']);?>  
                          </td>
                          <td>
                            <?= 
                                form_open('admin/inbox_delete'),
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