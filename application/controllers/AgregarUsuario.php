<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgregarUsuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('agregar_usuario');
        $this->load->view('footer');
    }

}
?>