<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_consult_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function getConsult(){
        $con = $this->db->get('consult');
        return $con;
    }   
    public function getCommentsTheme($id){
        $this->db->where('id',$id);
        $query = $this->db->get('consult');
        return $query;
    }
    public function getThemeComments($offset){
        $this->db->where('comment_type','0');
        $query = $this->db->get('consult_com','10',$offset);
        return $query;
    }
    public function getCommentsType($id){
        $this->db->where('comment_type',$id);
        $query = $this->db->get('consult_com');
        return $query;
    }
    public function comment($text,$id,$com_id){
        $data = array(
            'comment_text' => $text, 
            'user_name' => $_SESSION['name'],
            'user_email' => $_SESSION['email'],
            'consult_id' => $id,
            'comment_date' => time(),
            'user_img' => $_SESSION['picture'],
            'comment_type' => $com_id   
            
        );
        $this->db->where('consult_id', $id);
        $this->db->insert('consult_com',$data);
        if($com_id != '0'){
            $error = 4;
            $this->db->where('id',$com_id);
            $answer = $this->db->get('consult_com')->result_array();
            $answer_name = $answer[0]['user_name'];
        }
        else{
            $error = 0;
            $answer_name = '';
        }
        $json = array(
            'text' => $text,
            'csrf_hash' => $this->security->get_csrf_hash(),
            'user_name' => $_SESSION['name'],
            'user_email' => $_SESSION['email'],
            'user_pic' => $_SESSION['picture'],
            'comment_type' => '0',
            'answer_name' => $answer_name,
            'error' => $error
        );
        echo json_encode($json);
        
    }
    public function google_login(){
        $full_url = 'http://urist.kg/U_consult_control/google_login';
        $client_id = '569959836120-5q6al7bsoa9jcni55e732u4peqd38a9i.apps.googleusercontent.com'; // Client ID
        $client_secret = '1xDyW31ynUTLVB3KPu8dVf-Y'; // Client secret
        $redirect_uri = $full_url; // Redirect URI
        if (isset($_GET['code'])) {
            $result = false;

            $params = array(
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'redirect_uri'  => $redirect_uri,
                'grant_type'    => 'authorization_code',
                'code'          => $_GET['code']
            );

            $url = 'https://accounts.google.com/o/oauth2/token';
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            curl_close($curl);

            $tokenInfo = json_decode($result, true);
            
            
            if (isset($tokenInfo['access_token'])) {
                $params['access_token'] = $tokenInfo['access_token'];

                $userInfo = json_decode(file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo' . '?' . urldecode(http_build_query($params))), true);
                if (isset($userInfo['id'])) {
                    $userInfo = $userInfo;
                    $result = true;
                    $this->session->set_userdata($userInfo);
                    $this->session->set_userdata('user',1);
                }
            }
        }
        return $userInfo;
    }
}