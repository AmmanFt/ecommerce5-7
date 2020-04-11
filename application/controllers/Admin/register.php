<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class register extends CI_Controller {
	 
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_register'); //call model
	}
 
	public function index() {
 
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/akun/v_register');
		}else{
 
			$data['username'] =    $this->input->post('username');
			$data['email']  =    $this->input->post('email');
			$data['password'] =    md5($this->input->post('password'));
 
			$this->m_register->daftar($data);
			 
			$pesan['message'] =    "Pendaftaran berhasil";
			 
			redirect('Admin/login',$pesan);
		}
	}
}