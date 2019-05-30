<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_lib_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->input->post(NULL, TRUE);
        $this->input->get(NULL, TRUE);
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('path');
    }
    public function library() {
        $this->load->model('U_lib_model');
        $lib = $this->U_lib_model->get_lib()->result_array();

        $data = array(
            'lib' => $lib,
            //'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('u_lib', $data);
    }
    public function one_news($id) {
        $this->load->model('U_index_model');
        $news = $this->U_index_model->getNewsById($id)->result_array();
        $data = array(
            'news' => $news,
            //'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('u_one_news', $data);
    }
    public function about() {
        $this->load->model('U_index_model');
        $news = $this->U_index_model->getAbout()->result_array();
        $i = 0;
        $stud = '';
        $y=0;
        $z=0;
        $h=0;
      foreach($news as $row){
          
            if($i==1){
                
                $stud['stud'.$z][$y]=$news[$y];
                $z++;
                $i=0;
                
                
            }
            else{
                $stud['stud'.$z][$y]=$news[$y];
                $i++;
            }
            $y++;
        }
//        echo "<pre>";
//            print_r($stud);
//        echo "</pre>";
        $data = array(
            'about' => $stud,
            
            //'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('u_about', $data);
    }
    public function about_one($id){
        $this->load->model('U_index_model');
        $about = $this->U_index_model->getAboutById($id)->result_array();
        $xp = $this->U_index_model->getXpById($id)->result_array();
//        echo "<pre>";
//            print_r($xp);
//        echo "</pre>";
        $data = array(
            'about' => $about,
            'xp' => $xp,
            //'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('u_about_one', $data);
    }
    public function consult(){
      //  $this->load->model('U_index_model');
       // $about = $this->U_index_model->getAboutById($id)->result_array();
      //  $xp = $this->U_index_model->getXpById($id)->result_array();
//        echo "<pre>";
//            print_r($xp);
//        echo "</pre>";
        $data = array(
         //   'about' => $about,
           // 'xp' => $xp,
            //'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('u_consult', $data);
    }
}