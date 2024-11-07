<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">

    <title><?php echo TITLE; ?></title>
    
    <link rel="shortcut icon" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/images/company-logo-122x122.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/tether/tether.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/socicon/css/styles.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/theme/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/recaptcha.css">
    <link rel="preload" as="style" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . TEMPLATE ; ?>assets/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="<?php echo BASE_URL ; ?>assets/css/auth.css">

</head>

<body>

  

    <section class="extForm cid-u6SWqp0QQE" id="login">
        <div class="container">
            <h3 class="mbr-section-subtitle main-subtitle mbr-fonts-style align-center mbr-lighter mbr-white display-4"><?php echo COMPANY_NAME ?></h3>
            <div class="underline align-center pb-3">
                <div class="line"></div>
            </div>
            <h2 class="mbr-section-title main-title mbr-fonts-style align-center pb-5 mbr-white display-2"><strong><?php echo TITLE ?></strong></h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 form-wrapper">

                    <div class="form1" data-form-type="formoid">
                        <?php $form_attributes = array('class' => 'mbr-form form-with-styler', 'id' => 'form_login');?>
                        <?php echo form_open(BASE_URL . 'auth/login', $form_attributes); ?> <!-- <form action="#" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"> -->
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="user">
                                    <label for="user-login" class="form-control-label mbr-fonts-style display-7"><strong>Username</strong></label>
                                    <input type="text" name="username" data-form-field="First Name" required class="form-control display-7" value="" id="username">
                                </div>
                                <div class="col-md-12 form-group " data-for="password">
                                    <label for="password-login" class="form-control-label mbr-fonts-style display-7"><strong>Password</strong></label>
                                    <input type="password" name="password" data-form-field="Last Name" required class="form-control display-7" value="" id="password">
                                </div>
                                <div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-lg btn-form btn-primary display-4">LOGIN</button></div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="extFooter cid-u6T53sa9pa" id="extFooter26-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="social-list align-center py-4">
                        <div class="soc-item">
                            <a href="<?php echo URL_FACEBOOK ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon social" media-simple="true"></div>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo URL_YOUTUBE ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon social"  media-simple="true"></div>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo URL_INSTAGRAM ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon social"  media-simple="true"></div>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo URL_X ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon social"  media-simple="true"></div>
                            </a>
                        </div>
                        
                        
                        <div class="soc-item">
                            <a href="<?php echo URL_TIKTOK ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-tiktok socicon social"  media-simple="true"></div>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo URL_LINE ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-line socicon social"  media-simple="true">
                                </div>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo URL_LINKEDIN ?>" target="_blank">
                                <div class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon social"  media-simple="true"></div>
                            </a>
                        </div>
                    </div>
                    <p class="mbr-text mbr-normal py-2 links mbr-fonts-style display-4">
                        © Copyright 2024, <a href="https://cmo-group.com" class="text-primary"><strong><?php echo COMPANY_NAME ?></strong></a>
                        <br>All Rights Reserved | <a href="https://cmo-group.com/privacy-policy/" class="text-warning"><strong>Privacy Policy</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    

 

    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/web/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/tether/tether.min.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/smoothscroll/smooth-scroll.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/formstyler/jquery.formstyler.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/theme/js/script.js"></script>
    <script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/formoid.min.js"></script>


    <script src="<?php echo BASE_URL ;?>assets/js/sweetalert2@11.js"></script>
    <script>
        <?php  echo $swal ?>
    </script>

</body>

</html>