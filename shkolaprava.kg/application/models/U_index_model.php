<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_index_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_first_news() {
        $query = $this->db->get('news', 3);
        return $query;
    }
    public function get_another_news() {
        $query = $this->db->get('news', 1000, 3);
        return $query;
    }
    public function getNewsById($id) {
        $this->db->where('id', $id);
        $reports = $this->db->get('news');
        return $reports;
    }
    public function getAbout() {
        $about = $this->db->get('lawyers');
        return $about;
    }
    public function getAboutById($id) {
        $this->db->where('id', $id);
        $about = $this->db->get('lawyers');
        return $about;
    }
    public function getXpById($id) {
        $this->db->where('id', $id);
        $about = $this->db->get('experiences');
        return $about;
    }
}