<?php 
/**
 * 
 */
class Blog_Model extends CI_Model
{
	
	public function bog_list($limit, $offset){ 
		$user_id = $this->session->userdata('user_id'); 
		$query = $this->db
					->select()
					->from('tbl_blog')
					->where('user_id', $user_id)
					->limit($limit, $offset)
					->order_by('created_at','DESC')
					->get(); 
		return $query->result();
	}

	public function Blog_Post($array){   
		return $this->db ->INSERT('tbl_blog', $array);  
	}
	public function find_post_blog($id){   
		$query= $this->db ->select()
						->WHERE('id',$id)
						->get('tbl_blog')  ;
		return $query->row();
	}
	public function update_blog_data($id,$blog){
		return $this->db->update('tbl_blog',$blog,['id'=>$id]);
	}
	public function delete_blog_data($id){
		return $this->db->delete('tbl_blog',['id'=>$id]);
	}
	public function num_rows(){
		$user_id = $this->session->userdata('user_id'); 
		$query = $this->db
					->select()
					->from('tbl_blog')
					->where('user_id', $user_id) 
					->get(); 
		return $query->num_rows();
	}

	public function category_select(){ 
		$query = $this->db
					->select()
					->from('tbl_category')  
					->get(); 
		return $query->result();
	}
	public function category_select_id($id){  
		$query = $this->db
					->select()
					->from('tbl_category') 
					->where('cat_id',$id) 
					->get(); 
		return $query->result();
	}
	public function slider_insert($array){   
		return $this->db ->INSERT('tbl_slider', $array);  
	}

	public function default_select($table){
		$query = $this->db
					->select()
					->from($table)  
					->get(); 
		return $query->result();
	}

	public function default_select_byid($table,$condition,$id){
		$query = $this->db
					->select()
					->from($table)  
					->where("$condition",$id)
					->get(); 
		return $query->result();
	}

	public function default_delete($table,$condition,$id){
		return $this->db->delete("$table",["$condition"=>$id]);
	}

	public function default_update_qury($table,$id,$blog){
		return $this->db->update($table,$blog,['id'=>$id]);
	}

}