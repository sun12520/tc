<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Do_Comment extends CI_Model {


    function __construct() {
        parent::__construct();
    }

    //function get_last_ten_entries() {
    //    $query = $this->db->get('entries', 10);
    //    return $query->result();
    //}

    function get_comment($ass_id) {
        $ass_sql = 'select * from comment where assess_id='.$ass_id.' order by comm_date DESC';
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

    function insert_comment() {
        $this->user_id = $this->input->post('user_id');
        $this->assess_id = $this->input->post('assess_id');
        $this->comm_content = $this->input->post('comm_content');
        $this->comm_date = time();

        $this->db->insert('comment', $this);
    }

    function del_comment($comment_id = '') {

        $this->db->delete('comment', array('comment_id' => $comment_id)); 
        
        /**
          foreach ($query->result() as $row) {
          echo $row->title;
          echo $row->name;
          echo $row->body;
          }
         * 
         */
    }


}
