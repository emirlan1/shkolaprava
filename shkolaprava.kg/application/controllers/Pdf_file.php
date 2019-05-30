<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_file extends CI_Controller {
    
    public $_csrf = null;
    public function __construct() {
        parent::__construct();
        $this->load->model('pdf_model');
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
    public function pdf_one_cats() {
        $cats = $this->pdf_model->getOnePdfCategories();
        $data = array(
            'categories' => $cats,
            'csrf_hash' => $this->_csrf['hash'],
        );
        $this->load->view('pdf_one_cats', $data);
    }
    public function insert_category_file(){
        $category_name = $this->input->post('category_name');
        $data = array(
            'category_name' => $category_name,
        );
        echo $this->pdf_model->insert_category_file($data);
    }
    public function delete_category() {
        $id = $this->input->post('id');
        $this->pdf_model->deleteCategoryById($id);
        $json = array(
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
}