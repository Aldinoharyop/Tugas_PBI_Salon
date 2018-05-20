
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layouts extends MY_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->render_page('home');
	}

	public function tentangkami(){
		$this->load->view('about');
	}

	public function servis(){
		$this->load->view('service');
    }
    
    public function bundel(){
        $this->load->view('bundle');
    }

    public function reserve(){
        $this->load->view('reservation');
    }
}

