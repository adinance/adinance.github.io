<section class="ir-navcontainer">
    <!-- ============= COMPONENT ============== -->

    <nav class=" d-flex justify-content-between navbar navbar-expand-lg nav-mainpadding ">

        <div class="p-2"><a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL;?>assets/img/home-top-cmo-logo.png"></a></div>

        <div class="p-2 ms-auto gtc-lg">

            <img class=" gtc-btn" src="<?php echo BASE_URL;?>assets/img/home-top-home-icon.png"> <strong > <a class="nav-l1 gtc-t" href="#"><?php echo isset($this->session->go_to_corporate) ? $this->session->go_to_corporate : 'Go to Corporate'; ?></a> </strong>
            <a class="nav-l1" onclick="language('english')">EN</a> | <a class="nav-l1" onclick="language('thai')">TH</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <img class="hbg-btn" src="<?php echo BASE_URL;?>assets/img/hbg.png">
        </button>

    </nav>

    <nav class="navbar navbar2 navbar-expand-lg  border-top border-bottom nav-mainpadding ">

        <div class="container-fluid">
            <div class=" collapse navbar-collapse " id="main_nav">

                <ul class="navbar-nav d-flex justify-content-between nav justify-content-center">

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown"><?php echo isset($this->session->corporate_info) ? $this->session->corporate_info : 'Corporate Info'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title"><?php echo isset($this->session->corporate_info) ? $this->session->corporate_info : 'Corporate Info'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="general-information"><?php echo isset($this->session->general_information) ? $this->session->general_information : 'General Information'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="vision-mission-core-value"><?php echo isset($this->session->vision_mission_core_value) ? $this->session->vision_mission_core_value : 'Vision Mission Core'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="company-s-history"><?php echo isset($this->session->company_s_history) ? $this->session->company_s_history : 'Company’s History'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="business-overview"><?php echo isset($this->session->business_overview) ? $this->session->business_overview : 'ฺBusiness Overview'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="message-from-ceo-and-coo"><?php echo isset($this->session->message_from_ceo_and_coo) ? $this->session->message_from_ceo_and_coo : 'Message from CEO & COO'; ?></a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div>-
                                <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li class="menu-list border-bottom"><a href="company-structure"><?php echo isset($this->session->company_structure) ? $this->session->company_structure : 'Company Structure'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="organization-chart"><?php echo isset($this->session->organization_chart) ? $this->session->organization_chart : 'Organization Chart'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="board-of-director"><?php echo isset($this->session->board_of_director) ? $this->session->board_of_director : 'Board of Director'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="management-team"><?php echo isset($this->session->management_team) ? $this->session->management_team : 'Management Team'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="awards"><?php echo isset($this->session->awards) ? $this->session->awards : 'Award'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>

                            </div>
                        </div> 
                    </li>

                    <li class="  nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown"><?php echo isset($this->session->financial_info) ? $this->session->financial_info : 'Financial Info'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->financial_info) ? $this->session->financial_info : 'Financial Info'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom" ><a href="highlights"><?php echo isset($this->session->financial_highlighs) ? $this->session->financial_highlighs : 'Financial Highlight'; ?></a></li>
                                            <li class="menu-list border-bottom" ><a href="statements"><?php echo isset($this->session->financial_statements) ? $this->session->financial_statements : 'Financial Statement'; ?></a></li>
                                            <li class="menu-list border-bottom" ><a href="management_discussion"><?php echo isset($this->session->management_discussion) ? $this->session->management_analysis : 'MD & A'; ?></a></li>

                                        </ul>
                                    </div> 
                                </div>
                               

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="stock"><?php echo isset($this->session->stock_info) ? $this->session->stock_info : 'Stock Info'; ?></a>
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown"><?php echo isset($this->session->shareholder_info) ? $this->session->shareholder_info : 'Shareholder Info'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" id="shareholder_info"><?php echo isset($this->session->shareholder_info) ? $this->session->shareholder_info : 'Shareholder Info'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="major_shareholder"><?php echo isset($this->session->major_shareholder) ? $this->session->major_shareholder : 'Major Shareholder'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#"><?php echo isset($this->session->sharehol_invitation) ? $this->session->sharehol_invitation : 'Shareholder\'s Meeting'; ?></a>
                                            </li>
                                            <li class="menu-suplist"><a href="invitation" ><?php echo isset($this->session->invitations) ? $this->session->invitations : '- Invitation'; ?></a></li>
                                            <li class="menu-suplist"><a href="resolutions" ><?php echo isset($this->session->the_resolutions) ? $this->session->the_resolutions : '- The Resolution'; ?></a></li>
                                            <li class="menu-suplist"><a href="the-minutes-of-annaul-general-meeting" ><?php echo isset($this->session->the_minutes_of_annual_general_meeting) ? $this->session->the_minutes_of_annual_general_meeting : '- The Minutes Of Annual General Meeting'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li class="menu-list border-bottom" ><a href="dividen_policy" ><?php echo isset($this->session->dividen_policy_and_payment) ? $this->session->dividen_policy_and_payment : 'Dividen Policy And Payment'; ?></a></li>
                                            <li class="menu-list border-bottom" ><a href="newly_issued_ordinary_shares" ><?php echo isset($this->session->newly_issued_ordinary_shares) ? $this->session->newly_issued_ordinary_shares : 'Newly Issued Ordinary Shares'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" ><?php echo isset($this->session->news_room) ? $this->session->news_room : 'News Room'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->news_room) ? $this->session->news_room : 'News Room'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->set_annoucements) ? $this->session->set_annoucements : 'Set Announcenements'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->press_releases) ? $this->session->press_releases : 'Press Releases'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->news_clipping) ? $this->session->news_clipping : 'News Clipping'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->ir_calendar) ? $this->session->ir_calendar : 'IR Calendar'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <!-- <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> 
                                </div> -->

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" ><?php echo isset($this->session->publications) ? $this->session->publications : 'Publications'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->publications) ? $this->session->publications : 'Publications'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="annual_report"><?php echo isset($this->session->annual_report) ? $this->session->annual_report : 'Annual Report (56-1 One Report)'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="company_factsheet" id="company_factsheet"><?php echo isset($this->session->company_factsheet) ? $this->session->company_factsheet : 'Company Factsheet'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="presentations_and_webcasts" ><?php echo isset($this->session->presentations_and_webcasts) ? $this->session->presentations_and_webcasts : 'Presentations And Webcasts'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="analyst_coverage" ><?php echo isset($this->session->analyst_coverage) ? $this->session->analyst_coverage : 'Analyst Coverage'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <!-- <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> 
                                </div> -->

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" ><?php echo isset($this->session->corporate_governance) ? $this->session->corporate_governance : 'Corporate Governance'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->corporate_governance) ? $this->session->corporate_governance : 'Corporate Governance'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="policy" ><?php echo isset($this->session->policy) ? $this->session->policy : 'Policy'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="whistleblowing" ><?php echo isset($this->session->whistleblowing_form) ? $this->session->whistleblowing_form : 'Whistleblowing Form'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <!-- <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> 
                                </div> -->

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" ><?php echo isset($this->session->sustainability) ? $this->session->sustainability : 'Sustainability'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->sustainability) ? $this->session->sustainability : 'Sustainability'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->overview) ? $this->session->overview : 'Overview'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->economy) ? $this->session->economy : 'Economy'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->environment) ? $this->session->environment : 'Environment'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="#" ><?php echo isset($this->session->social) ? $this->session->social : 'Social'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <!-- <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">

                                        </ul>
                                    </div> 
                                </div> -->

                            </div>
                        </div> 
                    </li>

                    <li class=" nav-item has-megamenu">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" ><?php echo isset($this->session->info_request) ? $this->session->info_request : 'Info Request'; ?></a>
                        <div class="dropdown-menu megamenu shadow bg-white" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-12">
                                    <div class="col-megamenu">
                                        <div class="col">
                                            <div class="h4 menu-title" ><?php echo isset($this->session->info_request) ? $this->session->info_request : 'Info Request'; ?></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled ">
                                            <li class="menu-list border-bottom"><a href="contact" ><?php echo isset($this->session->ir_contact) ? $this->session->ir_contact : 'IR Contact'; ?></a></li>
                                            <li class="menu-list border-bottom"><a href="subscribe" ><?php echo isset($this->session->email_alerts) ? $this->session->email_alerts : 'Email Alerts'; ?></a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <!-- <div class="col-lg-4 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">

                                        </ul>
                                    </div> 
                                </div> -->

                            </div>
                        </div> 
                    </li>

                </ul>
            </div> <!-- navbar-collapse.// -->

        </div>

        <!-- container-fluid.// -->
    </nav>

    <!-- ============= COMPONENT END// ============== -->

</section>

<!--jQuery-->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL;?>assets/ir/mega-menu/script.js"></script> -->