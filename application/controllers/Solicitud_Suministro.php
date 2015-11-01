<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_Suministro extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('table');
        $this->load->library('fpdf');
    }
    
    function index() {
        $this->load->view('header');
        $this->load->view('solicitud_suministro');
        $this->load->view('footer');
    }
    
    private function propiedades($x, $y, $texto, $textColor, $rellenoColor, $fuente) {
        if ($y > -1) {
            $this->fpdf->SetY($y);
        }

        if ($x > -1) {
            $this->fpdf->SetX($x);
        }

        if ($textColor != null) {
            $this->fpdf->SetTextColor($textColor[0], $textColor[1], $textColor[2]);
        }

        if ($rellenoColor != null) {
            $this->fpdf->SetFillColor($rellenoColor[0], $rellenoColor[1], $rellenoColor[2]);
        }

        if ($fuente != null) {
            $this->fpdf->SetFont($fuente[0], $fuente[1], $fuente[2]);
        }

        $this->fpdf->Cell($texto[0], $texto[1], $texto[2], $texto[3], $texto[4], $texto[5], $texto[6]);
    }

    public function recibir() {
        if ($this->input->post('btn_aceptar')) {
            $this->fpdf->AddPage();

            $this->propiedades(0, null, array(210, 30, '', 0, 0, 'C', true), null, array(80, 199, 232), null);
            $this->fpdf->Image(base_url() . 'img/firma-ucr.png', 5, 10, 80, 30);

            $this->propiedades(182, null, array(10, 10, 'Fecha: ' . date('y/m/d'), 0, 1, 'C', false), array(255, 255, 255), null, array('Arial', '', 14));
            $this->propiedades(160, null, array(10, 10, 'Solicitud de Suministros', 0, 1, 'C', false), null, null, array('Arial', 'B', 20));

            $this->propiedades(19, 40, array(10, 10, 'Solicitud No. ' . $this->input->post('numero_factura'), 0, 1, 'C', false), array(0, 0, 0), null, array('Arial', '', 12));
            $this->propiedades(28, null, array(10, 10, 'Oficina: ' . $this->input->post('select_oficinas'), 0, 2, 'C', false), null, null, null);
            $this->propiedades(47, null, array(10, 10, 'Nombre solicitante: ' . $this->input->post('nombre_solicitante'), 0, 1, 'C', false), null, null, null);

            $this->fpdf->Output();
            
        } else if ($this->input->post('btn_cancelar')) {
            $this->index();
        }
    }
}

?>