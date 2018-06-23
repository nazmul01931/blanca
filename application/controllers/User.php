<?php 
/**
 * 
 */
class User extends CI_Controller
{
	public function index(){
		$data = array(); 
		$this->load->helper('url'); 
		$this->load->helper('date'); 
		$this->load->library('pagination');
		$config = [
			'base_url' 		=> base_url('User/index'),
			'per_page'		=>5,
			'total_rows' 	=> $this->Default_Model->num_rows(),
			'full_tag_open'	=>'<nav> <ul class="flex align-items-center">',
			'full_tag_close'=>'</ul></nav>',
			'next_tag_open'	=>'<li>',
			'next_tag_close'=>'</li>',
			'first_tag_open'=>'<li>',
			'last_link'		=>'First',
			'first_tag_close'=>'</li>',
			'last_tag_open'	=>'<li>',
			'last_tag_close'=>'</li>',
			'num_tag_open'	=>'<li>',
			'num_tag_close'	=>'</li>',
			'prev_tag_open'	=>'<li>',
			'prev_tag_close'=>'</li>',
			'cur_tag_open'	=>'<li class="active"><a>',
			'cur_tag_close'	=>'</a></li>'  
		];
		$this->load->helper('default');
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);  
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['slider']=$this->Default_Model->select_('tbl_slider');
		$this->pagination->initialize($config);  
		$data['blog']=$this->Default_Model->all_blog_list($config['per_page'],$this->uri->segment(3)); 
		$this->load->view('public/header',$data); 
		$this->load->view('public/blog_list',$data); 
		$this->load->view('public/footer',$data); 
	}

	public function search(){

		$data=array();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','query','required');
		if(!$this->form_validation->run()){
			return $this->index();
		}else{
			$this->load->helper('default');
			$query = $this->input->post('query'); 
			return redirect("User/search_result/$query"); 
		}
	}


	public function search_result($query){ 
		$data = array();
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->helper('default'); 
		$config = [
			'base_url' 		=> base_url("User/search_result/$query"),
			'per_page'		=>5,
			'total_rows' 	=> $this->Default_Model->num_rows_search($query),
			'full_tag_open'	=>'<nav> <ul class="flex align-items-center">',
			'full_tag_close'=>'</ul></nav>',
			'next_tag_open'	=>'<li>',
			'uri_segment'	=>4,
			'next_tag_close'=>'</li>',
			'first_tag_open'=>'<li>',
			'last_link'		=>'First',
			'first_tag_close'=>'</li>',
			'last_tag_open'	=>'<li>',
			'last_tag_close'=>'</li>',
			'num_tag_open'	=>'<li>',
			'num_tag_close'	=>'</li>',
			'prev_tag_open'	=>'<li>',
			'prev_tag_close'=>'</li>',
			'cur_tag_open'	=>'<li class="active"><a>',
			'cur_tag_close'	=>'</a></li>'  
		]; 
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);  
		$data['social']=$this->Default_Model->select_('tbl_social');
		$this->pagination->initialize($config); 
		$data['slider']=$this->Default_Model->select_('tbl_slider');
		$data['blog']=$this->Default_Model->query_search($query,$config['per_page'],$this->uri->segment(4)); 
		// print_r($data['blog']);exit;
		$this->load->view('public/header',$data);
		$this->load->view('public/search',$data);
		$this->load->view('public/footer',$data);
	}
	public function __construct()
	{
		parent::__construct();
		$data=array();
		$this->load->helper('form');
		$this->load->model('Blog_Model');
		$this->load->model('Default_Model');
		
	}


}
 