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
        $ci->session->set_userdata('message_from_chairman', $ci->lang->line('message_from_chairman'));
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
        $ci->session->set_userdata('direct_and_indirect_shares_holded_by_directors_and_executive', $ci->lang->line('direct_and_indirect_shares_holded_by_directors_and_executive'));
        $ci->session->set_userdata('newly_issued_ordinary_shares', $ci->lang->line('newly_issued_ordinary_shares'));

        $ci->session->set_userdata('bondholder', $ci->lang->line('bondholder'));
        $ci->session->set_userdata('bond_information', $ci->lang->line('bond_information'));
        $ci->session->set_userdata('contact_for_bondholders', $ci->lang->line('contact_for_bondholders'));

        $ci->session->set_userdata('news_room', $ci->lang->line('news_room'));
        $ci->session->set_userdata('set_annoucements', $ci->lang->line('set_annoucements'));
        $ci->session->set_userdata('press_releases', $ci->lang->line('press_releases'));
        $ci->session->set_userdata('news_clipping', $ci->lang->line('news_clipping'));
        $ci->session->set_userdata('ir_calendar', $ci->lang->line('ir_calendar'));
        $ci->session->set_userdata('vdo_clip', $ci->lang->line('vdo_clip'));

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
        $ci->session->set_userdata('faq', $ci->lang->line('faq'));

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

        $ci->session->set_userdata('msg_ceo_paragragh_1', $ci->lang->line('msg_ceo_paragragh_1'));
        $ci->session->set_userdata('msg_ceo_paragragh_2', $ci->lang->line('msg_ceo_paragragh_2'));
        $ci->session->set_userdata('msg_ceo_paragragh_3', $ci->lang->line('msg_ceo_paragragh_3'));
        $ci->session->set_userdata('msg_ceo_paragragh_4', $ci->lang->line('msg_ceo_paragragh_4'));
        $ci->session->set_userdata('msg_ceo_paragragh_5', $ci->lang->line('msg_ceo_paragragh_5'));
        $ci->session->set_userdata('msg_ceo_paragragh_6', $ci->lang->line('msg_ceo_paragragh_6'));

        $ci->session->set_userdata('msg_ceo_name_1', $ci->lang->line('msg_ceo_name_1'));
        $ci->session->set_userdata('msg_ceo_name_2', $ci->lang->line('msg_ceo_name_2'));

        $ci->session->set_userdata('msg_ceo_position_1', $ci->lang->line('msg_ceo_position_1'));
        $ci->session->set_userdata('msg_ceo_position_2', $ci->lang->line('msg_ceo_position_2'));

        $ci->session->set_userdata('msg_chairman_paragragh_1', $ci->lang->line('msg_chairman_paragragh_1'));
        $ci->session->set_userdata('msg_chairman_paragragh_2', $ci->lang->line('msg_chairman_paragragh_2'));
        $ci->session->set_userdata('msg_chairman_paragragh_3', $ci->lang->line('msg_chairman_paragragh_3'));
        $ci->session->set_userdata('msg_chairman_paragragh_4', $ci->lang->line('msg_chairman_paragragh_4'));
        $ci->session->set_userdata('msg_chairman_paragragh_5', $ci->lang->line('msg_chairman_paragragh_5'));
        $ci->session->set_userdata('msg_chairman_paragragh_6', $ci->lang->line('msg_chairman_paragragh_6'));

        $ci->session->set_userdata('msg_chairman_name', $ci->lang->line('msg_chairman_name'));
        $ci->session->set_userdata('msg_chairman_position', $ci->lang->line('msg_chairman_position'));

        $ci->session->set_userdata('company_name', $ci->lang->line('company_name'));

        $ci->session->set_userdata('gi_company_name', $ci->lang->line('gi_company_name'));
        $ci->session->set_userdata('gi_stock_code', $ci->lang->line('gi_stock_code'));
        $ci->session->set_userdata('gi_registration_no', $ci->lang->line('gi_registration_no'));
        $ci->session->set_userdata('gi_stock_market', $ci->lang->line('gi_stock_market'));
        $ci->session->set_userdata('gi_type_of_industry', $ci->lang->line('gi_type_of_industry'));
        $ci->session->set_userdata('gi_type_of_business', $ci->lang->line('gi_type_of_business'));
        $ci->session->set_userdata('gi_website', $ci->lang->line('gi_website'));
        $ci->session->set_userdata('gi_year_of_establishment', $ci->lang->line('gi_year_of_establishment'));
        $ci->session->set_userdata('gi_first_trade_date', $ci->lang->line('gi_first_trade_date'));
        $ci->session->set_userdata('gi_address', $ci->lang->line('gi_address'));
        $ci->session->set_userdata('gi_registered_capital', $ci->lang->line('gi_registered_capital'));
        $ci->session->set_userdata('gi_paid_up_capital', $ci->lang->line('gi_paid_up_capital'));
        $ci->session->set_userdata('gi_par_value', $ci->lang->line('gi_par_value'));
        $ci->session->set_userdata('gi_fiscal_year', $ci->lang->line('gi_fiscal_year'));
        $ci->session->set_userdata('gi_contact', $ci->lang->line('gi_contact'));

        $ci->session->set_userdata('gi_company_name_value', $ci->lang->line('gi_company_name_value'));
        $ci->session->set_userdata('gi_stock_code_value', $ci->lang->line('gi_stock_code_value'));
        $ci->session->set_userdata('gi_registration_no_value', $ci->lang->line('gi_registration_no_value'));
        $ci->session->set_userdata('gi_stock_market_value', $ci->lang->line('gi_stock_market_value'));
        $ci->session->set_userdata('gi_type_of_industry_value', $ci->lang->line('gi_type_of_industry_value'));
        $ci->session->set_userdata('gi_type_of_business_value', $ci->lang->line('gi_type_of_business_value'));
        $ci->session->set_userdata('gi_website_value', $ci->lang->line('gi_website_value'));
        $ci->session->set_userdata('gi_year_of_establishment_value', $ci->lang->line('gi_year_of_establishment_value'));
        $ci->session->set_userdata('gi_first_trade_date_value', $ci->lang->line('gi_first_trade_date_value'));
        $ci->session->set_userdata('gi_address_value', $ci->lang->line('gi_address_value'));
        $ci->session->set_userdata('gi_registered_capital_value', $ci->lang->line('gi_registered_capital_value'));
        $ci->session->set_userdata('gi_paid_up_capital_value', $ci->lang->line('gi_paid_up_capital_value'));
        $ci->session->set_userdata('gi_par_value_value', $ci->lang->line('gi_par_value_value'));
        $ci->session->set_userdata('gi_fiscal_year_value', $ci->lang->line('gi_fiscal_year_value'));
        $ci->session->set_userdata('gi_contact_value', $ci->lang->line('gi_contact_value'));

        $ci->session->set_userdata('fh_statement_of_comprehensive_income', $ci->lang->line('fh_statement_of_comprehensive_income'));
        $ci->session->set_userdata('fh_revenue_from_service', $ci->lang->line('fh_revenue_from_service'));
        $ci->session->set_userdata('fh_total_revenue', $ci->lang->line('fh_total_revenue'));
        $ci->session->set_userdata('fh_cost_of_service', $ci->lang->line('fh_cost_of_service'));
        $ci->session->set_userdata('fh_gross_profit', $ci->lang->line('fh_gross_profit'));
        $ci->session->set_userdata('fh_selling_and_administrative_expenses', $ci->lang->line('fh_selling_and_administrative_expenses'));
        $ci->session->set_userdata('fh_interest_expenses', $ci->lang->line('fh_interest_expenses'));
        $ci->session->set_userdata('fh_tax_expense', $ci->lang->line('fh_tax_expense'));
        $ci->session->set_userdata('fh_net_profit', $ci->lang->line('fh_net_profit'));
        $ci->session->set_userdata('fh_balance_sheet', $ci->lang->line('fh_balance_sheet'));
        $ci->session->set_userdata('fh_current_assets', $ci->lang->line('fh_current_assets'));
        $ci->session->set_userdata('fh_total_assets', $ci->lang->line('fh_total_assets'));
        $ci->session->set_userdata('fh_current_liabilities', $ci->lang->line('fh_statement_of_comprehensive_income'));
        $ci->session->set_userdata('fh_total_liabilities', $ci->lang->line('fh_total_liabilities'));
        $ci->session->set_userdata('fh_shareholders_equity', $ci->lang->line('fh_shareholders_equity'));
        $ci->session->set_userdata('fh_issued_and_paid_up_share_lower', $ci->lang->line('fh_issued_and_paid_up_share_lower'));
        $ci->session->set_userdata('fh_financial_ratio', $ci->lang->line('fh_financial_ratio'));
        $ci->session->set_userdata('fh_liquidity_ratio', $ci->lang->line('fh_liquidity_ratio'));
        $ci->session->set_userdata('fh_average_collection_period', $ci->lang->line('fh_average_collection_period'));
        $ci->session->set_userdata('fh_average_payment_period', $ci->lang->line('fh_average_payment_period'));
        $ci->session->set_userdata('fh_gross_profit_margin', $ci->lang->line('fh_gross_profit_margin'));
        $ci->session->set_userdata('fh_operating_profit_margin', $ci->lang->line('fh_operating_profit_margin'));
        $ci->session->set_userdata('fh_net_profit_margin', $ci->lang->line('fh_net_profit_margin'));
        $ci->session->set_userdata('fh_return_on_equity', $ci->lang->line('fh_return_on_equity'));
        $ci->session->set_userdata('fh_return_on_asset', $ci->lang->line('fh_return_on_asset'));
        $ci->session->set_userdata('fh_net_debt_toequity_ratio', $ci->lang->line('fh_net_debt_toequity_ratio'));
        $ci->session->set_userdata('fh_interest_coverage_ratio', $ci->lang->line('fh_interest_coverage_ratio'));
        $ci->session->set_userdata('fh_earning_per_share', $ci->lang->line('fh_earning_per_share'));




        $ci->session->set_userdata('vision', $ci->lang->line('vision'));
        $ci->session->set_userdata('vision_sub', $ci->lang->line('vision_sub'));
        $ci->session->set_userdata('vision_text', $ci->lang->line('vision_text'));

        $ci->session->set_userdata('mission', $ci->lang->line('mission'));
        $ci->session->set_userdata('mission_sub', $ci->lang->line('mission_sub'));
        $ci->session->set_userdata('mission_text', $ci->lang->line('mission_text'));

        $ci->session->set_userdata('core_vaue', $ci->lang->line('core_vaue'));
        $ci->session->set_userdata('core_vaue_c', $ci->lang->line('core_vaue_c'));
        $ci->session->set_userdata('core_vaue_m', $ci->lang->line('core_vaue_m'));
        $ci->session->set_userdata('core_vaue_o', $ci->lang->line('core_vaue_o'));
        $ci->session->set_userdata('core_vaue_r', $ci->lang->line('core_vaue_r'));
        $ci->session->set_userdata('core_vaue_e', $ci->lang->line('core_vaue_e'));

        $ci->session->set_userdata('full_name', $ci->lang->line('full_name'));
        $ci->session->set_userdata('subject', $ci->lang->line('subject'));
        $ci->session->set_userdata('message', $ci->lang->line('message'));
        $ci->session->set_userdata('the_privacy_statement', $ci->lang->line('the_privacy_statement'));
        $ci->session->set_userdata('i_agree', $ci->lang->line('i_agree'));
        $ci->session->set_userdata('email', $ci->lang->line('email'));
        $ci->session->set_userdata('telephone', $ci->lang->line('telephone'));
        $ci->session->set_userdata('location', $ci->lang->line('location'));
        $ci->session->set_userdata('map', $ci->lang->line('map'));
        $ci->session->set_userdata('ir_name', $ci->lang->line('ir_name'));
        $ci->session->set_userdata('ir_title', $ci->lang->line('ir_title'));

        $ci->session->set_userdata('hrs', $ci->lang->line('hrs'));
        $ci->session->set_userdata('webcast', $ci->lang->line('webcast'));
        $ci->session->set_userdata('presentation', $ci->lang->line('presentation'));

        // $ci->session->set_userdata('td_contact', $ci->lang->line('td_contact'));
        // $ci->session->set_userdata('td_phone', $ci->lang->line('td_phone'));
        // $ci->session->set_userdata('td_symbol', $ci->lang->line('td_symbol'));
        // $ci->session->set_userdata('td_name_of_debenture', $ci->lang->line('td_name_of_debenture'));
        // $ci->session->set_userdata('td_issue_amount', $ci->lang->line('td_issue_amount'));
        // $ci->session->set_userdata('td_coupon_rate', $ci->lang->line('td_coupon_rate'));
        // $ci->session->set_userdata('td_tenor', $ci->lang->line('td_tenor'));
        // $ci->session->set_userdata('td_issue_date', $ci->lang->line('td_issue_amount'));
        // $ci->session->set_userdata('td_issue_amount', $ci->lang->line('td_issue_amount'));
        // $ci->session->set_userdata('td_issue_amount', $ci->lang->line('td_issue_amount'));


        

        // $lang['subscribe_text']  = $ci->lang->line('subscribe_text');
        // return $lang;

    }

}