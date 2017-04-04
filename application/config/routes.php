<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'modern';
$route['admin'] = 'modern/admin';
$route['sign-up'] = 'modern/show_sign_up_page';
$route['sign-in'] = 'modern/show_sign_in_page';
$route['register-depositor'] = 'modern/show_depositor_register_page';
//$route['(:any)'] = 'jedupa/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



/********* Init App **********/
$route['api/init-app'] = 'modern/initApp';

/********** User API **********/
$route['api/get-users'] = 'user/getDepositors';
$route['api/get-user'] = 'user/getUser';
$route['api/update-user'] = 'user/updateUser';
$route['api/update-profile-picture'] = 'user/updateProfilePicture'; 
$route['api/update-account-details'] = 'user/updateAccountDetails'; 
$route['api/update-password'] = 'user/updatePassword'; 
$route['api/add-depositor'] = 'user/insertDepositor'; 
$route['api/get-depositor'] = 'user/getDepositor';

/********* Donation APIs *********/
$route['api/add-donation'] = 'donation/addDonation'; 
$route['api/get-donations'] = 'donation/getDonations';
$route['api/get-donation'] = 'donation/getDonation';

/********* Withdrawal APIs *********/
$route['api/add-withdrawal'] = 'withdrawal/addWithdrawal'; 
$route['api/get-withdrawals'] = 'withdrawal/getWithdrawals';
$route['api/get-withdrawal'] = 'withdrawal/getWithdrawal';