<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Userlib extends CI_Controller{

    function islogin() {

        $islogin = FALSE;

        $username = $this->session->userdata('username');
        //$aa = $this->session->all_userdata();
        //print_r($aa);
        //echo $username;
        //$user_name = isset($this->session->userdata('user_name')) ? $this->session->userdata('user_name') : 0;
                
        if ($username) {
            $islogin = TRUE;
            //echo $islogin;
        }

        return $islogin;
    }

}
