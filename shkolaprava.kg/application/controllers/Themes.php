<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('themes_model');
        $this->load->model('comments_model');
    }
    public function Index($category_id) {
        $data = array(
            'categories' => $this->categories_model->getCategories(),
            'themes' => $this->themes_model->getThemesByCategoryId($category_id),
            'first_theme' => $this->themes_model->getFirstTheme(),
            'csrf_hash' => $this->security->get_csrf_hash(),

            // current_id нужен для того, чтобы обвести текущую категорию в чёрный квадратик
            'current_id' => $category_id
        );
        $this->load->view('themes', $data);
    }
    public function One_theme($theme_id) {
        // $views - беру количество текущих просмотров и прибавляю единицу.

        $views = $this->themes_model->getViewsById($theme_id);
        $data_themes = array(
            'views' => $views + 1
        );
        $this->themes_model->updateThemeById($theme_id, $data_themes);
        $comments = $this->comments_model->getCommentsByThemeIdArray($theme_id);
        
        $i=0;
        foreach($comments as $row){
            $type_id = $row['id'];
            $all_comments_type = $this->comments_model->getCommentsType($type_id)->result_array();
            $comments[$i]['comments_type'] = $all_comments_type;
            $i++;
        }
        $one_theme = array (
            'categories' => $this->categories_model->getCategories(),
            'one_theme' => $this->themes_model->getOneThemeById($theme_id),
            'comments' => $comments,
            'csrf_hash' => $this->security->get_csrf_hash(),
            "theme_id" => $theme_id
        );
        $this->load->view('one_theme', $one_theme);
    }

    public function search_themes() {
        $theme_name = $this->input->post('theme_name');
        $themes = $this->themes_model->searchThemesByThemeName($theme_name);
        $html = '<h3>Результаты по поиску ' . $theme_name . '</h3>';

        foreach ($themes as $theme) {
            $html .= "<tbody><tr class='success'>
                    <td>
                        <a id='a_$theme->id' href='" . base_url() . "one_theme/$theme->id'>" . $theme->theme_name . "</a>
                    </td>
                    <td>
                        $theme->comments комментов
                    </td>
                    <td>
                        $theme->views просмотров
                    </td>
                    <td>
                        $theme->likes лайков
                    </td>
                 </tr></tbody>";
        }

        $json = array(
            'themes' => $html,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }

    public function search_themes_by_category_id() {
        $category_id = $this->input->post('category_id');
        $theme_name = $this->input->post('theme_name');
        $themes = $this->themes_model->searchThemesByThemeNameAndCategoryId($theme_name, $category_id);
        $html = '<h3>Результаты по поиску ' . $theme_name . '</h3>';

        foreach ($themes as $theme) {
            $html .= "<tbody><tr class='success'>
                    <td>
                        <a id='a_$theme->id' href='" . base_url() . "one_theme/$theme->id'>" . $theme->theme_name . "</a>
                    </td>
                    <td>
                        $theme->comments комментов
                    </td>
                    <td>
                        $theme->views просмотров
                    </td>
                    <td>
                        $theme->likes лайков
                    </td>
                 </tr></tbody>";
        }

        $json = array(
            'themes' => $html,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }

    public function Make_main() {
        $id = $this->input->post('id');

        $update_all = array(
            'main' => 0
        );

        $update_one = array(
            'main' => 1
        );


        $this->themes_model->makeMainById($id, $update_all, $update_one);

        $json = array (
            'success' => 'Эта тема сделана главной',
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }

    public function Sort_themes() {
        // $order_by приходит из data-order_by при клике на соответствующую кнопку
        $order_by = $this->input->post('order_by');

        $themes = $this->themes_model->sortThemes($order_by);
        $html = '';

        foreach ($themes as $theme) {

            $html .= "<tbody><tr class='success'>
                    <td>
                        <a id='a_$theme->id' href='" . base_url() . "one_theme/$theme->id'>" . $theme->theme_name . "</a>
                    </td>
                    <td>
                        $theme->comments комментов
                    </td>
                    <td>
                        $theme->views просмотров
                    </td>
                    <td>
                        $theme->likes лайков
                    </td>
                 </tr></tbody>";
        }

        $json = array(
            'themes' => $html,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
    public function Sort_themes_by_category_id() {

        // $order_by приходит из data-order_by при клике на соответствующую кнопку
        $order_by = $this->input->post('order_by');
        $category_id = $this->input->post('category_id');

        $themes = $this->themes_model->sortThemesByCategoryId($order_by, $category_id);
        $html = '';

        foreach ($themes as $theme) {
     
            $html .= "<tbody><tr class='success'>
                    <td>
                        <a id='a_$theme->id' href='" . base_url() . "one_theme/$theme->id'>" . $theme->theme_name . "</a>
                    </td>
                    <td>
                        $theme->comments комментов
                    </td>
                    <td>
                        $theme->views просмотров
                    </td>
                    <td>
                        $theme->likes лайков
                    </td>
                 </tr></tbody>";
        }

        $json = array(
            'themes' => $html,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
    public function insert_theme() {
        $theme_name = $this->input->post('theme_name');
        $theme_desc = $this->input->post('theme_desc');
        $category_id = $this->input->post('category_id');
        $data = array(
            'theme_name' => $theme_name,
            'theme_desc' => $theme_desc,
            'comments' => 0,
            'views' => 0,
            'likes' => 0,
            'theme_date' => date('d.m.Y'),
            'category_id' => $category_id
        );
        $this->themes_model->insertTheme($data);
        $insert_id = $this->db->insert_id();

        $json = array (
            'id' => $insert_id,
            'theme_name' => $theme_name,
            'theme_desc' => $theme_desc,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }

    public function delete_theme() {
        $id = $this->input->post('id');
        $this->comments_model->deleteCommentsByThemeId($id);
        $this->themes_model->deleteThemeById($id);

        $json = array(
            'id' => $id,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }

    public function update_theme() {
        $id = $this->input->post('id');
        $theme_name = $this->input->post('theme_name');
        $theme_desc = $this->input->post('theme_desc');
        $category_id = $this->input->post('category_id');
        $category_id = $category_id != null ? $category_id : 0;

        $data = array(
            'theme_name' => $theme_name,
            'theme_desc' => $theme_desc,
            'category_id' => $category_id
        );
        $this->themes_model->updateThemeById($id, $data);

        $json = array(
            'id' => $id,
            'theme_name' => $theme_name,
            'theme_desc' => $theme_desc,
            'category_id' => $category_id,
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        echo json_encode($json);
    }
}