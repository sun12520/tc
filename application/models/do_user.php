<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Do_user extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function regUser($username, $password, $email = '', $phone = 0, $pic = '', $tag_id = '') {
        $userinfo = array(
            'user_name' => $username,
            'passwd' => $password,
            'pic' => $pic,
            'email' => $email,
            'phone' => $phone,
            'tag_id' => $tag_id,
            'reg_date' => time(),
            'status' => 1
        );

        $this->db->insert('users', $userinfo);
        $user_id = $this->checkPasswd($username, $password);

        return $user_id;
    }

    function checkPasswd($username, $password) {
        $data_list = $this->db
                ->where('user_name', $username)
                ->where('passwd', $password)
                ->from('users')
                ->get()
                ->result();

        if ($data_list) {
            foreach ($data_list as $user) {
                return $user->user_id;
            }
        } else
            return FALSE;
    }

}
