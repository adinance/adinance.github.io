<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Language {

    function switch($language = "") {
        $ci = &get_instance();

        $language = ($language != "") ? $language : "english";

        $ci->session->set_userdata('lang', $language);
        $ss_lang = $ci->session->lang;
        $ci->lang->load('message', $ss_lang);
      

        $ci->session->set_userdata('corporate_info', $ci->lang->line('corporate_info'));
        $ci->session->set_userdata('general_information', $ci->lang->line('general_information'));
        $ci->session->set_userdata('vision_mission_core_value', $ci->lang->line('vision_mission_core_value'));
        $ci->session->set_userdata('company_s_history', $ci->lang->line('company_s_history'));
        $ci->session->set_userdata('business_overview', $ci->lang->line('business_overview'));
        $ci->session->set_userdata('message_from_ceo_and_coo', $ci->lang->line('message_from_ceo_and_coo'));
        $ci->session->set_userdata('company_structure', $ci->lang->line('company_structure'));
        $ci->session->set_userdata('organization_chart', $ci->lang->line('organization_chart'));
        $ci->session->set_userdata('board_of_director', $ci->lang->line('board_of_director'));
        $ci->session->set_userdata('management_team', $ci->lang->line('management_team'));
        $ci->session->set_userdata('awards', $ci->lang->line('awards'));

        $ci->session->set_userdata('financial_info', $ci->lang->line('financial_info'));
        $ci->session->set_userdata('financial_highlight', $ci->lang->line('financial_highlight'));
        $ci->session->set_userdata('financial_statement', $ci->lang->line('financial_statement'));
        $ci->session->set_userdata('md_and_a', $ci->lang->line('md_and_a'));
        $ci->session->set_userdata('management_discussion_and_analysis', $ci->lang->line('management_discussion_and_analysis'));
        $ci->session->set_userdata('form_56_1', $ci->lang->line('form_56_1'));

        $ci->session->set_userdata('stock_info', $ci->lang->line('stock_info'));
        $ci->session->set_userdata('stock_qoute', $ci->lang->line('stock_qoute'));
        $ci->session->set_userdata('historical_price', $ci->lang->line('historical_price'));
        
        $ci->session->set_userdata('shareholder_info', $ci->lang->line('shareholder_info'));
        $ci->session->set_userdata('major_shareholder', $ci->lang->line('major_shareholder'));
        $ci->session->set_userdata('shareholder_s_meeting', $ci->lang->line('shareholder_s_meeting'));
        $ci->session->set_userdata('invitation', $ci->lang->line('invitation'));
        $ci->session->set_userdata('the_resolutions', $ci->lang->line('the_resolutions'));
        $ci->session->set_userdata('the_minutes_of_annual_general_meeting', $ci->lang->line('the_minutes_of_annual_general_meeting'));
        $ci->session->set_userdata('dividen_policy_and_payment', $ci->lang->line('dividen_policy_and_payment'));
        $ci->session->set_userdata('dividen_policy_and_payment_text', $ci->lang->line('dividen_policy_and_payment_text'));
        $ci->session->set_userdata('newly_issued_ordinary_shares', $ci->lang->line('newly_issued_ordinary_shares'));

        $ci->session->set_userdata('news_room', $ci->lang->line('news_room'));
        $ci->session->set_userdata('set_annoucements', $ci->lang->line('set_annoucements'));
        $ci->session->set_userdata('press_releases', $ci->lang->line('press_releases'));
        $ci->session->set_userdata('news_clipping', $ci->lang->line('news_clipping'));
        $ci->session->set_userdata('ir_calendar', $ci->lang->line('ir_calendar'));

        $ci->session->set_userdata('publications', $ci->lang->line('publications'));
        $ci->session->set_userdata('annual_report', $ci->lang->line('annual_report'));
        $ci->session->set_userdata('company_factsheet', $ci->lang->line('company_factsheet'));
        $ci->session->set_userdata('presentations_and_webcasts', $ci->lang->line('presentations_and_webcasts'));
        $ci->session->set_userdata('analyst_coverage', $ci->lang->line('analyst_coverage'));

        $ci->session->set_userdata('corporate_governance', $ci->lang->line('corporate_governance'));
        $ci->session->set_userdata('policy', $ci->lang->line('policy'));
        $ci->session->set_userdata('whistleblowing_form', $ci->lang->line('whistleblowing_form'));

        $ci->session->set_userdata('sustainability', $ci->lang->line('sustainability'));
        $ci->session->set_userdata('overview', $ci->lang->line('overview'));
        $ci->session->set_userdata('economy', $ci->lang->line('economy'));
        $ci->session->set_userdata('environment', $ci->lang->line('environment'));
        $ci->session->set_userdata('social', $ci->lang->line('social'));

        $ci->session->set_userdata('info_request', $ci->lang->line('info_request'));
        $ci->session->set_userdata('ir_contact', $ci->lang->line('ir_contact'));
        $ci->session->set_userdata('email_alerts', $ci->lang->line('email_alerts'));

        $ci->session->set_userdata('go_to_corporate', $ci->lang->line('go_to_corporate'));
        $ci->session->set_userdata('go_to_investor_relations', $ci->lang->line('go_to_investor_relations'));
        $ci->session->set_userdata('switch_lang', $ci->lang->line('switch_lang'));

        $ci->session->set_userdata('subscribe_btn', $ci->lang->line('subscribe_btn'));
        $ci->session->set_userdata('subscribe_text', $ci->lang->line('subscribe_text'));

        $ci->session->set_userdata('address', $ci->lang->line('address'));

        $ci->session->set_userdata('policy_topic', $ci->lang->line('policy_topic'));
        $ci->session->set_userdata('policy_text', $ci->lang->line('policy_text'));

        $ci->session->set_userdata('search', $ci->lang->line('search'));
        $ci->session->set_userdata('showing', $ci->lang->line('showing'));
        $ci->session->set_userdata('entries', $ci->lang->line('entries'));

        $ci->session->set_userdata('year', $ci->lang->line('year'));
        $ci->session->set_userdata('q1', $ci->lang->line('q1'));
        $ci->session->set_userdata('q2', $ci->lang->line('q2'));
        $ci->session->set_userdata('q3', $ci->lang->line('q3'));
        $ci->session->set_userdata('q4', $ci->lang->line('q4'));

        $ci->session->set_userdata('title', $ci->lang->line('title'));
        $ci->session->set_userdata('file', $ci->lang->line('file'));


          // $lang['subscribe_text']  = $ci->lang->line('subscribe_text');
           // return $lang;
     
    }

}