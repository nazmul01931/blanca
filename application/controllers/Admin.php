<?php 
/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function index(){
		$this->dashboard();
	} 

	public function dashboard(){ 
		$data = array();
		$this->load->library('pagination');
		$config = [
			'base_url' 		=> base_url('admin/dashboard'),
			'per_page'		=>5,
			'total_rows' 	=> $this->Blog_Model->num_rows(),
			'full_tag_open'	=>'<nav> <ul class="pagination">',
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
		$this->pagination->initialize($config);  
		$data['articles'] = $this->Blog_Model->bog_list($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/dashboard',$data); 
	}
// -------------------------BLOG SECTION START------------------------------------------
	public function add_blog(){
		$this->load->view('admin/add_blog'); 
	}
	public function stor_blog(){
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'jpg|gif|png|jpeg' 
		];
		$this->load->library('upload',$config);  
		$this->load->library('form_validation');  
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('blog_rules') && $this->upload->do_upload()){
			//Success validation
			$data = $this->input->post(); 
			unset($data['submit']); 
			$data['created_at']= date('M d Y');
			$file = $this->upload->data(); 
			$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
			$data['image_path']=$img_path;
			$this->_flash_Message(
				$this->Blog_Model->Blog_Post($data),
				'Blog Added Successfully.',
				'Blog Faild to Added Successfully.','dashboard'
			); 
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_blog',compact('upload_error')); 
		} 
	} 

	public function Edit_blog($id=NULL){ 
		$data = $this->Blog_Model->find_post_blog($id);
		$this->load->view('admin/edit_blog',compact('data'));
	}
	
	public function update_blog($id=NULL){
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'jpg|gif|png|jpeg' 
		];
		$this->load->library('upload',$config); 
		$this->load->library('form_validation');  
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('blog_rules') && $this->upload->do_upload()){
			//Success validation
			$data = $this->input->post(); 
			$image_name = $this->input->post('user_id'); 
			unset($data['submit']); 
			unset($data['user_id']);  
			$data['update_at']= date('M d Y');

			$file = $this->upload->data(); 
			$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
			unlink(base_url("uploads/".$image_name));
			 
			$data['image_path'] = $img_path; 
			$this->_flash_Message(
				$this->Blog_Model->update_blog_data($id,$data),
				'Blog Update Successfully.',
				'Blog Faild to Update Successfully.','dashboard'
			); 
		}else{
			$this->load->view('admin/Edit_blog'); 
		} 
	}

	public function delete_blog(){ 
		$id = $this->input->post('id'); 
		$this->_flash_Message(
			$this->Blog_Model->delete_blog_data($id),
			'Blog Delete Successfully.',
			'Blog Faild to Delete Successfully.','dashboard'
		); 
	}

	
// -------------------------BLOG SECTION EXIT------------------------------------------
// -------------------------SLIDER SECTION START------------------------------------------
	public function add_slider(){  
		$slider = $this->Blog_Model->default_select('tbl_slider');
		$this->load->view('admin/slider_add',compact('slider')); 
	} 
	public function slider_add(){
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'jpg|gif|png|jpeg' 
		];
		$this->load->library('upload',$config); 
		$this->load->library('form_validation');  
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('slider_valid') && $this->upload->do_upload()){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);    
			$file = $this->upload->data(); 
			$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']); 
			 
				$data['image'] = $img_path; 
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->slider_insert($data),
				'Slider add Successfully.',
				'Slider Add Faild to Update Successfully.','add_slider'
			);
		}else{
			$upload_error = $this->upload->display_errors();
			redirect('admin/add_slider',compact('upload_error'));
		}
	}  
	public function Edit_slider($id){
		if($_SERVER['REQUEST_METHOD']=='POST'){
				$config = [
					'upload_path'=>'./uploads',
					'allowed_types'=>'jpg|gif|png|jpeg' 
				];
				$this->load->library('upload',$config); 
				$this->load->library('form_validation');  
				$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
				if($this->form_validation->run('slider_valid') && $this->upload->do_upload()){
					//Success validation
					$data = $this->input->post();  
					unset($data['submit']);    
					$file = $this->upload->data(); 
					$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']); 
					 
	 				$data['image'] = $img_path; 
	 				// print_r($data);exit;
					$this->_flash_Message(
						$this->Blog_Model->default_update_qury('tbl_slider',$id,$data),
						'Slider Update Successfully.',
						'Slider Update Faild..','add_slider'
					);
			}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/add_slider');
			}
		}else{ 
		$data = $this->Blog_Model->default_select_byid('tbl_slider','id',$id); 
		$this->load->view('admin/edit_slider',compact('data'));
		}
	}
	public function delete_slide(){ 
		$id = $this->input->post('id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_slider','id',$id),
			'Slider Delete Successfully.',
			'Slider Faild to Delete Successfully.','add_slider'
		); 
	}
// -------------------------SLIDER SECTION EXIT------------------------------------------ 
// -------------------------CATEGORY SECTION START------------------------------------------ 
	public function add_category(){

	}
// -------------------------CATEGORY SECTION EXIT------------------------------------------ 
// -------------------------DEFAULT SECTION START------------------------------------------ 

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id'))
			return redirect('Login');
		$this->load->model('Blog_Model'); 
		$this->load->helper('form');
	}
	private function _flash_Message($success, $message, $faield,$redirect){
		if($success){
			$this->session->set_flashdata('feedback', $message);
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback', $faield);
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect("Admin/$redirect"); 
	}
// -------------------------DEFAULT SECTION EXIT------------------------------------------ 
}