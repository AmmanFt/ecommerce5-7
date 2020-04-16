<?php 
 
class elektrik extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
 
	}
 
	function index(){
		$data['products'] = $this->m_data->tampil_elektrik()->result();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/category/v_elektrik',$data);
		$this->load->view('Admin/templates/footer');
	}
}