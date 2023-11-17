

</body>

<script src="<?php echo BASE_URL; ?>assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/popper/popper.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/smoothscroll/smooth-scroll.js"></script>
<script src="<?php echo BASE_URL; ?>assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/tether/tether.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="<?php echo BASE_URL; ?>assets/dropdown/js/nav-dropdown.js"></script>
<script src="<?php echo BASE_URL; ?>assets/dropdown/js/navbar-dropdown.js"></script>
<script src="<?php echo BASE_URL; ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/parallax/jarallax.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="<?php echo BASE_URL; ?>assets/theme/js/script.js"></script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up">
    <a style="text-align: center"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a>
</div>
<input name="animation" type="hidden" />



<!-- slick start-->

<script src="<?php echo BASE_URL; ?>assets/slick/js/jquery.js"></script>
<script src="<?php echo BASE_URL; ?>assets/slick/js/slick.min.js"></script>
<script>
    $('.carousel-view').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<!-- slick end-->

<!-- hamburger script start -->

<script>
    function toggleham(x) {
        x.classList.toggle("change");

        let myMenu = document.getElementById('myMenu');
        if (myMenu.className === 'menu') {
            myMenu.className += ' menu-active'
        } else {
            myMenu.className = 'menu';
        }
    }
</script>

<!-- hamburger script end -->




<!-- bg -->

<script>
    const video = document.getElementById('video');
    const playPauseButton = document.getElementById('playPauseButton');
    const muteButton = document.getElementById('muteButton');
    const unmuteButton = document.getElementById('unmuteButton');

    playPauseButton.addEventListener('click', togglePlayPause);
    muteButton.addEventListener('click', muteVideo);
    unmuteButton.addEventListener('click', unmuteVideo);

    function togglePlayPause() {
        if (video.paused) {
            video.play();
            playPauseButton.textContent = 'Pause';
        } else {
            video.pause();
            playPauseButton.textContent = 'Play';
        }
    }

    function muteVideo() {
        video.muted = true;
        muteButton.style.display = 'none';
        unmuteButton.style.display = 'inline-block';
    }

    function unmuteVideo() {
        video.muted = false;
        muteButton.style.display = 'inline-block';
        unmuteButton.style.display = 'none';
    }
</script>

</html>