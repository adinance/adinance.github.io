<section class="extMenu7 menu cid-uoJscNlwwI" once="menu" id="extMenu7-9n">

    <nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div class="menu-content-top" id="topLine">
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://cmo-group.com">
                            <img src="<?php echo BASE_URL; ?>assets/img/logo-navigation.png" alt="" title=""
                                style="height: 4rem;">
                        </a>
                    </span>

                </div>
            </div>
            <div class="menu-content-right">
                <div class="info-widget">
                    <span class="widget-icon mbr-iconfont mobi-mbri-home mobi-mbri"></span>
                    <div class="widget-content display-4">
                        <a href="https://cmo-group.com">
                            <p class="widget-title mbr-fonts-style display-4">
                                <?php echo isset($this->session->go_to_corporate) ? $this->session->go_to_corporate : 'Go to Corporate'; ?>
                            </p>
                        </a>
                        <a href="<?php echo BASE_URL; ?>">
                            <p class="widget-text mbr-fonts-style display-4">
                                <?php echo isset($this->session->go_to_investor_relations) ? $this->session->go_to_investor_relations : 'Go to Investor Relations'; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <!-- <div class="info-widget">
                    <span class="widget-icon mbr-iconfont mbrib-growing-chart"></span>
                    <div class="widget-content display-4">
                        <p class="widget-title mbr-fonts-style display-4">CMO | 0.8 THB</p>
                        <p class="widget-text mbr-fonts-style display-4">+ 0.10 (1.20%)</p>
                    </div>
                </div> -->
                <div class="info-widget">
                    <span class="widget-icon mbr-iconfont mdi-action-language"></span>
                    <div class="widget-content mbr-fonts-style">
                        <p class="widget-title display-4"><a onclick="language('english')">EN</a></p>
                        <p class="widget-text mbr-fonts-style display-4"><strong><a onclick="language('thai')">TH</a></strong></p>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent, #topLine" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
        <div class="menu-bottom" style="padding: 0 0rem important!;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown js-float-line nav-right" data-app-modern-menu="true">
                    <li class="nav-item dropdown">
                        <a class="nav-link link mbr-black dropdown-toggle display-4" href="#"
                            data-toggle="dropdown-submenu" aria-expanded="false">
                            <strong><?php echo isset($this->session->corporate_info) ? $this->session->corporate_info : 'Corporate Info'; ?></strong>
                        </a>
                        <div class="dropdown-menu">
                            
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>vision-mission-core-value"
                                aria-expanded="false"><?php echo isset($this->session->vision_mission_core_value) ? $this->session->vision_mission_core_value : 'Vision • Mision • Core Value'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>company-s-history"
                                aria-expanded="false"><?php echo isset($this->session->company_s_history) ? $this->session->company_s_history : 'Company\'s History'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>business-overview"
                                aria-expanded="false"><?php echo isset($this->session->business_overview) ? $this->session->business_overview : 'ฺBusiness Overview'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>message-from-ceo-and-coo"
                                aria-expanded="false"><?php echo isset($this->session->message_from_ceo_and_coo) ? $this->session->message_from_ceo_and_coo : 'Message from CEO & COO'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>company-structure"
                                aria-expanded="false"><?php echo isset($this->session->company_structure) ? $this->session->company_structure : 'Company Structure'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>organization-chart"
                                aria-expanded="false"><?php echo isset($this->session->organization_chart) ? $this->session->organization_chart : 'Organization Chart'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>board-of-director"
                                aria-expanded="false"><?php echo isset($this->session->board_of_director) ? $this->session->board_of_director : 'Board of Director'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>management-team"
                                aria-expanded="false"><?php echo isset($this->session->management_team) ? $this->session->management_team : 'Management Team'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>awards"
                                aria-expanded="false"><?php echo isset($this->session->awards) ? $this->session->awards : 'Awards'; ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link mbr-black dropdown-toggle display-4" href="<?php echo BASE_URL; ?>#"
                            data-toggle="dropdown-submenu" aria-expanded="false">
                            <strong>
                                <?php echo isset($this->session->financial_info) ? $this->session->financial_info : 'Financial Info'; ?></strong></a>
                        <div class="dropdown-menu">
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>financial-highlight"><?php echo isset($this->session->financial_highlight) ? $this->session->financial_highlight : 'Financial Highlight'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>financial-statement">
                                <?php echo isset($this->session->financial_statement) ? $this->session->financial_statement : 'Financial Statement'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>management-discussion-and-analysis"><?php echo isset($this->session->md_and_a) ? $this->session->md_and_a : 'MD & A'; ?></a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link mbr-black dropdown-toggle display-4" href="<?php echo BASE_URL; ?>#"
                            data-toggle="dropdown-submenu" aria-expanded="false"><strong>
                                <?php echo isset($this->session->stock_info) ? $this->session->stock_info : 'Stock Info'; ?></strong></a>
                        <div class="dropdown-menu"><a class="mbr-black dropdown-item display-4"
                                href="https://www.settrade.com/th/equities/quote/cmo/overview"><?php echo isset($this->session->stock_qoute) ? $this->session->stock_qoute : 'Stock Quote'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="https://www.settrade.com/th/equities/quote/cmo/historical-trading"><?php echo isset($this->session->historical_price) ? $this->session->historical_price : 'Historical Price'; ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                            aria-expanded="false"><strong>
                                <?php echo isset($this->session->shareholder_info) ? $this->session->shareholder_info : 'Shareholder Info'; ?></strong></a>
                        <div class="dropdown-menu">
                        <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>general-information"><?php echo isset($this->session->general_information) ? $this->session->general_information : 'Fact Sheet'; ?></a>    
                        <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>major_shareholder"><?php echo isset($this->session->major_shareholder) ? $this->session->major_shareholder : 'Major Shareholder'; ?></a>
                            <div class="dropdown"><a class="mbr-black dropdown-item dropdown-toggle display-4"
                                    href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                                    aria-expanded="false"><?php echo isset($this->session->shareholder_s_meeting) ? $this->session->shareholder_s_meeting : 'Shareholder\'s Meeting'; ?></a>
                                <div class="dropdown-menu dropdown-submenu"><a class="mbr-black dropdown-item display-4"
                                        href="<?php echo BASE_URL; ?>invitation"><?php echo isset($this->session->invitation) ? $this->session->invitation : 'Invitation'; ?></a><a
                                        class="mbr-black dropdown-item display-4"
                                        href="<?php echo BASE_URL; ?>the-resolutions"><?php echo isset($this->session->the_resolutions) ? $this->session->the_resolutions : 'The Resolution'; ?></a>
                                    <a class="mbr-black dropdown-item display-4"
                                        href="<?php echo BASE_URL; ?>the-minutes-of-annual-general-meeting"><?php echo isset($this->session->the_minutes_of_annual_general_meeting) ? $this->session->the_minutes_of_annual_general_meeting : 'The Minutes Of Annual General Meeting'; ?></a>
                                </div>
                            </div><a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>dividen-policy-and-payment"
                                aria-expanded="false"><?php echo isset($this->session->dividen_policy_and_payment) ? $this->session->dividen_policy_and_payment : 'Dividend Policy & Payment'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>newly-issued-ordinary-shares"
                                aria-expanded="false"><?php echo isset($this->session->newly_issued_ordinary_shares) ? $this->session->newly_issued_ordinary_shares : 'Newly Issued Ordinary Shares'; ?></a>
                            <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>ir-calendar"
                                aria-expanded="false"><?php echo isset($this->session->ir_calendar) ? $this->session->ir_calendar : 'IR Calendar'; ?></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                            aria-expanded="false"><strong>
                                <?php echo isset($this->session->news_room) ? $this->session->news_room : 'News Room'; ?></strong></a>
                        <div class="dropdown-menu"><a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>set-annoucements"><?php echo isset($this->session->set_annoucements) ? $this->session->set_annoucements : 'Set Announcenements'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>press-releases"><?php echo isset($this->session->press_releases) ? $this->session->press_releases : 'Press Releases'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>news-clipping"><?php echo isset($this->session->news_clipping) ? $this->session->news_clipping : 'News Clipping'; ?></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                            aria-expanded="false"><strong>
                                <?php echo isset($this->session->publications) ? $this->session->publications : 'Publications'; ?></strong></a>
                        <div class="dropdown-menu"><a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>annual-report"><?php echo isset($this->session->annual_report) ? $this->session->annual_report : 'Annual Report / Form 56-1 One Report'; ?></a>
                                <a class="mbr-black dropdown-item display-4" href="<?php echo BASE_URL; ?>form-56-1"
                                aria-expanded="false"><?php echo isset($this->session->form_56_1) ? $this->session->form_56_1 : 'Form 56-1'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>presentations-and-webcasts"><?php echo isset($this->session->presentations_and_webcasts) ? $this->session->presentations_and_webcasts : 'Presentations And Webcasts'; ?></a>
                               
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                            aria-expanded="false"><strong>
                                <?php echo isset($this->session->corporate_governance) ? $this->session->corporate_governance : 'Corporate Governance'; ?></strong></a>
                        <div class="dropdown-menu"><a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>policy"><?php echo isset($this->session->policy) ? $this->session->policy : 'Policy'; ?></a><a
                                class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>whistleblowing-form"><?php echo isset($this->session->whistleblowing_form) ? $this->session->whistleblowing_form : 'Whistleblowing Form'; ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu" aria-expanded="false">
                            <strong><?php echo isset($this->session->sustainability) ? $this->session->sustainability : 'Sustainability'; ?></strong></a>
                        <div class="dropdown-menu">
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>overview"><?php echo isset($this->session->overview) ? $this->session->overview : 'Overview'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>economy"><?php echo isset($this->session->economy) ? $this->session->economy : 'Economy'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>environment"><?php echo isset($this->session->environment) ? $this->session->environment : 'Environment'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>social"><?php echo isset($this->session->social) ? $this->session->social : 'Social'; ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link mbr-black dropdown-toggle display-4"
                            href="<?php echo BASE_URL; ?>#" data-toggle="dropdown-submenu"
                            aria-expanded="false"><strong>
                                <?php echo isset($this->session->info_request) ? $this->session->info_request : 'Info Request'; ?></strong></a>
                        <div class="dropdown-menu"><a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>ir-contact"><?php echo isset($this->session->ir_contact) ? $this->session->ir_contact : 'IR Contact'; ?></a>
                            <a class="mbr-black dropdown-item display-4"
                                href="<?php echo BASE_URL; ?>email-alerts"><?php echo isset($this->session->email_alerts) ? $this->session->email_alerts : 'Email Alerts'; ?></a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</section>