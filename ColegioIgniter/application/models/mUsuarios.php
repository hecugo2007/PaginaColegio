<?php

class MUsuarios extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function guardar($param){
        $campos = array(
            'NombreEstudiante' => $param['nombreEstudiante'],
            'ApellidoEstudiante' => $param['apellidoEstudiante'],
            'NombrePadreFamilia' => $param['nombrePadreFamilia'],
            'ApellidoPadreFamilia'=> $param['apellidoPadreFamilia'],
            'CorreoPadreFlia'=> $param['correoPadre'],
            'Direccion' => $param['direccion'],
            'Telefono' => $param['telefono']
        );
        $this->db->insert('Usuarios',$campos);
    }
}