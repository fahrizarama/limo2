<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['produk/(:any)/detail'] = 'Produk/produk_detail/$1';
$route['gallery/(:any)/detail'] = 'Gallery/gallery_detail/$1';

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
