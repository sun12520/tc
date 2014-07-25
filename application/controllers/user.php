<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once(APPPATH . 'libraries/userlib.php');

class user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Do_user');
        $this->load->library('Userlib');
    }

    function index() {



        if (!$this->userlib->islogin()) {
            $data = array();
            $data['title'] = '登录';

            $this->load->view('templates/header', $data);
            $this->load->view('pages/login', $data);
            $this->load->view('templates/footer', $data);
        } else {
            //echo $this->session->userdata('username');
            redirect('dealass/showass');
        }
    }

    function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $result = $this->Do_user->checkPasswd($username, $password);
        if ($result) {
            $this->session->set_userdata($data);
        }
        redirect('user');
        //echo $this->session->userdata('username');
    }

    function logout() {
        $array_items = array('username' => '', 'password' => '');
        $this->session->unset_userdata($array_items);
        //$aa = $this->session->all_userdata();
        //print_r($aa);
        redirect('user');
    }

    function register() {
        $data = array();
        $data['title'] = '注册';


        $this->load->view('templates/header', $data);
        $this->load->view('pages/reg', $data);
        $this->load->view('templates/footer', $data);
    }

    function reg() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //echo $username;
        //echo $password;

        $this->Do_user->regUser($username, $password);

        $data = array(
            'username' => $username,
            'password' => $password
        );
        $this->session->set_userdata($data);
        redirect('user');
    }

}
