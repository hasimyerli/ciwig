<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = "Home";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$prefix = 'application/controllers';

#front
include $prefix.'/Front/Config/route.php';
