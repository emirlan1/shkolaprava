<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_images_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function getReportImages() {
        $query = $this->db->get('report_images');
        return $query->result();
    }
    public function getReportImagesByReportId($report_id) {
        $this->db->where('report_id', $report_id);
        $query = $this->db->get('report_images');
        return $query->result_array();
    }
    public function getOneReportImageById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('report_images');
        return $query->result();
    }
    public function insertReportImage($id) {
        $config['upload_path'] = './uploads/report_img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = true;
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $upload_image = $this->upload->data();
            $img = $upload_image['file_name'];
        } else {
            $img = "default.jpg";
        }
        $data = array(
            'report_image' => $img,
            'report_id' => $id,
        );
        $this->db->insert('report_images',$data);
        $insert_id = $this->db->insert_id();
        $json = array (
            'id' => $insert_id,
            'img' => base_url().'uploads/report_img/'.$img,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
    public function deleteReportImageById($id) {
        $this->db->where('id',$id);
        $this_lang = $this->db->get('report_images')->row();
        $old_url = $this_lang->report_image;
        if($old_url != "default.jpg"){
            unlink(FCPATH."uploads/report_img/".$old_url);
        }           
        $this->db->where('id',$id);
        $this->db->delete('report_images');
        $json = array (
             'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
    public function updateReportImageById($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('report_images', $data);
    }
}