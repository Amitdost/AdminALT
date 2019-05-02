<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Poetry/welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// Admin



$route['admin']                = 'Admin/Login/index';
$route['admin/logout']         = 'Admin/Login/logout';


$route['admin/dashboard']      = 'Admin/Admin/dashboard';


$route['admin/profile']        = 'Admin/Setting/user_profile';

$route['admin/role-list']               = 'Admin/Role/index';
$route['admin/role-list/(:num)']        = 'Admin/Role/index/$1';
$route['admin/add-role']     	 	    = 'Admin/Role/addRole';
$route['admin/edit-role/(:num)']    	= "Admin/Role/editRole/$1";
