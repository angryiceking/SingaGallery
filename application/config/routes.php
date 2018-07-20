<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'EntryController';
$route['login'] = 'EntryController/login';
$route['gallery'] = 'InsideController/gallery';
$route['blogs'] = 'InsideController/blogs';
$route['events'] = 'InsideController/events';
$route['contact'] = 'InsideController/contact';
$route['about-us'] = 'InsideController/aboutus';
$route['404_override'] = '';

// APIS
$route['register'] = 'EntryController/register';
$route['login'] = 'EntryController/login';
$route['reset'] = 'EntryController/reset';
$route['trending'] = 'InsideController/trending';

// ADMIN
$route['admin'] = 'AdminController';
$route['admin/dash'] = 'AdminController/dash';
$route['admin/login'] = 'AdminController/login';
// $route['admin/event'] = 'AdminController/event';

// ADMIN CRUD
$route['admin/(:any)/add'] = 'AdminAPIController/add/$1';
$route['admin/(:any)/edit'] = 'AdminAPIController/edit/$1';
$route['admin/(:any)/archive'] = 'AdminAPIController/archive/$1';

// USER
$route['potrait/add'] = 'InsideController/add_potrait';
$route['potrait/add_to_cart'] = 'InsideController/potrait_add_to_cart';
$route['potrait/like'] = 'InsideController/potrait_add_to_liked';
$route['potrait/comment'] = 'InsideController/potrait_add_comment';

// GALLERY FUNCTIONS
$route['gallery/art/comment'] = 'GalleryController/comment';
$route['gallery/art/like'] = 'GalleryController/like';
$route['gallery/art/unlike'] = 'GalleryController/unlike';
$route['gallery/comments/(:any)'] = 'GalleryController/get/$1';
$route['gallery/likes/(:any)'] = 'GalleryController/get_likes/$1';
$route['gallery/check_like'] = 'GalleryController/check_if_liked';