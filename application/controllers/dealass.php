<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(APPPATH . 'libraries/fetch.php');

class dealass extends CI_Controller {

    public function get_jd_info() {
        /*
         * 抓取京东数据函数
         */
        $url = $this->input->post('url');
        //echo  $url;
        //log_message('error',$url);
        //$url = 'http://item.jd.com/1156102.html';
        $data = fetch_jd($url);
        //log_message('error',$data);
        echo $data;
    }

    /*     * *
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
     * */

    public function commit_view() {
        /**
         * 吐槽提交后处理函数
         */
        $url = $this->input->post('url');
        $userId = '10000000';
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $location = $this->input->post('location');
        $lb = $this->input->post('lb');
        $pztype = $this->input->post('type');
        $content = $this->input->post('content');

        echo $title . '<br />';
        echo $price . '<br />';
        echo $location . '<br />';
        echo $lb . '<br />';
        echo $type . '<br />';
        echo $content . '<br />';

        if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
            print_r($_FILES['userfile']) . '<br />';
            $file_name = $_FILES['userfile']['name'];
            $size = $_FILES['userfile']['size'];
            $type = $_FILES['userfile']['type'];
            $original = $_FILES['userfile']['tmp_name'];
            $md5 = md5_file($original);
            echo $file_name . '<br />';
            echo $size . '<br />';
            echo $type . '<br />';
            echo $original . '<br />';
            echo $md5 . '<br />';


            move_uploaded_file($original, './uploads/' . basename($file_name));
        }
    }

}
