<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends  CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    function login($usuario,$contraseña)
    {
        $query = $this->db->query('SELECT *FROM usuario WHERE correoElectronico = "'.$usuario.'" AND claveDeAcceso = "'.$contraseña.'" LIMIT 1;');

        if($query->num_rows() == 1){

            $row = $query->row();

            $newdata = array(
                "idUsuario" => $row->idUsuario,
                "nombres" => $row->nombres,
                "apellidos" => $row->apellidos,
                "telefono" => $row->telefono,
                "rol" => $row->rol,
                "correoElectronico" => $row->correoElectronico,
                "claveDeAcceso" => $row->claveDeAcceso,
                "estado" => $row->estado,
                'logged_in' => TRUE
            );


            $this->comprobarInicioSesion($row->idUsuario,$row->nombres, $row->apellidos,$row->correoElectronico);

            $this->session->set_userdata($newdata);

            return true;
        }
        else{
            return false;
        }

    }


    function RecuperarContraseña($email)
    {
        return true;
    }


    function guardarNuevoIngreso($idUsuario){
        $this->db->query('INSERT INTO controlSesiones(idUsuario,ip) VALUES("'.$idUsuario.'", "'.$this->H->getRealIP().'");');
    }

    function comprobarInicioSesion($idUsuario,$nombres,$apellidos,$correoElectronico){
        $query = $this->db->query('SELECT fechaOnline,ip FROM controlSesiones WHERE idUsuario = "'.$idUsuario.'";');

        if($query->num_rows() == 1) {

            $row = $query->row();
            $ip = $this->H->getRealIP();
            if($ip != $row->ip){
                $this->H->notificarIngreso($idUsuario,$nombres,$apellidos,$correoElectronico,$row->ip,$ip);
            }
            $this->db->query('UPDATE controlSesiones set ip = "'.$ip.'" WHERE idUsuario = "'.$idUsuario.'"; ');
        }
        else{
            $this->guardarNuevoIngreso($idUsuario);
        }
    }




}