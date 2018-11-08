<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Admin
$route['admin'] = 'Admin/index';
$route['officer'] = 'Officer/index';

// user
$route['index'] = 'Main/index';
$route['history'] = 'Main/history';
$route['authorities'] = 'Main/authorities';
$route['news'] = 'Main/news';
$route['activity'] = 'Main/activity';
$route['history'] = 'Main/history';
$route['product'] = 'Main/product';










$route['register'] = 'Main/register';








$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
