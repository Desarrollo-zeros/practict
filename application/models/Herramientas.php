<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Herramientas extends  CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    public function encryptEmailContraseña($email, $contraseña)
    {
        $sha_pass_hash_email = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($contraseña))))))));
        return $sha_pass_hash_email; //retorna email:contraseña
    }

    public function encryptUsuarioContraseña($username, $contraseña)
    {
        if(!is_string($username)) { $username = ""; }
        if(!is_string($contraseña)) { $contraseña = ""; }
        $sha_pass_hash = sha1(strtoupper($username).':'.strtoupper($contraseña));
        return strtoupper($sha_pass_hash);   //retorna usuario:contraseña
    }

    public function validarEmail($arg){
        if (filter_var($arg, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else{
            return false;
        }
    }

}