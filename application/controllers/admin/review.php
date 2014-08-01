<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once(APPPATH . 'libraries/fetch.php');



class review extends CI_Controller {

    private static $username;
    function __construct() {
        parent::__construct();
        $this->load->model('Do_assess', 'ass');
        self::$username = $this->session->userdata('username');
        //$this->load->helper('url');
    }

    function show_assess($status = 0) {
        /**
         * 显示需要审核的吐槽
         */
        $datalist = $this->ass->get_ass($status);
        $data = array();
        $data['ass_list'] = $datalist;
        $data['title'] = '待审核列表';
        $data['username'] = self::$username;

        $this->load->view('templates/header', $data);
        $this->load->view('admin/assess', $data);
        $this->load->view('templates/footer', $data);


        //$this->load->view('items/checkc');
    }

    function review_assess($assess_id, $result) {
        /**
         * 审核吐槽，变更状态
         */
        //echo $assess_id."<br>";
        //echo $result;
        $this->ass->update_ass($assess_id,$result);
        
    }

    function del_assess($assess_id) {
        /**
         * 删除吐槽
         */
    }

}
