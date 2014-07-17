<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once(APPPATH . 'libraries/fetch.php');



class Assess extends CI_Controller {


    public function view($page = 'home') {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            // 页面不存在
            show_404();
        }

        $data['title'] = ucfirst($page); // 将title中的第一个字符大写

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function commit(){
        $data['title'] = "Commit";
        
        $this->load->view('templates/header', $data);
        $this->load->view('items/commit', $data);
        $this->load->view('templates/footer', $data);
    }
    
    
}
