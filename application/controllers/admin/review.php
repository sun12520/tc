<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once(APPPATH . 'libraries/fetch.php');

$this->load->model('Do_assess','ass');

class review extends CI_Controller {
    
    function show_assess($status = 0){
        /**
         * 显示需要审核的吐槽
         */
        
        $datalist = $this->ass->get_ass($status);
        $this->load->view('items/checkc', $data);
        
    }
    
    
    function review_assess($assess_id,$result){
        /**
         * 审核吐槽，变更状态
         */
    }
    
    function del_assess($assess_id){
        /**
         * 删除吐槽
         */
    }
    
}
