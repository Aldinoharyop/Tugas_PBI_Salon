<?php
defined('BASEPATH') OR exit('No direct script access allowed');{
    class Service extends CI_Controller{
      public function service ()
      {
          $this->load->view('service');
      }

    }
}