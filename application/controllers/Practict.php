<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Practict extends CI_Controller {

    var $validar  = false;
    var $usuario = '';
    var $contrasena = '';


    public function __construct()
    {

        parent::__construct(); //la funcion __construct() hereda el __construct de CI_Controller}

        $this->load->model('');

        $this->validar = false;
        $this->usuario = '';
        $this->contrasena = '';
    }

    public function index() //la funcion publica index es da vista a la pestaña inicial del navegador osea el index de la pagina web
	{

		$this->load->view('practict/index'); //llamo la vista y la muestro esta se encuentra en views/practict/index.php
	}

	public function iniciar_session(){


        $this->validar  = ($this->input->post("Iniciar_session") == 'login') ? true : false;

        if($this->validar){

            $this->validar = false;

            $this->usuario = $this->input->post("usuario");
            $this->contrasena = $this->input->post("contraseña");

            if(!empty($this->usuario) && !empty($this->contrasena)){

                if($this->H->validarEmail($this->usuario)){
                    $this->validar = $this->U->login($this->usuario, $this->H->encryptEmailContraseña($this->usuario,$this->contrasena));
                }
                else{
                    $this->validar = $this->U->login($this->usuario, $this->H->encryptUsuarioContraseña($this->usuario,$this->contrasena));
                }
            }
            if($this->validar){
                echo '1'; //no
            }
            else{
                echo '0';
            }
        }


    }

}
