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

$route['default_controller']   = 'home';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

/* Corporate Info ------------------- */
$route['vision-mission-core-value'] = 'corporate_info/vision_mission_core_value';
$route['company-s-history']         = 'corporate_info/company_s_history';
$route['business-overview']         = 'corporate_info/business_overview';
$route['message-from-chairman']     = 'corporate_info/message_from_chairman';
$route['message-from-ceo-and-coo']  = 'corporate_info/message_from_ceo_and_coo';
$route['company-structure']         = 'corporate_info/company_structure';
$route['organization-chart']        = 'corporate_info/organization_chart';
$route['board-of-director']         = 'corporate_info/board_of_director';
$route['management-team']           = 'corporate_info/management_team';
$route['awards']                    = 'corporate_info/awards';

/* Financial Info ---------------------------------------- */
$route['financial-highlight']                = 'financial_information/financial_highlight';
$route['financial-statement']                = 'financial_information/financial_statement';
$route['management-discussion-and-analysis'] = 'financial_information/management_discussion_and_analysis';
$route['form-56-1']                          = 'financial_information/form_56_1';

/* Stock Info ------------------ */
$route['stock-quote']      = 'https://www.settrade.com/th/equities/quote/cmo/overview'; // done.
$route['historical-price'] = 'https://www.settrade.com/th/equities/quote/cmo/historical-trading'; // done.

/* Shareholder Info ------------------------------------------------ */
$route['general-information']                   = 'shareholder_info/general_information';
$route['major-shareholder']                     = 'shareholder_info/major_shareholder';
$route['shareholder-s-meeting']                 = 'shareholder_info/shareholder_s_meeting';
$route['invitation']                            = 'shareholder_info/invitation';
$route['the-resolutions']                       = 'shareholder_info/the_resolutions';
$route['the-minutes-of-annual-general-meeting'] = 'shareholder_info/the_minutes_of_annual_general_meeting';
$route['dividen-policy-and-payment']            = 'shareholder_info/dividen_policy_and_payment';
$route['newly-issued-ordinary-shares']          = 'shareholder_info/newly_issued_ordinary_shares';
$route['ir-calendar']                           = 'shareholder_info/ir_calendar';

/* Bondholder --------------- */
$route['bond-information']        = 'bondholder/bond_information';
$route['contact-for-bondholders'] = 'bondholder/contact_for_bondholders';

/* News Room --------------- */
$route['set-annoucements'] = 'news_room/set_annoucements';
$route['press-releases']   = 'news_room/press_releases';
$route['news-clipping']    = 'news_room/news_clipping';
$route['vdo-clip']         = 'news_room/vdo_clip';

/* Publications ----------------------------------------- */
$route['annual-report']              = 'publications/annual_report';
$route['presentations-and-webcasts'] = 'publications/presentations_and_webcasts';
$route['form-56-1']                  = 'publications/form_56_1';

/* Corporate Governance ---------------------------------------- */
$route['policy']              = 'corporate_governance/policy';
$route['whistleblowing-form'] = 'corporate_governance/whistleblowing_form';

/* Sustainability ----- */
$route['overview']    = 'sustainability/overview';
$route['economy']     = 'sustainability/economy';
$route['environment'] = 'sustainability/environment';
$route['social']      = 'sustainability/social';

/* Info Request ---------------------------- */
$route['ir-contact']   = 'info_request/ir_contact';
$route['email-alerts'] = 'info_request/email_alerts';
$route['faq']          = 'info_request/faq';

// short url
$route['pdpa']  = 'apps/pdpa';
$route['blank'] = 'corporate_info/blank';
$route['home']  = 'home';
$route['bod']   = 'corporate_info/board_of_director';