<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(APPPATH . 'libraries/fetch.php');

class dealass extends CI_Controller {

    private static $username;

    function __construct() {
        parent::__construct();
        $this->load->model('Do_assess');
        $this->load->library('Userlib');
        self::$username = $this->session->userdata('username');

        $url_this = "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        //echo $url_this;
        //if (!$this->userlib->islogin()) {
        //    redirect('user?url=' . $url_this);
        //}
        //$this->load->helper('url');
    }

    public function get_jd_info() {
        /*
         * 抓取京东数据函数
         */
        $url = $this->input->post('url');
        //echo  $url;
        //log_message('error',$url);
        $url = 'http://item.jd.com/1156102.html';
        $data = fetch_jd($url);
        //log_message('error',$data);
        echo $data;
    }

    public function asslist() {
        /**
         * 查询展示吐槽
         */
        //$data['title'] = '查询吐槽列表';

        $offsite = $this->input->post('offsite');
        $limit = $this->input->post('limit');

        $status = 1;
        $ass_list = $this->Do_assess->get_ass($status, $offsite, $limit);

        return $ass_list;
        //$data['ass_list'] = $ass_list;
        //$data['username'] = self::$username;
        //$this->load->view('templates/header', $data);
        //$this->load->view('items/listass', $data);
        //$this->load->view('templates/footer', $data);
    }

    public function showass() {
        /**
         * 查询展示吐槽
         */
        $data['title'] = '查询吐槽列表';
        $status = 1;
        $ass_list = $this->Do_assess->get_ass($status);

        $data['ass_list'] = $ass_list;
        $data['username'] = self::$username;

        $this->load->view('templates/header', $data);
        $this->load->view('items/listass', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ass_zan($assess_id) {
        $num = $this->Do_assess->zan_ass($assess_id);
        echo $num;
    }

    public function commit_view() {
        /**
         * 吐槽提交后处理函数
         */
        $url = $this->input->post('url');
        $user_id = $this->session->userdata('user_id');
        $user_name = $this->session->userdata('user_name');
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $location = $this->input->post('location');
        $lb = $this->input->post('lb');
        $pzType = $this->input->post('type');
        $content = $this->input->post('content');

        //echo $title . '<br />';
        //echo $price . '<br />';
        //echo $location . '<br />';
        //echo $lb . '<br />';
        //echo $type . '<br />';
        //echo $content . '<br />';

        if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
            //print_r($_FILES['userfile']) . '<br />';
            $file_name = $_FILES['userfile']['name'];
            $size = $_FILES['userfile']['size'];
            $type = $_FILES['userfile']['type'];
            $original = $_FILES['userfile']['tmp_name'];
            $md5 = md5_file($original);
            //echo $file_name . '<br />';
            //echo $size . '<br />';
            //echo $type . '<br />';
            //echo $original . '<br />';
            //echo $md5 . '<br />';

            move_uploaded_file($original, './uploads/' . basename($file_name));
        }
        $picpath = $md5;
        $tag = '奇葩';
        $status = 0;
        //echo "Before insert!";
        $this->Do_assess->insert_ass($title, $user_id, $content, $price, $location, $pzType, $picpath, $tag, $status);


        redirect('dealass/showass');
    }

}
