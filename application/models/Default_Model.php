<?php 
/**
 * 
 */
class Default_Model extends CI_Model
{  
	public function all_blog_list($limit, $offset){  
		$query = $this->db
				->select()
				->from('tbl_blog') 
				->limit($limit, $offset) 
				->order_by('created_at','DESC')
				->get(); 
		return $query->result();
	}


	public function comment_count($id){  
		$query = $this->db
				->select()
				->from('tbl_comment') 
				->where('post_id',$id)
				->get(); 
		return $query->num_rows();
	}

	public function num_rows(){ 
		$query = $this->db 
					->from('tbl_blog')  
					->get(); 
		return $query->num_rows();
	}
	public function num_rows_search($query){
		$query = $this->db 
					->from('tbl_blog') 
					->like('title',$query)
					->get(); 
		return $query->num_rows();
	}
 
	public function query_search($data,$limit, $offset){  
		$query = $this->db 
				->from('tbl_blog') 
				->like('title',$data) 
				->limit($limit, $offset)
				->order_by('created_at','DESC')
				->get(); 
		return $query->result();
	}

	public function select_query($table,$con,$id){  
		$query = $this->db 
				->select()
				->from($table) 
				->where("$con",$id) 
				->get(); 
		return $query->result();
	}
	public function select_($table){  
		$query = $this->db 
				->select()
				->from($table) 
				->get(); 
		return $query->result();
	}

	public function select_post_bycat($table,$con ,$dition, $limit){
		$query = $this->db 
				->select()
				->from($table) 
				->where("$con",$dition)
				->order_by('created_at','DESC')
				 ->limit( $limit)
				->get();    
		return $query->result();
	}

	public function page_section_query($id){
		$query = $this->db 
			->select()
			->from('tbl_sectionbg') 
			->where("sec_page","$id") 
			->get();    
		return $query->result();
	}

	public function insert_contact_info($array){
		return $this->db ->INSERT('tbl_info', $array);  
	}
  
	public function _comments_query($id){
		 $based= base_url();  
	 
		$result = $this->db->select()
					->from('tbl_comment')
					->where(['post_id'=>$id,'parent_comment_id' => '0' ])
					->get() ;
					 
					$result->result();
 		
		// 		$q = "
		// 	SELECT * FROM tbl_comment 
		// 	WHERE parent_comment_id = '0' AND post_id=$id 
		// 	ORDER BY comment_id DESC
		// 	"; 
	 // 	$statement = $this->db->prepare($q);
		// $statement->execute();
		// $result = $statement->fetchAll();

	 	 	$output = '';
			foreach($result->result_array() as $row)
			{
				$post_id=1; $row['post_id']; 


			 $output .= '
			   <div class="comment_palet" style="margin-top:30px;"> 
                <div class="comment">
                  <div class="comment_heading"> <h4>'.$row["comment_sender_name"].'</h4>
                  
                  <p class="time">'.date("d M, h:i A",strtotime($row["date"])).'</p>  
                  </div> 
                  <div class="comment_body"><p>'.$row["comment"].'</p> </div>
                  <div class="comment_heading">
                  	<a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  </div>
                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                      <div id="form"> 
                          <form method="post" action="'.$based.'/Post/comments" calss="form-horizontal" style="float:left;width:100%;background:#DADADA;">
                            <div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label> 
                                <input type="text" name="Name" class="form-control" pleaceholder="Your Name" > 
                                <input type="hidden" name="paren_id" class="form-control" value="'.$row["comment_id"].'"> 
                                <input type="hidden" name="post_id" value="'.$post_id.'" >
 
                              </div> 
                               
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label> 
                                <input type="email" class="form-control" name="Email" pleaceholder="your Email......."> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label>  
                                <textarea name="Message" class="form-control"></textarea> 
                                <input style="margin-top:5px;" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>   
			   '; 
			 $this->output = $this->_comments_replay_query($id,$row["comment_id"]);
			}
	 	return $this->output;
	}

	public function _comments_replay_query($id,$parent_id = 0,$marginleft = 0){
		 $based= base_url(); 
		 
		 $result = $this->db->select()
				->from('tbl_comment')
				->where(['post_id'=>$id,'parent_comment_id' => $parent_id  ])
				->get();
				return $result->result();

		// $q = "
		// 	 SELECT * FROM tbl_comment WHERE post_id= $id AND parent_comment_id = $parent_id
		// 	 "; 
	 // 	$statement = $this->db->prepare($q);
		// 	 $statement->execute();
	 // 	 $num = $statement->rowCount(); 
	 //  $result = $statement->fetchAll();
 
	 	if($parent_id == 0)
		 {
		  $marginleft = 0;
		 }
		 else
		 {
		  $marginleft = $marginleft + 48;
		 }
		 if($num > 0)
			 {
			  foreach($result as $row)
			  {
			  	$post_id= $row["post_id"]; 
			   $this->output .= '
			   <div class="comment_palet" > 
                <div class="comment"style="margin-left:'.$marginleft.'px; ">

                  <div class="comment_heading"> <h4>'.$row["comment_sender_name"].'</h4> 
                  <p class="time">'.date("d M, h:i A",strtotime($row["date"])).'</p>  
                  </div> 
                  <div class="comment_body"><p>'.$row["comment"].'</p> </div>
                   <div class="comment_heading">
                  	<a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  </div>
                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                      <div id="form" action=""> 
                          <form action="'.$based.'/Post/comments" method="post" calss="form-horizontal" style="float:left;width:100%;background:#DADADA;">
                            <div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label> 
                                <input type="text" name="Name" class="form-control" pleaceholder="Your Name" require> 
                                <input type="hidden" name="paren_id" class="form-control" value="'.$row["comment_id"].'"> 
                                <input type="hidden" name="post_id" value="'.$post_id.'" >
                              </div> 
                              <input type="hidden" value=""> 
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label> 
                                <input type="email" name="Email" class="form-control" pleaceholder="your Email................"> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label>  
                                <textarea name="Message" class="form-control"></textarea> 
                                <input style="margin-top:5px;" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>    
			   ';
			   $this->output = $this->_comments_replay_query($id, $row["comment_id"], $marginleft);
			  }
			 }
			 return $this->output;
			} 
	

}