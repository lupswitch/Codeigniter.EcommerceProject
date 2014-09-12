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

$route['default_controller'] = "front/index";
$route['404_override'] = '';
$route['mensaje'] = "front/mensaje";
$route['exito'] = "front/exito";
$route['empty_cart'] = "front/empty_cart";
$route['empty_cart/(:any)'] = "front/empty_cart";
$route['contact'] = "front/contact";
$route['contact/(:any)'] = "front/contact";
$route['services'] = "front/services";
$route['services/(:any)'] = "front/services";
$route['category/(:any)'] = "front/category";
$route['details/(:any)'] = "front/details";
$route['buy/(:any)'] = "front/buy";
$route['empty']="front/home";
$route['cart/(:any)'] = "front/cart";
$route['cart'] = "front/cart";
$route['checkout'] = "front/checkout";
$route['order_step2'] = "front/order_step2";
$route['login'] = "front/login";
$route['login/(:any)'] = "front/login";
$route['signout'] = "front/signout";
$route['register'] = "front/register";
$route['register(:any)'] = "front/register";
$route['account'] = "front/account";
$route['confirm'] = "front/confirm";
$route['admin']="admin";

/* End of file routes.php */
/* Location: ./application/config/routes.php */