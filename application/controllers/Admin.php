<?php 

/**
* 
*/
class Admin extends CI_Controller
{
	
	function index() {
		$this->load->view('admin/home');
	}
 	
	function login(){
		$this->load->view('admin/login');
	}

	function pelayanan(){
		$this->load->view('admin/pelayanan');
	}

	function pembayaran(){
		$this->load->view('admin/pembayaran');
	}

	function pembayaranCon(){
		$this->load->view('admin/pembayaranCon');
	}

	function reservation(){
		$this->load->view('admin/reservation');
	}


}

 ?>