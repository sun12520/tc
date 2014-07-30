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

        try {
            $url = $this->input->get('url');
        } catch (Exception $ex) {
            $url = '';
        }
        //catch () 
        //echo $url;
        //return;

        if (!$this->userlib->islogin()) {
            $data = array();
            $data['title'] = '登录';
            $data['url'] = $url;

            $this->load->view('templates/header', $data);
            $this->load->view('pages/login', $data);
            $this->load->view('templates/footer', $data);
        } else {
            //echo $this->session->userdata('username');
            if ($url != '') {
                redirect($url);
            }
            redirect('dealass/showass');
        }
    }

    function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $url = $this->input->post('url');

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $result = $this->Do_user->checkPasswd($username, $password);
        if ($result) {
            $data['user_id'] = $result;
            $this->session->set_userdata($data);
            if ($url != '') {
                redirect($url);
            }
        }
        redirect('user');
        //echo $this->session->userdata('username');
        //echo $this->session->userdata('user_id');
        //echo $this->session->userdata('password');
    }

    function logout() {
        $array_items = array('username' => '', 'password' => '', 'user_id' => '');
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

        $user_id = $this->Do_user->regUser($username, $password);
        //echo $user_id;
        $data = array(
            'username' => $username,
            'password' => $password,
            'user_id' => $user_id,
        );
        $this->session->set_userdata($data);







        //redirect('user');
    }

}
