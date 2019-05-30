<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('url');
    }

  	public function login($array){
        $login = $array['login'];
        $pass = $array['pass'];
        $this->db->where('login',"$login");
        $this->db->where('pass',"$pass");
        $one_lang = $this->db->get('admin');
        if(count($one_lang->result_array()) == 1){
            $this->session->set_userdata('admin','1');
            return true;
        }
        else{
            return true;
        }
	}
}