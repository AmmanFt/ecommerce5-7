<?php 
 
class admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
	}
 
	function index(){
 		$data['total_user'] = $this->m_data->jumlah_user();
 		$data['total_customer'] = $this->m_data->jumlah_customer();
 		$data['total_product'] = $this->m_data->jumlah_product();
 		$data['total_kategori'] = $this->m_data->jumlah_kategori();
 		$data['total_akustik'] = $this->m_data->jumlah_akustik();
 		$data['total_elektrik'] = $this->m_data->jumlah_elektrik();
 		$data['total_bass'] = $this->m_data->jumlah_bass();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/v_dashboard', $data);
		$this->load->view('Admin/templates/footer');
	}
}