<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class search extends CI_Controller{
    public function __construct() {
        parent::__construct();
        require_once(APPPATH . 'libraries/sphinxapi.php');
    }
    
    function index(){
        $mode = SPH_MATCH_BOOLEAN;
        $index = '*';
        $q = '中午|another';
        
        
        $cl = new SphinxClient ();
        $cl->SetServer('127.0.0.1', 3312);
        $cl->SetConnectTimeout(1);
        $cl->SetWeights(array(100, 1));
        $cl->SetMatchMode($mode);
        
        $cl->SetArrayResult(true);
        $res = $cl->Query($q, $index);


        $data['title'] = "Commit";
        $data['res']= $res;
        $data['q']= $q;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
    }
    
}

