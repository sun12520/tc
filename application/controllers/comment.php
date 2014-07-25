<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Comment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Do_comment');
    }

    function index() {
        //$this->load->view('pages/upload', array('error' => ' '));
    }

    function show_comment($assess_id){
        //显示评论
        $comm_list = $this->Do_comment->get_comment($assess_id);
        
        $comm_arr = array();
        $n = 0;
        foreach ($comm_list as $row)
        {
            $comm_arr[$n]['user_id'] = $row->user_id;
            $comm_arr[$n]['comm_content'] = $row->comm_content;
            $comm_arr[$n]['comm_date'] = $row->comm_date;
            $n++;
        }
        
        //print_r($comm_arr);
        $comm_json =  json_encode($comm_arr);
        echo $comm_json;
        //return $comm_json;
        
    }
            
    function ci_comment(){
        //提交评论
        
        $user_id = $this->input->post('user_id');
        $assess_id = $this->input->post('assess_id');
        $comm_content = $this->input->post('comm_content');
        
        $result = $this->Do_comment->insert_comment($user_id,$assess_id,$comm_content);
        echo $result;
        
    }
    
    function del_comment(){
        //删除评论
    } 

}
