<?php 
/**
 * 
 */
class Contact extends CI_Controller
{
	public function index(){ 
		$this->load->helper('default');
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);  
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['data'] = $this->Default_Model->select_query('tbl_page','pag_name','Contact');
		// $data['blog']=$this->Default_Model->all_blog_list($config['per_page'],$this->uri->segment(3));  
		$this->load->view('public/header',$data);
		$this->load->view('public/contact',$data);
		$this->load->view('public/footer',$data);
	}


	public function __construct(){
		parent::__construct();
		$data=array();
		$this->load->helper('form');
		$this->load->model('Blog_Model');
		$this->load->model('Default_Model');
		$this->load->library('form_validation'); 

		
		
	}	
	private function _flash_Message($success, $message, $faield,$redirect){
		if($success){
			$this->session->set_flashdata('feedback', $message);
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback', $faield);
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect("Contact/$redirect"); 
	}

	public function contact_info(){
		$this->form_validation->set_error_delimiters('<p class="text-danger" style="font-size:12px;">','</p>');
		if($this->form_validation->run('contact_form')){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);   
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Default_Model->insert_contact_info($data),
				'Contact information Add Successfully.',
				'Contact information Add Faild..','Index'
			);
		}else{   
		$this->load->helper('default');
		$data['message']=$this->Default_Model->select_query('tbl_users','role',1);  
		$data['social']=$this->Default_Model->select_('tbl_social');
		$data['data'] = $this->Default_Model->select_query('tbl_page','pag_name','Contact');
		// $data['blog']=$this->Default_Model->all_blog_list($config['per_page'],$this->uri->segment(3));  
		$this->load->view('public/header',$data);
		$this->load->view('public/contact',$data);
		$this->load->view('public/footer',$data);
		}
	}
	
}