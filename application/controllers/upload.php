<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('pages/upload', array('error' => ' '));
    }

    function do_upload() {
        
        
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1868';

        
        
        $this->load->library('upload', $config);
        
        
        echo md5_file($this->upload);
        return;
        
        

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('pages/upload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('pages/upload_success', $data);
        }
    }

}
