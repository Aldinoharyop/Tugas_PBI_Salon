<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
    function render_page($content, $data = NULL){
 
        $data['app'] = $this->load->view('layouts/app', $data, TRUE);
        $data['master'] = $this->load->view($content, $data, TRUE);
        $data['single'] = $this->load->view('layouts/single', $data, TRUE);
        
        $this->load->view('home', $data);
    }
}