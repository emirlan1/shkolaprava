<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'U_index_control';

$route['themes/(:num)'] = 'themes/index/$1';

$route['one_theme/(:num)'] = 'themes/one_theme/$1';
$route['one_new/(:num)'] = 'news/one_new/$1';
$route['one_report/(:num)'] = 'reports/one_report/$1';
$route['one_lawyer/(:num)'] = 'lawyers/one_lawyer/$1';

$route['update_lawyer/(:num)'] = 'lawyers/update_lawyer/$1';
$route['update_lawyer_process'] = 'lawyers/update_lawyer_process';

$route['pdf_category'] = 'pdf_file/pdf_cats';
$route['pdf_category_files'] = 'pdf_file/pdf_one_cats';

$route['categories'] = 'categories/index';
$route['lawyers'] = 'lawyers/index';
$route['news'] = 'news/index';
$route['reports'] = 'reports/index';
$route['themes'] = 'themes/index';
$route['admin'] = 'admins/index';
$route['app'] = 'zav/index';



$route['start'] = 'Start_control/index';



$route['forum'] = 'U_forum_index_control/forum';
$route['analytics'] = 'U_lib_control/library';
$route['projects'] = 'U_project_control/projects';
$route['theme/(:num)'] = 'U_forum_index_control/theme/$1';
$route['category/(:num)'] = 'U_forum_index_control/category/$1';
$route['item/(:num)'] = 'U_index_control/one_news/$1';
$route['about'] = 'U_index_control/about';
$route['advice'] = 'U_consult_control/consult';
$route['about/(:num)'] = 'U_index_control/about_one/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;