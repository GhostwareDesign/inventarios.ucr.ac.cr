<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('table');
    }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('inventario');
        $this->load->view('footer');
    }

}
?>