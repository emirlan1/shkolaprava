<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_consult_control extends CI_Controller {
    
    public $_csrf = null;
    public function __construct() {
        parent::__construct();
//        
//        $this->load->model('themes_model');
//        $this->load->model('comments_model');
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
    public function google_login(){
        $this->load->model('U_consult_model');
        $this->U_consult_model->google_login();
        //header("Location: ".$_SESSION['last_theme']);
        redirect(base_url('advice'));
    }
    public function commentsLoadMore(){
        $this->load->model('U_consult_model');
        $offset = $this->input->post('limit');
       // $id = $this->input->post('theme');
        
        
        $themes = $this->U_consult_model->getThemeComments($offset)->result_array();
             
        $i=0;
        foreach($themes as $row){
            $type_id = $row['id'];
            $theme_id = $row['consult_id'];
            $all_comments_type = $this->U_consult_model->getCommentsType($type_id)->result_array();
            $consult_theme = $this->U_consult_model->getCommentsTheme($theme_id)->result_array();
            $themes[$i]['comments_type'] = $all_comments_type;
            $themes[$i]['theme_name'] = $consult_theme['0']['name'];
            $i++;
        }
        
        $new_html = '';
        $type_html = '';
        foreach($themes as $row){
            
        $comments_type = $row['comments_type'];
            
        foreach($comments_type as $zow){
            $type_html .= '<div class="card card-inner"><div class="card-body"><div class="row"><div class="col-md-2"><img src="'.$zow['user_img'].'" class="img img-rounded img-fluid" /><p class="text-secondary text-center">'.date("m.d.y",$zow['comment_date']).'</p></div><div class="col-md-10"><span><a class="float-left" href="#">'.$zow['user_name'].'</a></span><span><i class="fa fa-angle-right ml-2 fa-lg"></i></span><span><strong>'.$row['user_name'].'</strong></span><p class="mt-4">'.$zow['comment_text'].'</p></div></div></div></div>';  
        };           
                                           
        $new_html .='<div class="card-body">   
        <div class="row"><div class="col-md-2"><img src="'.$row['user_img'].'" class="img img-rounded img-fluid" /><p class="text-secondary text-center">'.date("m.d.y",$row['comment_date']).'</p></div><div class="col-md-10"><span><h5>'.$row['theme_name'].'</h5></span><br><span><h4>'.$row['user_name'].'</h4></span><div class="clearfix"></div><p class="mt-4">'.$row['comment_text'].'</p><p><a class="float-right btn btn-outline-primary ml-2" href="#send" onClick="commentReply(this)" data-name="'.$row['user_name'].'" data-id="'.$row['id'].'"> <i class="fa fa-reply" href="#send" ></i> Ответить</a></p></div></div>'.$type_html.'</div>';
        };
        
        
        
        $mass = array(
            'html' => $new_html,
            'csrf_hash' => $this->_csrf['hash']
        );
        echo $massiv_json = json_encode($mass);
    }
    public function comment(){
        $this->load->model('U_consult_model');
        $text = $this->input->post('text');
        $com_id = $this->input->post('com_id');
        $id = $this->input->post('radio');
        $this->db->where('id',$id);
        $this_theme = $this->db->get('consult')->result_array();
        if(isset($this_theme[0])){
            if($text){
                  if(strlen($text) > 20000){
                        $mass = array(
                        'error' => 3,
                        'csrf_hash' => $this->_csrf['hash']
                    );
                    echo $massiv_json = json_encode($mass);
                  }
                else{
                    echo $this->U_consult_model->comment($text,$id,$com_id);
                }
            }
            else{
                $mass = array(
                    'error' => 2,
                    'csrf_hash' => $this->_csrf['hash']
                );
                echo $massiv_json = json_encode($mass);
            }
        }
        else{
            $mass = array(
                'error' => 1,
                'csrf_hash' => $this->_csrf['hash']
            );
            echo $massiv_json = json_encode($mass);
        }
    }
    public function consult(){
        $g_url = 'http://urist.kg/U_consult_control/google_login';
        $client_id = '569959836120-5q6al7bsoa9jcni55e732u4peqd38a9i.apps.googleusercontent.com'; // Client ID
        $client_secret = '1xDyW31ynUTLVB3KPu8dVf-Y'; // Client secret
        $for_google_url = 'https://accounts.google.com/o/oauth2/auth';
        
        
        
        $g_params = array(
            'redirect_uri'  => $g_url,
            'response_type' => 'code',
            'client_id'     => $client_id,
            'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
        );
        $g_link = '' . $for_google_url . '?' . urldecode(http_build_query($g_params)) . '';
        $this->session->set_userdata('last_theme',$_SERVER['REQUEST_URI']);
        $offset = 0;
        $this->load->model('U_consult_model');
        $comments = $this->U_consult_model->getThemeComments($offset)->result_array();
        $all_consult = $this->U_consult_model->getConsult()->result_array();
        

        $i=0;
        foreach($comments as $row){
            $type_id = $row['id'];
            $theme_id = $row['consult_id'];
            $all_comments_type = $this->U_consult_model->getCommentsType($type_id)->result_array();
            $consult_theme = $this->U_consult_model->getCommentsTheme($theme_id)->result_array();
            $comments[$i]['comments_type'] = $all_comments_type;
            $comments[$i]['theme_name'] = $consult_theme['0']['name'];
            $i++;
        }
        $mass = array(
            'comments'=>$comments,
            'csrf_hash' => $this->_csrf['hash'],
            'g_link'=>$g_link,
            'consult' => $all_consult,
        );
        $this->load->view('u_consult',$mass);
    }
    
}