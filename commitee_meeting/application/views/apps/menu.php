<section class="menu cid-u6T9cD888G" once="menu" id="menu2-1a">
    <nav
        class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="<?php echo BASE_URL . TEMPLATE ; ?>assets/images/274707267-10160339571874298-5699557155789884071-n-122x122.jpg"
                            alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                
                <?php if($user['permission']==1 || $user['permission']==4 ){ ?>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="<?php echo BASE_URL?>documents"
                        aria-expanded="false">
                        <!-- <span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>Documents -->
                        <span class="fa fa-folder-open-o mbr-iconfont mbr-iconfont-btn"></span>Documentation
                    </a>
                </li>
                <?php } ?>

                <?php if($user['permission']==1){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle text-white display-4"
                        href="docs_list.html" aria-expanded="false" data-toggle="dropdown-submenu"><span
                            class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span>Settings</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-white display-4" href="<?php echo BASE_URL?>settings/document"
                            aria-expanded="false">
                            <span class="mbrib-to-local-drive mbr-iconfont mbr-iconfont-btn"></span>Upload
                        </a>
                        <!-- <a class="dropdown-item text-white display-4" href="docs_list.html"
                            aria-expanded="false"><span
                                class="mdi-av-my-library-books mbr-iconfont mbr-iconfont-btn"></span>Documents</a> -->
                    </div>
                </li>
            
                <?php } ?>

                <?php if($user['permission']==1 || $user['permission']==4 ){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle text-white display-4" href="docs_list.html"
                        aria-expanded="true" data-toggle="dropdown-submenu">
                        <span class="mdi-navigation-apps mbr-iconfont mbr-iconfont-btn"></span>Reports
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-white display-4" href="<?php echo BASE_URL?>last_connection"
                            aria-expanded="true">
                            <span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>Last Connection</a>
                        <a class="dropdown-item text-white display-4" href="<?php echo BASE_URL?>access_logs"
                            aria-expanded="true"><span class="mbrib-layers mbr-iconfont mbr-iconfont-btn"></span>Access Logs</a>

                    </div>
                </li>
                <?php } ?>
             
            </ul>
            <!-- <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-warning display-4" href="#"><span class="mdi-av-play-circle-fill mbr-iconfont mbr-iconfont-btn"></span>Join Meeting Now!</a>
            </div> -->
            <?php if($user['permission'] !=4 ) {?>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-warning display-7" target="_blank" href=" https://varpevent.zoom.us/j/81874231094?pwd=fl51slvqAAHb1Cvd9remULdIM5u4BR.1"><span class="mbrib-video-play mbr-iconfont mbr-iconfont-btn"></span>การประชุมวิสามัญผู้ถือหุ้นครั้งที่ 1/2657</a>
                <!-- <a class="btn btn-sm btn-warning display-7" target="_blank" href="https://meet.google.com/gkv-fude-yma"><span class="mbrib-video-play mbr-iconfont mbr-iconfont-btn"></span>16:00 | คณะกรรมการบริษัท</a> -->
            </div>
            <?php } ?>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-white-outline display-4" href="<?php echo  BASE_URL . 'logout'; ?>"><span
                        class="sli-login mbr-iconfont mbr-iconfont-btn"></span>LOGOUT</a>
            </div>
        </div>
    </nav>
</section>