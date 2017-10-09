<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends  CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    function login($arg1,$arg2){

        if($this->H->validarEmail($arg1)){
            $string = 'select u.id,u.usuario,u.email, u.sha_pass_hash, u.sha_pass_hash_email 
                   from usuario u 
                   inner join
                   where u.email = '.$arg1.' and  u.sha_pass_hash_email = "'.$arg2.'"; ';
        }
        else{
            $string = 'select id,usuario,email, sha_pass_hash, sha_pass_hash_email 
                   from usuario u 
                   where usuario = '.$arg1.' and  sha_pass_hash = "'.$arg2.'"; ';
        }


        $query = $this->db->query($string);

        if($query->num_rows() == 1){

            $row = $query->row();

                $newdata = array(
                    'id' => $row->id,
                    'usuario'  => $row->usuario,
                    'email'     => $row->email,
                    'sha_pass_hash' => $row->sha_pass_hash,
                    'sha_pass_hash_email' => $row->sha_pass_hash_email,
                    'logged_in' => TRUE
                );


            $this->session->set_userdata($newdata);

            if($_SESSION['logged_in']) {

                $string = 'select rango from usuario u inner join usuario_access uc on u.id = uc.id  where id = '.$_SESSION['id'].' ';
                $query = $this->db->query($string);

                if($query->num_rows() == 1){
                    $row = $query->row();
                    $this->session->set_userdata('rango', $row->rango);
                }
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

}