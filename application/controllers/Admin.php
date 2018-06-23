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
						$this->Blog_Model->default_update_qury('tbl_slider',$id,$data,'id'),
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
		$data = array();
		$data['category']=$this->Blog_Model->default_select('tbl_category');
		$this->load->view('Admin/add_cat',$data);
	}
	public function category_insert(){
		$data = array();
		if($this->form_validation->run('category_')){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);  
				$data['cat_create_at'] = date('M d Y');
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_category',$data),
				'Category Add Successfully.',
				'Category Add Faild..','add_category'
			);
		}else{  
			$data = array();
			$data['category']=$this->Blog_Model->default_select('tbl_category');
			redirect('admin/add_category',$data);
		} 
	}
	public function edit_category($id){
		$data = array();
		if($this->form_validation->run('category_')){   
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);  
				$data['cat_create_at'] = date('M d Y');
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_update_qury('tbl_category',$id,$data,'cat_id'),
				'Category Update Successfully.',
				'Category Update Faild..','add_category'
			);  
		}else{  
			$data = array();
			$data['category']=$this->Blog_Model->default_select_byid('tbl_category','cat_id',$id);
			$this->load->view('Admin/edit_cat',$data); 
		}
	}
	public function delete_cat(){ 
		$id = $this->input->post('cat_id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_category','cat_id',$id),
			'Category Delete Successfully.',
			'Category Faild to Delete Successfully.','add_category'
		); 
	}
// -------------------------CATEGORY SECTION EXIT------------------------------------------ 
// -------------------------DEFAULT SECTION START------------------------------------------ 

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id'))
			return redirect('Login');
		$this->load->model('Blog_Model'); 
		$this->load->helper('form');
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
		return redirect("Admin/$redirect"); 
	}
// -------------------------DEFAULT SECTION EXIT------------------------------------------ 
// -------------------------Awards SECTION Start------------------------------------------ 
	public function add_awards(){
		$data['awards']=$this->Blog_Model->default_select('tbl_awards');
		$this->load->view('admin/add_award',$data);
	}

	public function awards_insert(){
		$data = array();
		if($this->form_validation->run('awards_')){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);   
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_awards',$data),
				'Category Add Successfully.',
				'Category Add Faild..','add_awards'
			);
		}else{  
			$data = array();
			$data['awards']=$this->Blog_Model->default_select('tbl_awards');
			redirect('admin/add_awards',$data);
		}
	}

	public function edit_awards($id=NULL){
		$data = array();
		if($this->form_validation->run('awards_')){  
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);   
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_update_qury('tbl_awards',$id,$data,'id'),
				'Awards Update Successfully.',
				'Awards Update Faild..','add_awards'
			); 
		}else{  
			$data = array();
			$data['awards']=$this->Blog_Model->default_select_byid('tbl_awards','id',$id);
			$this->load->view('Admin/edit_award',$data); 
		}
	}
	public function delete_awards(){ 
		$id = $this->input->post('id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_awards','id',$id),
			'Awards Delete Successfully.',
			'Awards Faild to Delete Successfully.','add_awards'
		); 
	}
// -------------------------Awards SECTION EXIT------------------------------------------ 
// -------------------------SLOCIAL LINKS SECTION START------------------------------------------ 
	public function add_social(){
		$data['social']=$this->Blog_Model->default_select('tbl_social');
		$this->load->view('admin/add_social',$data);
	}
	public function social_insert(){ 
		if($this->form_validation->run('social_')){
			//Success validation
			$data = $this->input->post();  
			unset($data['submit']);   
				// print_r($data);exit;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_social',$data),
				'Social link Add Successfully.',
				'Social link Add Faild..','add_social'
			);
		}else{  
			$data = array();
			$data['social']=$this->Blog_Model->default_select('tbl_social');
			redirect('admin/add_social',$data);
		}
	}

	public function upadte_social($id=NULL){
		if($this->form_validation->run('social_')){
			$data=$this->input->post();
			unset($data['submit']);
			$this->_flash_Message(
				$this->Blog_Model->default_update_qury('tbl_social',$id,$data,'social_id'),
				'Social link Update Successfully.',
				'Social link Update Faild..','add_social'
			);
		}else{
			$data=array();
			$data['social']=$this->Blog_Model->default_select('tbl_social',$id);
			$this->load->view('Admin/edit_social',$data);
		}
	}

	public function delete_social(){ 
		$id = $this->input->post('social_id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_social','social_id',$id),
			'Social Delete Successfully.',
			'Social Faild to Delete Successfully.','add_social'
		); 
	}
// -------------------------SLOCIAL LINKS SECTION EXIT------------------------------------------ 
// -------------------------Inbox Message SECTION EXIT------------------------------------------ 
	public function inbox_(){
		$data=array();
		$data['comments']=$this->Blog_Model->default_select('tbl_comment');
		$this->load->view('admin/inbox',$data);
	}
