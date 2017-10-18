<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlSesiones extends CI_Controller {


    public function __construct()
    {

        parent::__construct();
    }


    public function controlCerrarSesionCorreo(){


        if(!empty($this->input->get('idUsuario')) && !empty($this->input->get('correoElectronico')) && !empty($this->input->get('correoElectronico'))){

            $idUsuario = $this->input->get('idUsuario');
            $correoElectronico = $this->input->get('correoElectronico');
            $codigoCerrarSesion = $this->input->get('codigoCerrarSesion');

            if($this->C->insertCerrarSesionesEmailACerrar($idUsuario,$correoElectronico,$codigoCerrarSesion)){
                $this->load->view('practict/Sesiones/index');
            }
	    else{
	    	redirect('');
	    }

        }else{
            redirect('');
        }

    }

    public  function cerrarSesion(){
        $this->C->cerrarSesion();
        redirect('');
    }

    public function cerrarTodasSesionesEnLinea(){
        echo $this->C->cerrarTodasSesionesEnLinea();
    }

    public function recuperarEmailC(){
        if($this->input->post('recuperar') == 'recuperar') {
            $email = $this->input->post('email');
            $nuevaClave1 = $this->H->generarCodigo();
	    if($this->U->VerificarCorreoExiste($email)){//validar si el correo existe para la recuperacion de contraseña
            $nuevaClave2 = $this->H->encryptEmailContraseña($email,$nuevaClave1);
            echo $this->C->recuperarContraseña($email,$nuevaClave1,$nuevaClave2);
	    }else{
	     echo 0;
	    }
        }
        else{
            redirect('');
        }
    }


    public function recibirRecuperacionEmail(){
        if(!empty($this->input->get('correoElectronico')) && !empty($this->input->get('claveDeAcceso')) && !empty($this->input->get('nuevaContraseña'))){
            $correoElectronico = $this->input->get('correoElectronico');
            $claveDeacceso = $this->input->get('claveDeAcceso');
            $nuevaContraseña =  $this->H->encryptEmailContraseña($correoElectronico,$this->input->get('nuevaContraseña'));
            $this->U->validarRecuperacionYCambiarContraseña($correoElectronico,$claveDeacceso,$nuevaContraseña);
        }
        else{
            redirect('');
        }
    }

}
