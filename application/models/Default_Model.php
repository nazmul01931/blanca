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
}