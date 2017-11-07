<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locais extends CI_Controller {

    public function index(){
      
        $this->load->view('site/locais');
    }
}
