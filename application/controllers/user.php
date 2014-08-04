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
        redirect('assess/view/mainpage');
        /**
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
          $data['username']=FALSE;

          $this->load->view('templates/header', $data);
          $this->load->view('pages/login', $data);
          $this->load->view('templates/footer', $data);
          } else {
          //echo $this->session->userdata('username');
          if ($url != '') {
          redirect($url);
          }
          redirect('assess/view/mainpage');
          }

         */
    }

    function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $checkcode = $this->input->post('checkcode');
        $url = $this->input->post('url');


        $ip = $this->getIP();
        $code = md5($ip . 'grandcloudcn');

        //echo $checkcode;

        if (!isset($_SESSION)) {
            session_start();
        }
        if ($checkcode != $_SESSION[$code]) {
            echo FALSE;
        } else {
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
                echo TRUE;
            }
        }
        //redirect('assess/view/mainpage');
        //echo $this->session->userdata('username');
        //echo $this->session->userdata('user_id');
        //echo $this->session->userdata('password');
    }

    function logout() {
        $array_items = array('username' => '', 'password' => '', 'user_id' => '');
        $this->session->unset_userdata($array_items);
        //$aa = $this->session->all_userdata();
        //print_r($aa);
        redirect('assess/view/mainpage');
    }

    function register() {
        $data = array();
        $data['title'] = '注册';
        $data['username'] = FALSE;
        $data['url'] = '';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/reg', $data);
        $this->load->view('templates/footer', $data);
    }

    function reg() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $checkcode = $this->input->post('checkcode');


        $ip = $this->getIP();
        $code = md5($ip . 'grandcloudcn');

        //echo $checkcode;

        if (!isset($_SESSION)) {
            session_start();
        }

        //echo $_SESSION[$code];
        if ($checkcode != $_SESSION[$code]) {
            echo FALSE;
        } else {
            $user_id = $this->Do_user->regUser($username, $password, $email);
            //echo $user_id;
            $data = array(
                'username' => $username,
                'password' => $password,
                'user_id' => $user_id,
            );
            $this->session->set_userdata($data);
            echo TRUE;
            //redirect('assess/view/mainpage');
        }
    }

    function getIP() {
        global $ip;
        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else
            $ip = "Unknow";
        return $ip;
    }

}
