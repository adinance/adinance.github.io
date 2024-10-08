<section class="footer-section">
    <div class="footer-grid-container">
        <div class="footer-item1">
            <h3 class="text-uppercase"><?php echo isset($this->session->ir_contact) ? $this->session->ir_contact : 'IR Contact'; ?></h3>
            
            <?php echo isset($this->session->address) ? $this->session->address : CONTACT_ADDRESS; ?>
            
            <ul>
                <li><img src="<?php echo BASE_URL;?>assets/img/contact-telephone.png"></img>&nbsp;<a href="tel:6620883888">(662)088-3888</a></li>
                <li><img src="<?php echo BASE_URL;?>assets/img/contact-mail.png"></img>&nbsp;<a href="mailto:cmo@cmo-group.com"><?php echo CONTACT_EMAIL; ?></a></li>
            </ul>
        </div>
        <div class="footer-item2">
            <h4 class="text-uppercase"><?php echo isset($this->session->email_alerts) ? $this->session->email_alerts : 'Email Alerts'; ?></h4>
                <?php echo isset($this->session->subscribe_text) ? $this->session->subscribe_text : 'Keep yourself up to date with all the latest announcement from us.'; ?>
            <div class="Sub-btn">
                <button>Subscribe</button>
            </div>
        </div>
        <div class="footer-item3">
            <a href="https://www.facebook.com/CMOGroupTH/" target="_blank"><img src="<?php echo BASE_URL;?>assets/img/social-facebook.png"></img></a>
            <a href="https://www.instagram.com/cmogroupth/" target="_blank"><img src="<?php echo BASE_URL;?>assets/img/social-instagram.png"></img></a>
            <a href="https://twitter.com/CMOGroupTH" target="_blank"><img src="<?php echo BASE_URL;?>assets/img/social-twitter.png"></img></a>
            <a href="https://www.tiktok.com/@cmogroupth" target="_blank"><img src="<?php echo BASE_URL;?>assets/img/social-tiktok.png"></img></a>
            <a href="https://www.threads.net/@cmogroupth" target="_blank"><img src="<?php echo BASE_URL;?>assets/img/social-threads.png"></img></a>&nbsp;&nbsp;<a>CMOGroupTH</a>
        </div>
    </div>
</section>

<!-- <script src="<?php echo BASE_URL;?>assets/js/ckeditor.js"></script> -->
<script>
    ClassicEditor.create(document.getElementById("editor"), {
        toolbar: {
            items: [
                'undo', 'redo', '|',
                'heading', '|',
                'bold', 'italic', '|',
                'bulletedList', 'numberedList', '|',
            ],
            shouldNotGroupWhenFull: true
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Title',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading',
                    class: 'ck-heading_heading3'
                },
                {
                    model: 'heading5',
                    view: 'h5',
                    title: 'Caption',
                    class: 'ck-heading_heading5'
                },
            ]
        },
        placeholder: 'Push message here',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [{
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [{
                marker: '@',
                feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                    '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                    '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                    '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                ],
                minimumCharacters: 1
            }]
        },
        removePlugins: [
            'AIAssistant',
            'CKBox',
            'CKFinder',
            'EasyImage',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            'MathType',
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'PasteFromOfficeEnhanced',
            'CaseChange'
        ]
    });
</script>

<script type="text/javascript">
    function language(lang) {
        // document.cookie = "ck_lang=" + lang;
        // let url = "https://cmo-group.com/investor-relations/api/language/" + lang;
        let url = "<?php echo BASE_URL; ?>" + "api/language/" + lang;
        console.log(url);
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                console.log(response);
                // $("#go_to_corporate").text(response.go_to_corporate);
                // $("#switch_lang").text(response.switch_lang);
            },
            error: function(response) {
                console.log(response);
            }
        });
        location.reload();
    }
</script>


<!-- Mobirise -->
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/popper/popper.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/datatables/jquery.data-tables.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/datatables/data-tables.bootstrap4.min.js"></script>

<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/smoothscroll/smooth-scroll.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/tether/tether.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/viewportchecker/jquery.viewportchecker.js"></script>

<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/dropdown/js/nav-dropdown.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/dropdown/js/navbar-dropdown.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/parallax/jarallax.min.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/tether/tether.min.js"></script>




<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/popup-plugin/script.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/popup-overlay-plugin/script.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/mobirise-tabs/mbr-tabs.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/theme/js/script.js"></script>
<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/formoid.min.js"></script>

<script src="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/slidervideo/script.js"></script>
  
  
<div id="scrollToTop" class="scrollToTop mbr-arrow-up">
    <a style="text-align: center;">
    <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a>
</div>
<input name="animation" type="hidden">


</body>

</html>