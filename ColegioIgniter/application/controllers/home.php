<?php

class Home extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('mUsuarios');
    }
    public function index(){
        $this->load->helper('url'); 
        $this->load->view("home");
    }
    public function carrito(){
        $this->load->helper('url'); 
        $this->load->view("carrito");
    }
    public function crear(){
        $this->load->helper('url'); 
        $this->load->view("crearUsuario");
    }
    public function guardar(){
        $param['nombreEstudiante'] = $this->input->post('nombreEstudiante');
        $param['apellidoEstudiante'] = $this->input->post('apellidoEstudiante');
        $param['nombrePadreFamilia'] = $this->input->post('nombrePadreFamilia');
        $param['apellidoPadreFamilia'] = $this->input->post('apellidoPadreFamilia');
        $param['correoPadre'] = $this->input->post('correoPadre');
        $param['direccion'] = $this->input->post('direccion');
        $param['telefono'] = $this->input->post('telefono');
        $this->mUsuarios->guardar($param);
    }
}