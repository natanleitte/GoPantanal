<?php

class Error extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load('errors/html/error_404');
    }
}
