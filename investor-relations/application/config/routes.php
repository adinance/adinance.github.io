<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */

$route['default_controller']   = 'corporate_info';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

// short url
$route['home'] = 'corporate_info';
$route['bod']  = 'corporate_info/board_of_director';

// full url
/* 1. Corporate Info ------------------- */

$route['general-information']       = 'corporate_info/general_information';
$route['vision-mission-core-value'] = 'corporate_info/vision_mission_core_value';
$route['company-s-history']         = 'corporate_info/company_s_history';
$route['business-overview']         = 'corporate_info/business_overview';
$route['message-from-ceo-and-coo']  = 'corporate_info/message_from_ceo_and_coo';
$route['company-structure']         = 'corporate_info/company_structure';
$route['organization-chart']        = 'corporate_info/organization_chart';
$route['board-of-director']         = 'corporate_info/board_of_director';
$route['management-team']           = 'corporate_info/management_team';
$route['awards']                    = 'corporate_info/awards';

/* 2.Financial Info ---------------------------------------- */
$route['highlights']            = 'financial/highlights';
$route['statements']            = 'financial/statements';
$route['management_discussion'] = 'financial/management_discussion';

/* 3. Stock Info ------------------ */
$route['stock'] = 'stock_info/index'; // done.

/* 4. Shareholder Info ------------------------------------------------ */
$route['major_shareholder']                     = 'shareholder/major_shareholder';
$route['invitation']                            = 'shareholder/invitation';
$route['resolutions']                           = 'shareholder/resolutions';
$route['the-minutes-of-annaul-general-meeting'] = 'shareholder/the_minutes_of_annaul_general_meeting';
$route['dividen_policy']                        = 'shareholder/dividen_policy';
$route['newly_issued_ordinary_shares']          = 'shareholder/newly_issued_ordinary_shares';

/* 5. News Room --------------- */
$route['set-annoucements'] = "#";
$route['pr']               = '#';
$route['news-cliping']     = '#';
$route['calendar']         = '#';

/* 6. Publications ----------------------------------------- */
$route['annual_report']              = 'publications/annual_report';
$route['company_factsheet']          = 'publications/company_factsheet';
$route['analyst_coverage']           = 'publications/analyst_coverage';
$route['presentations_and_webcasts'] = 'publications/presentations_and_webcasts';

/* 7. Corporate Governance ---------------------------------------- */
$route['policy']         = 'corporate_governance/policy';
$route['whistleblowing'] = 'corporate_governance/whistleblowing_form';

/* 8. Sustainability ----- */
$route['sustainability']    = 'sustainability';
$route['overview']    = '#';
$route['economy']     = '#';
$route['environment'] = '#';
$route['social']      = '#';

/* 9. Info Request ---------------------------- */
$route['contact']   = 'info_request/ir_contact';
$route['subscribe'] = 'info_request/email_alerts';