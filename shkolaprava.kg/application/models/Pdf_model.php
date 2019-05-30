<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function getOnePdfCategories() {
        $query = $this->db->get('pdf_category_files');
        return $query->result_array();
    }
    public function deleteCategoryById($id) {
        $old_img = $this->db->get('pdf_category_files')->row()->route;
        unlink(FCPATH."pdf_files/".$old_img);
        $this->db->where('id', $id);
        $this->db->delete('pdf_category_files');
    }
    public function insert_category_file($mass){
            $category_name = $mass['category_name'];
            $config['upload_path'] = './pdf_files/';
            $config['allowed_types'] = 'docx|pdf';
        
            $new_name = time().'-'.$_FILES["userfile"]['name'];
            $config['file_name'] = $new_name;

            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile');
        
            $upload_image = $this->upload->data();
            $img = $upload_image['file_name'];
            $data = array(
                'name' => $category_name,
                'route' => $img,
            );
            $this->db->insert('pdf_category_files', $data);
            $last_id =    $this->db->insert_id();
            $massiv['img'] = base_url().'pdf_files/'.$upload_image['file_name'];
            $massiv['name'] = $category_name;
            $massiv['csrf_hash'] = $this->security->get_csrf_hash();
            $massiv['id'] = $last_id;
            $massiv_json = json_encode($massiv);
            return $massiv_json;
    }
}