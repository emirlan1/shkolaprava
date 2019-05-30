<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_forum_index_control extends CI_Controller {
    
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
    public function forum(){
        $f_id = '1767351836634476';
        $f_secret = '2155fa9c40693e97f65e59a6e40bd40d';
        $f_url = 'http://urist.kg/U_forum_index_control/facebook_login';
        


        
        
        
  

        $for_facebook_url = 'https://www.facebook.com/dialog/oauth';
        $f_params = array(
            'client_id'     => $f_secret,
            'redirect_uri'  => $f_url,
            'response_type' => 'code',
            'scope'         => 'email,user_birthday'
        );


        
        
        
        
      
        
       // echo $f_link = '<p><a href="' . $for_facebook_url . '?' . urldecode(http_build_query($f_params)) . '">Аутентификация через Facebook</a></p>';
        
        $this->load->model('U_forum_model');
        $all_cats = $this->U_forum_model->getCategories()->result_array();
        $i=0;
        foreach($all_cats as $row){
            $id = $row['id'];
            $all_cats[$i]['themes'] = $this->U_forum_model->getThemesById($id)->result_array();
            $i++;
        }
        $mass = array( 
            'cats'=>$all_cats,
            'csrf_hash' => $this->_csrf['hash'],
         );
  
        $this->load->view('u_forum_index',$mass);
    }
    public function search_themes(){
        $this->load->model('U_forum_model');
        $id = $this->input->post('search');
        $themes = $this->U_forum_model->search_themes($id);        
        $new_html = '';
        foreach($themes as $row){
             $new_html .= '<tr><th scope="row"><div><i class="fa fa-chevron-up"></i></div><div class="d-flex justify-content-center">'.$row['likes'].'</div><div><i class="fa fa-chevron-down"></i></div></th><td><a href='.base_url().'/theme/'.$row['id'].'><p class="mt-2">'.$row['theme_name'].'</p></a></td><td class="d-sm-none d-md-block d-none d-xs-block"><p class="mt-2 d-flex justify-content-center">'.$row['theme_date'].'</p></td><td><div class="d-flex justify-content-center mt-2">'.$row['comments'].'</div></td><td><div class="d-flex justify-content-center mt-2"><div><i class="fa fa-eye"></i></div><div class="ml-2">'.$row['views'].'</div></div></td></tr>';
        };
        $html = '<div class="container-fluid pill-border pl-3 mb-2 pb-2 bg-panel"><i class="fa fa-newspaper-o mt-2" style="font-size:2.3vw;color:red"></i><div class="title">Поиск</div></div><table class="table table-hover pill-border"><thead><tr><th scope="col">#</th><th scope="col">Название категории</th><th scope="col" class="d-sm-none d-md-block d-none d-xs-block">Посл.сообщение</th><th scope="col">Коммент</th><th scope="col">Просмотры</th></tr></thead><tbody>'.$new_html.'</tbody>';
        $mass = array(
            'html' => $html,
            'csrf_hash' => $this->_csrf['hash']
        );
        echo $massiv_json = json_encode($mass);
    }
    public function commentsLoadMore(){
        $this->load->model('U_forum_model');
        $offset = $this->input->post('limit');
        $id = $this->input->post('theme');
        
        
        $themes = $this->U_forum_model->getThemeComments($id,$offset)->result_array();
             
        $i=0;
        foreach($themes as $row){
            $type_id = $row['id'];
            $all_comments_type = $this->U_forum_model->getCommentsType($type_id)->result_array();
            $themes[$i]['comments_type'] = $all_comments_type;
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
        <div class="row"><div class="col-md-2"><img src="'.$row['user_img'].'" class="img img-rounded img-fluid" /><p class="text-secondary text-center">'.date("m.d.y",$row['comment_date']).'</p></div><div class="col-md-10"><span><h4>'.$row['user_name'].'</h4></span><div class="clearfix"></div><p class="mt-4">'.$row['comment_text'].'</p><p><a class="float-right btn btn-outline-primary ml-2" href="#send" onClick="commentReply(this)" data-name="'.$row['user_name'].'" data-id="'.$row['id'].'"> <i class="fa fa-reply" href="#send" ></i> Ответить</a></p></div></div>'.$type_html.'</div>';
        };
        
        
        
        $mass = array(
            'html' => $new_html,
            'csrf_hash' => $this->_csrf['hash']
        );
        echo $massiv_json = json_encode($mass);
    }
    public function google_login(){
        $this->load->model('U_forum_model');
        $this->U_forum_model->google_login();
        //header("Location: ".$_SESSION['last_theme']);
        redirect(base_url($_SESSION['last_theme']));
    }
    public function facebook_login(){

        
        if (isset($_GET['code'])) {
            $result = false;

            $params = array(
                'client_id'     => $client_id,
                'redirect_uri'  => $redirect_uri,
                'client_secret' => $client_secret,
                'code'          => $_GET['code']
            );

            $url = 'https://graph.facebook.com/oauth/access_token';

            $tokenInfo = null;
            parse_str(file_get_contents($url . '?' . http_build_query($params)), $tokenInfo);

            if (count($tokenInfo) > 0 && isset($tokenInfo['access_token'])) {
                $params = array('access_token' => $tokenInfo['access_token']);

                $userInfo = json_decode(file_get_contents('https://graph.facebook.com/me' . '?' . urldecode(http_build_query($params))), true);

                if (isset($userInfo['id'])) {
                    $userInfo = $userInfo;
                    $result = true;
                }
            }
            if ($result) {
                echo "Социальный ID пользователя: " . $userInfo['id'] . '<br />';
                echo "Имя пользователя: " . $userInfo['name'] . '<br />';
                echo "Email: " . $userInfo['email'] . '<br />';
                echo "Ссылка на профиль пользователя: " . $userInfo['link'] . '<br />';
                echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
                echo "ДР: " . $userInfo['birthday'] . '<br />';
                echo '<img src="http://graph.facebook.com/' . $userInfo['id'] . '/picture?type=large" />'; echo "<br />";
            }
        }
        echo 'yyy';
        
        
        $this->load->view('facebook_login');
    }
    public function category($id){
        $this->load->model('U_forum_model');
        $all_cats = $this->U_forum_model->getOneCategory($id)->result_array();
        $all_themes = $this->U_forum_model->getAllThemes($id)->result_array();
        $all_categ = $this->U_forum_model->getCategories()->result_array();
        $mass = array('category'=>$all_cats,'themes'=>$all_themes,'cats'=>$all_categ,'csrf_hash' => $this->_csrf['hash']);
        $this->load->view('u_forum_category',$mass);
    }
    public function comment(){
        $this->load->model('U_forum_model');
        $text = $this->input->post('text');
        $id = $this->input->post('id');
        $com_id = $this->input->post('com_id');
        $this->db->where('id',$id);
        $this_theme = $this->db->get('themes')->result_array();
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
                   echo $this->U_forum_model->comment($text,$id,$com_id);
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
        //$themes = $this->U_forum_model->search_themes($id);  
    }
    public function theme($id){
        $g_url = 'http://urist.kg/U_forum_index_control/google_login';
        $client_id = '569959836120-5q6al7bsoa9jcni55e732u4peqd38a9i.apps.googleusercontent.com'; // Client ID
        $client_secret = '1xDyW31ynUTLVB3KPu8dVf-Y'; // Client secret
        //$redirect_uri = $full_url; // Redirect URI
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
        $this->load->model('U_forum_model');
        $one_themes = $this->U_forum_model->getOneTheme($id)->result_array();
        $comments = $this->U_forum_model->getThemeComments($id,$offset)->result_array();
        $all_cats = $this->U_forum_model->getCategories()->result_array();
        

        $i=0;
        foreach($comments as $row){
            $type_id = $row['id'];
            $all_comments_type = $this->U_forum_model->getCommentsType($type_id)->result_array();
            $comments[$i]['comments_type'] = $all_comments_type;
            $i++;
        }
//        echo "<pre>";
//            print_r($comments);
//        echo "</pre>";
        $mass = array(
            'theme'=>$one_themes,
            'comments'=>$comments,
            'cats'=>$all_cats,
            'csrf_hash' => $this->_csrf['hash'],
            'g_link'=>$g_link,
            'id'=>$id
        );
        $this->load->view('u_forum_theme',$mass);
    }
}