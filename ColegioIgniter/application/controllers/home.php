<?php

class Home extends CI_Controller{
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
}