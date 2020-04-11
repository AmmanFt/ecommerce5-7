<?php 
 
 
class upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('form', 'url'));
	}
	function index(){
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/uploadfiles/v_uploadfile');
		$this->load->view('Admin/templates/footer');
	}
	function uploadfile(){
		$config['upload_path']          = '././gambar/files/'; //direktori
		$config['allowed_types']        = '*'; // file yang di perbolehkan
		$config['max_size']             = 100; // maksimal ukuran
		$config['max_width']            = 1024; //lebar maksimal
		$config['max_height']           = 768; //tinggi maksimal
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			redirect('Admin/upload', $error);
		}else{
			$this->upload->data("file_name");
			redirect('Admin/admin');
		}
	}
}