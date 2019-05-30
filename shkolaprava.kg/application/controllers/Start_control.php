<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('lawyers_model');
        $this->load->model('experiences_model');
        $this->load->library('session');
        $session_admin = $this->session->admin;
        if($session_admin !=1){
            redirect(base_url().'admin');
        }
    }
    public function Index() {
        $this->load->model('Start_model');
        $video = $this->Start_model->getVideo()->result_array();
        $data = array(
            'video' => $video,
            'csrf_hash' => $this->security->get_csrf_hash(),
        );
        $this->load->view('start', $data);
    }
}