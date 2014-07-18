<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(APPPATH . 'libraries/fetch.php');

class dealass extends CI_Controller {

    public function get_jd_info() {
        $url = $this->input->post('url');
        //echo  $url;
        //log_message('error',$url);
        //$url = 'http://item.jd.com/1156102.html';
        $data = fetch_jd($url);
        //log_message('error',$data);
        echo $data;
    }

    public function file() {
        $uploaddir = '../upload/';

        foreach ($_FILES as $upfile) {
            $uploadfile = $uploaddir . $upfile['name'];

            if (move_uploaded_file($upfile['tmp_name'], $uploadfile))
                echo "true";
            else {
                echo $_FILES['userfile']['error']; //具体见下面的注释 
                echo "<br/>false";
            }
        }
    }

}
