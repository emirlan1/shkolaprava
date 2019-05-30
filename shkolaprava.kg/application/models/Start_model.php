<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function getVideo(){
        $query = $this->db->get('video');
        return $query;
    }
}
