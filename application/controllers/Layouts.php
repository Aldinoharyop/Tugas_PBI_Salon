
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
		$this->render_page('about');
	}

	public function servis(){
		$this->render_page('service');
    }
    
    public function bundel(){
        $this->render_page('bundle');
    }

    public function reserve(){
        $this->render_page('reservation');
    }
}

