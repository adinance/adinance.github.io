<section class="extForm cid-uqTPGYP6FW" id="extForm21-jc">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-sm-12 align-center">
                <h2 class="title1 mbr-fonts-style mbr-bold display-2">
                    <span style="font-weight: normal;"><?php echo isset($this->session->ir_name) ? $this->session->ir_name : 'Warunee Puthapornpoj (Nan)'; ?></span>
                    <div><?php echo isset($this->session->ir_title) ? $this->session->ir_title : 'Investor Relations'; ?></div>
                </h2>
                <h3 class="mbr-section-subtitle mbr-fonts-style display-7"><?php echo isset($this->session->address) ? $this->session->address : CONTACT_ADDRESS; ?>
                </h3>

                <div class="ico-box">
                    <span class="pr-3 mbr-iconfont mbr-iconfont-social icon sli-phone"></span>
                    <div>
                        <h4 class="mbr-fonts-style type display-7"><?php echo isset($this->session->telephone) ? $this->session->telephone : 'Telephone'; ?></h4>
                        <p class="mbr-fonts-style content display-7"><a href="tel:+6620883888">(+662) 088 3888</a> Ext. 1399 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </div>
                </div>

                <div class="ico-box">
                <span class="pr-3 mbr-iconfont mbr-iconfont-social icon sli-envelope"></span>
                    <div>
                        <h4 class="mbr-fonts-style type display-7"><?php echo isset($this->session->email) ? $this->session->email : 'Email'; ?></h4>
                        <p class="mbr-fonts-style content display-7"><a href="mailto:<?php echo EMAIL_CONTACT; ?>"><?php echo EMAIL_CONTACT; ?></a></p>
                    </div>
                </div>

                <div class="ico-box">
                    <span class="pr-3 mbr-iconfont mbr-iconfont-social icon sli-location-pin"></span>
                    <div>
                        <h4 class="mbr-fonts-style type display-7"><?php echo isset($this->session->location) ? $this->session->location : 'Location'; ?></h4>
                        <p class="mbr-fonts-style content display-7"><a href="#" data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-k9" data-bs-target="#mbr-popup-k9"><?php echo isset($this->session->map) ? $this->session->map : 'Map'; ?></a></p>
                    </div>
                </div>

            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 align-left">

                <div data-form-type="formoid">
                    <!-- <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler"
                        data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true"
                            value="SGJxMqDgzF5iI+lBnWdxjnOkg8lb8rsPaa3QakF5FEjGn8NYioGLeCVm4fMvjHe5Es27oKIS/ew0xLDexAtUHpSZwNVVEyh0Znbj5qfJ5LQdqOZCxIHXLT+itPmKiUt9.GW9FexPrU3Fe133TKt5LguX7NbBpOq4ce1QLiYElQn7idGRE+eaAJdlRPabjxWu8UlOTUkVX4mA+NyPZgL/bqoExrq4c2MsUiuDX5yt6yqvhsYDDrv1oocwoeUHXXD5H">
                    <?php $form_attributes = array('class' => 'mbr-form form-with-styler', 'id' => 'form_contact', 'onsubmit' =>'return validateForm()');?> -->
                        <?php echo form_open(BASE_URL . 'info_request/send', $form_attributes); ?>

                        <!-- <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> </div>
                        </div> -->
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                                <input type="text" name="name" placeholder="Full Name" data-form-field="name" required class="form-control display-7" value="" id="name">
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group" data-for="telephone">
                                <input type="text" name="telephone" placeholder="Telephone" data-form-field="telephone" required class="form-control display-7" value="" id="telephone" pattern="[0-9]+">
                            </div>
                            <div data-for="email" class="col-lg-8 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control display-7" required value="" id="email">
                            </div>
                            <div data-for="subject" class="col-md-12 form-group">
                                <input type="text" name="subject" placeholder="Subject" data-form-field="subject" class="form-control display-7" required value="" id="subject">
                            </div>
                            <div data-for="message" class="col-md-12 form-group">
                                <textarea name="message" placeholder="Message" data-form-field="message" class="form-control display-7" id="message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="checkbox">
                                <div class="form-control-label">
                                    <label for="checkbox" class="mbr-fonts-style display-7">The Privacy Statement</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="Yes" name="I Have Read And Accrept" data-form-field="I Have Read And Accrept" class="form-check-input display-7" required="required" id="I Have Read And Accrept-extForm21-jc">
                                    <label class="form-check-label display-7">I Have Read And Accept</label>
                                </div>
                            </div>
                            <div class="col-md-12 input-group-btn">
                                <button type="submit" class="btn btn-form btn-primary display-4">SEND</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="modal mbr-popup cid-urmWI4clO0 fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-k9" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="container position-static margin-center-pos">
                <div class="modal-header">

                    <button type="button" class="close d-flex" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                            fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="<?php echo BASE_URL . PATH_MOBIRISE ;?>assets/images/cmo-map-for-web-2-1025x846.png" alt="" title="">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>