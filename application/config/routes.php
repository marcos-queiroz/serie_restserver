<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']            = 'welcome';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = TRUE;

$route["api/usuarios"]                  = "api/Usuarios";
$route["api/usuarios/(:num)"]           = "api/Usuarios";
//$route["api/usuarios/(:num)"]["put"]    = "api/Usuarios/id/$1";
//$route["api/usuarios/(:num)"]["delete"] = "api/Usuarios/id/$1";
