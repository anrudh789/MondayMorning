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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['sign-up'] = 'signup/Signup/reg_form_save';
$route['email-ajax-check'] = 'signup/Signup/email_exsist_check';
$route['user-verification/(:any)'] = 'signup/Signup/user_email_verify';
//$route['caf-one']='caf/Caf/caf_one';
//$route['step-one']='caf/Caf/step_one_save';
//$route['caf-two']='caf/Caf/caf_two';
//
//$route['caf-three']='caf/Caf/caf_three';
$route['faq']='web/Web/faq';
//$route['caf-four']='caf/Caf/caf_four';
//$route['step-four']='caf/Caf/step_four_save';
$route['review-caf']='caf/Caf/final_before_step';
$route['review-save']='caf/Caf/final_step';
$route['thank-you']='caf/Caf/thankyou';
$route['signup-fb']='signup/Signup/sign_fb_save';
$route['signup-linkendin']='signup/Signup/sign_inkendin_save';
$route['register']='web/Web/register';
////webpages routing///////
$route['about-us']='web/Web/aboutus';
$route['contact-us']='web/Web/contactus';
////webpages routing///////
$route['admin-login'] = "admin/Admin/login";
$route['admin']='admin/Admin';
$route['admin-dashboard']='admindashboard/Admindashboard/dashboard';
$route['admin-logout']='admin/Admin/logout';
$route['user']='userlogin/Userlogin/login';
$route['user-logout']='userlogin/Userlogin/logout';
$route['user-dashboard']='userdashboard/Userdashboard/dashboard';
$route['how-it-works']='web/Web/howitwork';
$route['testimonials']='web/Web/testimonials';
$route['forget']='web/Web/forget';
$route['update-profile']='userdashboard/Userdashboard/user_profile_update';
$route['fill-state-dd']='userdashboard/Userdashboard/fill_state_dropdown';
$route['fill-city-dd']='userdashboard/Userdashboard/fill_city_dd';
$route['education-update']='userdashboard/Userdashboard/education_update';
$route['work-exp-update']='userdashboard/Userdashboard/work_experience_update';
$route['mm-profile']='userdashboard/Userdashboard/mm_user_profile';
$route['caf-profile']='userdashboard/Userdashboard/caf_profile';
$route['step-two']='userdashboard/Userdashboard/step_two_save';
$route['step-three']='userdashboard/Userdashboard/step_three_save';
$route['step-four']='userdashboard/Userdashboard/step_four_save';
$route['step-five']='userdashboard/Userdashboard/step_five_save';
$route['blog']='web/Web/blog';
$route['blog-detail/(:any)']='web/Web/blog_detail';
$route['registered-user']='admindashboard/Admindashboard/reg_user';
$route['caf-user']='admindashboard/Admindashboard/caf_user';
$route['edit-ajax-user']='userdashboard/Userdashboard/user_data_edit';	
$route['assignment']='assignment/Assignment/asignments_level';
$route['start-assignment']='assignment/Assignment/asignment_start';

$route['xls-upload']='assignment/Assignment/xls_upload_ajax';
$route['doc-upload']='assignment/Assignment/doc_upload_ajax';
$route['ppt-upload']='assignment/Assignment/ppt_upload_ajax';
$route['start-timer']='assignment/Assignment/start_timer';
$route['count-file']='assignment/Assignment/count_uploaded_files';
$route['update-count-file']='assignment/Assignment/count_update_files';
$route['update-done-status']='assignment/Assignment/update_done_status';
$route['page-show']='assignment/Assignment/go_to_screen';
//###### code by ravi #########
$route['invite']='invite/Invite';
$route['invite-send']='invite/Invite/invite_form_data';
$route['message-us']='web/Web/contact_data';

//###### code by ravi #########
