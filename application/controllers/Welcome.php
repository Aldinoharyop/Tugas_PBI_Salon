<?php
defined('BASEPATH') OR exit('No direct script access allowed');{

class Welcome extends CI_Controller { /* nama class sesuai dengan nama file php */
	public function index()
	{
		$this->load->view('home'); /* ketika mengetikkan localhost/namafolder, maka akan memanggil file 
												php bernama 'welcome_message' yg berada dalam folder view */
		
	}
	public function about()
	{
		$this->load->view('about');
	}

	

}
}