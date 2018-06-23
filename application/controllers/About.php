<?php 
/**
 * 
 */
class About extends CI_Controller
{
	public function index(){ 
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);  
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['data'] = $this->Default_Model->select_query('tbl_page','pag_name','About me');
		$data['award'] = $this->Default_Model->select_('tbl_awards');
		$this->load->view('public/header',$data);
		$this->load->view('public/about',$data);
		$this->load->view('public/footer',$data);
	}


	public function __construct(){
		parent::__construct();
		$data=array();
		$this->load->helper('form');
		$this->load->model('Blog_Model');
		$this->load->model('Default_Model');
		
	}	
	
}