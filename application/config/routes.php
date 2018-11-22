<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'individualcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register_individual'] = 'individualcontroller/register_individual';
$route['donate_now'] = 'individualcontroller/donate_now';