// -------------------------Inbox Message SECTION EXIT------------------------------------------ 
// -------------------------PAGE_SECTION  SECTION START------------------------------------------ 
	public function add_section(){
		$data = array();
		$data['section']=$this->Blog_Model->default_select('tbl_sectionbg');
		$this->load->view('admin/add_section',$data);
	}
	public function Insert_section(){
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'jpg|gif|png|jpeg' 
		];
		$this->load->library('upload',$config);   
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('section_rules') && $this->upload->do_upload()){
			//Success validation
			$data = $this->input->post(); 
			unset($data['submit']);  
			$file = $this->upload->data(); 
			$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
			$data['sec_img']=$img_path;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_sectionbg',$data),
				'Section Added Successfully.',
				'Section Faild to Added Successfully.','add_section'
			); 
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_section',compact('upload_error')); 
		} 
	}
	public function update_section($id=NULL){ 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$config = [
				'upload_path'=>'./uploads',
				'allowed_types'=>'jpg|gif|png|jpeg' 
			];
			$this->load->library('upload',$config);   
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
			if($this->form_validation->run('section_rules') && $this->upload->do_upload()){
				//Success validation
				$data = $this->input->post(); 
				unset($data['submit']);  
				$file = $this->upload->data(); 
				$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
				$data['sec_img']=$img_path;
				$this->_flash_Message(
					$this->Blog_Model->default_update_qury('tbl_sectionbg',$id,$data,'sec_id'),
					'Section Update Successfully.',
					'Section Faild to Update Successfully.','add_section'
				); 
			}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/edit_section',compact('upload_error')); 
			}
		}else{
			$data = array();
			$data['section']=$this->Blog_Model->default_select_byid('tbl_sectionbg','sec_id',$id);
			$this->load->view('admin/edit_section',$data);
		}
	}
	public function delete_sec(){
		$id = $this->input->post('sec_id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_sectionbg','sec_id',$id),
			'Section Delete Successfully.',
			'Section Faild to Delete Successfully.','add_section'
		); 
	}
// -------------------------PAGE_SECTION  SECTION EXIT------------------------------------------ 
// -------------------------PAGE  SECTION START------------------------------------------ 
	public function add_page(){
		$data=array();
		$this->load->helper('default_helper');
		$data['pages']=$this->Blog_Model->default_select('tbl_page');
		$this->load->view('admin/add_page',$data);
	}

	public function Insert_page(){
		$this->load->helper('default_helper');
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'jpg|gif|png|jpeg' 
		];
		$this->load->library('upload',$config);   
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('page_rules') && $this->upload->do_upload()){
			//Success validation
			$data = $this->input->post(); 
			unset($data['submit']);  
			$data['created_at']= date('M d Y');
			$file = $this->upload->data(); 
			$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
			$data['image_path']=$img_path;
			$this->_flash_Message(
				$this->Blog_Model->default_Insert_qury('tbl_page',$data),
				'Page Added Successfully.',
				'Page Faild to Added Successfully.','add_page'
			); 
		}else{
			$data['upload_error'] = $this->upload->display_errors();
			$data['pages']=$this->Blog_Model->default_select('tbl_page');
			$this->load->view('admin/add_page',$data); 
		} 
	}

	public function update_page($id=NULL){ 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$config = [
				'upload_path'=>'./uploads',
				'allowed_types'=>'jpg|gif|png|jpeg' 
			];
			$this->load->library('upload',$config);   
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
			if($this->form_validation->run('page_rules') && $this->upload->do_upload()){
				//Success validation
				$data = $this->input->post(); 
				unset($data['submit']);  
				$file = $this->upload->data(); 
				$data['update_at']= date('M d Y');
				$img_path = base_url("uploads/".$file['raw_name'].$file['file_ext']);
				$data['image_path']=$img_path;
				$this->_flash_Message(
					$this->Blog_Model->default_update_qury('tbl_page',$id,$data,'pag_id'),
					'page Update Successfully.',
					'page Faild to Update Successfully.','add_page'
				); 
			}else{ 
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/update_page',compact('upload_error')); 
			}
		}else{
			$data = array();
			$data['pages']=$this->Blog_Model->default_select_byid('tbl_page','pag_id',$id);
			$this->load->view('admin/edit_page',$data);
		}
	}

	public function page_delete(){
		$id = $this->input->post('pag_id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_page','pag_id',$id),
			'Page Delete Successfully.',
			'Page Faild to Delete Successfully.','add_page'
		); 
	}
// -------------------------PAGE  SECTION EXIT------------------------------------------ 
// -------------------------Inbox SECTION START------------------------------------------  

public function inbox(){
	$data = array();
		$this->load->library('pagination');
		$config = [
			'base_url' 		=> base_url('admin/dashboard'),
			'per_page'		=>5,
			'total_rows' 	=> $this->Blog_Model->inbox_count(),
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
		$data['inbox'] = $this->Blog_Model->inbox_list($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/inbox',$data); 
	}
	public function inbox_delete(){
		$id = $this->input->post('id'); 
		$this->_flash_Message(
			$this->Blog_Model->default_delete('tbl_info','id',$id),
			'Inbox Delete Successfully.',
			'Inbox Delete Faild.','inbox'
		);
	}

	public function inbox_reply($id){
		$data['inbox']=$this->Blog_Model->default_select_byid('tbl_info','id',$id);
		$this->load->view('admin/inbox_view',$data);
	}
	public function replay_inbox_ans(){
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
// -------------------------Inbox SECTION EXIT------------------------------------------ 	 





}