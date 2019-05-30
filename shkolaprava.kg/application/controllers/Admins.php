<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {
    private  $_sol = 'yaapnulgoldnovu'; 
    public $_csrf = null;
    public function __construct() {
        parent::__construct();
        $this->load->model('admins_model');
        $this->load->model('categories_model');
        $this->load->model('themes_model');
        $this->load->database();
        $this->input->post(NULL, TRUE);
        $this->input->get(NULL, TRUE);
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('path'); 
         $this->_csrf  =  array( 
            'name' => $this->security->get_csrf_token_name(), 
            'hash' => $this->security->get_csrf_hash() 
        );
    }

    public function Index() {
        $data = array(
            'csrf_hash' => $this->_csrf['hash']
        );
        $this->load->view('admins', $data);
    }

    public function login() {
        $this->load->model('admins_model');
        $login = $this->input->post('login');
        $pass = $this->input->post('password');
        $pass_sol = $pass.$this->_sol; 
        $pas_hash = hash('sha256',$pass_sol);
        $array = array('login'=>$login,'pass'=>$pas_hash);
        echo $this->admins_model->login($array);
    }
    public function logout(){
        $this->session->unset_userdata('admin');
        header("Location: ".base_url()."admin");
    }
}