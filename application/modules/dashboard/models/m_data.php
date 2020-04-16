<?php 
 
class m_data extends CI_Model{
public $image = "default.jpg";

	function tampil_data(){
		return $this->db->get('tbl_produk');
	}

	function tampil_akustik(){
	 	$where = array('kategori' => '1');
		return $this->db->get_where('tbl_produk',$where);
	}

	function tampil_elektrik(){
	 	$where = array('kategori' => '2');
		return $this->db->get_where('tbl_produk',$where);
	}

	function tampil_bass(){
	 	$where = array('kategori' => '3');
		return $this->db->get_where('tbl_produk',$where);
	}

	function tampil_customer(){
		return $this->db->get('tbl_pelanggan');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data(){
		return $this->db->get('user');
	}
 
	function hapus_data($where,$table){
	 $row = $this->db->where($where)->get('tbl_produk')->row('gambar');
     unlink('././gambar/product/'.$row);
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_product($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function jumlah_user(){   
	    $query = $this->db->get('user');
	    if($query->num_rows()>0){
	      return $query->num_rows();
	  	}
	    else{
	      return 0;
	    }
	}

	public function jumlah_customer(){   
	    $query = $this->db->get('user_cust');
	    if($query->num_rows()>0){
	      return $query->num_rows();
	  	}
	    else{
	      return 0;
	    }
	}

	public function jumlah_product(){   
    	$query = $this->db->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_kategori(){   
    	$query = $this->db->get('tbl_kategori');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_akustik(){
	 	$where = array('kategori' => '1');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_elektrik(){
	 	$where = array('kategori' => '2');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_bass(){
	 	$where = array('kategori' => '3');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
}