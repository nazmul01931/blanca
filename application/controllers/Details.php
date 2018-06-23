<?php 
class Details extends CI_Controller
{

	public function single($id=NULL){  
		$data=array();
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['data'] = $this->Default_Model->select_query('tbl_blog','id',$id);
		$this->load->view('public/header',$data); 
		$this->load->view('public/single',$data); 
		$this->load->view('public/footer',$data); 
	}

	public function comments($id){
		$this->form_validation->set_error_delimiters('<p class="text-danger" style="font-size:12px;">','</p>');
		if($this->form_validation->run('comment_rules')){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);   
			$data['post_id']=$id;
			$data['date']=date('Y M d');
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_comment',$data),
				'Comment Submit Successfully.',
				'Comment Submit Faild..',"Details/single/$id"
			);
		}else{   
			 
		$data=array();
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['data'] = $this->Default_Model->select_query('tbl_blog','id',$id);
		$this->load->view('public/header',$data); 
		$this->load->view('public/single',$data); 
		$this->load->view('public/footer',$data); 
		}
	}
	private function _flash_Message($success, $message, $faield,$redirect){
		if($success){
			$this->session->set_flashdata('feedback', $message);
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback', $faield);
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect (base_url("$redirect")); 
	}
	public function __construct()
	{
		parent::__construct();
		$data=array();
		$this->load->helper('form');
		$this->load->model('Blog_Model');
		$this->load->model('Default_Model');
		$this->load->library('form_validation'); 
	}
}