<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "customer/home_controller";
$route['404_override'] = '';

// Custom Route Customer
$route['home'] = 'customer/home_controller';
$route['about'] = 'customer/about_controller';
$route['resi'] = 'customer/resi_controller';
$route['testimoni'] = 'customer/testimoni_controller';
$route['contact'] = 'customer/contact_controller';
$route['list'] = 'customer/list_controller';


// Constant URL
define('ADMIN_URL', 'admin1234');

// Custom Route Admin
$route[ADMIN_URL] = 'admin/login_controller';

// Admin login
$route[ADMIN_URL . '/login'] = 'admin/login_controller/do_login';

// Admin page
$route[ADMIN_URL . '/home'] = 'admin/home_controller';
$route[ADMIN_URL . '/product'] = 'admin/product_controller';
$route[ADMIN_URL . '/resi'] = 'admin/resi_controller';
$route[ADMIN_URL . '/testimoni'] = 'admin/testimoni_controller';

// HOME
$route[ADMIN_URL . '/home/upload-slideshow'] = 'admin/home_controller/upload_slideshow';
$route[ADMIN_URL . '/home/delete-slideshow'] = 'admin/home_controller/delete_slideshow';


// PRODUK
$route[ADMIN_URL . '/product/add-product'] = 'admin/product_controller/insert_product';
$route[ADMIN_URL . '/product/edit-product'] = 'admin/product_controller/update_product';
$route[ADMIN_URL . '/product/delete-product'] = 'admin/product_controller/delete_product';


// RESI
$route[ADMIN_URL . '/resi/manage-resi'] = 'admin/resi_controller/update_resi';


// TESTIMONI
$route[ADMIN_URL . '/testimoni/add-testimoni'] = 'admin/testimoni_controller/insert_testimoni';
$route[ADMIN_URL . '/testimoni/edit-testimoni'] = 'admin/testimoni_controller/update_testimoni';
$route[ADMIN_URL . '/testimoni/delete-testimoni'] = 'admin/testimoni_controller/delete_testimoni';


// Admin logout
$route[ADMIN_URL . '/logout'] = 'admin/logout_controller/logout';


/* End of file routes.php */
/* Location: ./application/config/routes.php */