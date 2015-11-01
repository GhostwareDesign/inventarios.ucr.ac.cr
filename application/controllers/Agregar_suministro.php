<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar_suministro extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('table');
    }
    
    function index() {
        $this->load->view('header');
        $this->load->view('agregar_suministro');
        $this->load->view('footer');
    }
}

?>