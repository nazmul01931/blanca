<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	
	public function index(){
		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');
		$this->load->helper('form');
		$this->load->view('admin/login');
	}

	public function admin_login(){
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('username','User Name', 'required|alpha_numeric|trim');
		// $this->form_validation->set_rules('password','Password', 'required|trim');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('user_login')){
			//Success validation
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			 
			$this->load->model('LoginModel');
			$login_id = $this->LoginModel->validate_login($username,$password);
			if($login_id){
				//Authentication success
				 
				$this->session->set_userdata('user_id',$login_id);  
				return redirect('admin/dashboard');
			}else{
				//Authentication faild
				$this->session->set_flashdata('Login_failed', 'Invalid Username/Password');
				return redirect('login');
			} 
		}else{
			$this->load->view('admin/login'); 
		}
	}

	

	public function logout(){
		$this->load->helper('url');
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}