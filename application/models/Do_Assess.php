<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Do_assess extends CI_Model {

    var $title = '';
    var $content = '';
    var $date = '';
    var $country = '';
    var $price = '';
    var $location = '';
    var $pzType = '';
    var $pzId = '';
    var $pzPicPath = '';
    var $itemType = '';
    var $assContent = '';

    function __construct() {
        parent::__construct();
    }

    //function get_last_ten_entries() {
    //    $query = $this->db->get('entries', 10);
    //    return $query->result();
    //}

    function get_ass() {
        
        /*
         * 查询吐槽
         */
        
        $ass_sql = 'select * from assess where status = 1 order by ci_date DESC';
        $query = $this->db->query($ass_sql);

        return $query;
        /**
          foreach ($query->result() as $row) {
          echo $row->title;
          echo $row->name;
          echo $row->body;
          }
         * 
         */
    }

    function insert_ass($title, $userId, $assContent, $country, $price, $location, $pzType, $pzPicPath, $pzId, $itemType, $tag, $status, $keyId) {
        /*
         * 新增吐槽
         */
        
        
        $this->user_id = $userId;
        $this->title = $title; // 请阅读下方的备注
        $this->assContent = $assContent;
        $this->country = $country;
        $this->price = $price;
        $this->location = $location;
        $this->pzType = $pzType;
        $this->pzPicPath = $pzPicPath;
        $this->pzId = $pzId;
        $this->itemType = $itemType;
        $this->tag = $tag;
        $this->status = $status;
        $this->status = $keyId;
        $this->ci_date = time();

        $this->db->insert('Assess', $this);
    }

    
    function del_ass($assess_id){
        /*
         * 删除吐槽
         */
        $this->db->delete('assess', array('assess_id' => $assess_id)); 
    }
    
    
    function ass_review($status, $user_id = '') {
        /*
         * 查询审核吐槽
         */

        if ($user_id) {
            $need_rev_sql = 'select * from assess where status=' . $status . 'and user_id=' . $user_id;
        } else {
            $need_rev_sql = 'select * from assess where status=' . $status;
        }

        $query = $this->db->query($need_rev_sql);
        return $query;
        
        /**
          foreach ($query->result() as $row) {
          echo $row->title;
          echo $row->name;
          echo $row->body;
          }
         * 
         */
    }

    function update_ass($assess_Id, $status) {
        /**
         * 更新吐槽审核状态
         */
        
        $data = array(
            'status' => $status,
            'review_date' => time(),
            'review_content' => $this->input->post('review_content'),
                //'date' => $date
        );

        $this->db->where('assess_Id', $assess_Id);
        $this->db->update('assess', $data);
    }

}
