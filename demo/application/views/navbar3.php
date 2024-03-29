<!-- for localhost start -->





<section>

  <div class="main-wrapper">
    <nav class="navbar3">






      <!-- <div class="LOGO">
          <a href="http://localhost/adinance.github.io/demo/index.php/Home"><img src="<?php echo BASE_URL; ?>assets/images/cmo-white-164x62.png" /></a>
          <button type="button" class="navbar3-toggler">
            <i class="fas fa-bars"></i>
          </button>
        </div> -->

      <div class="LOGO">
        <a href="index.html" class="navbar-brand"><img src="<?php echo BASE_URL; ?>assets/images/cmo-white-164x62.png" /></a>
        <button type="hambtn" class="navbar3-toggler">
          <i class="fas fa-bars"></i>
        </button>
      </div>



      <div class="navbar3-collapse">
        <ul class="navbar3-nav">




          <li>
            <a href="#about_uscont">ABOUT</a>
          </li>
          <li>
            <a href="http://localhost/adinance.github.io/demo/index.php/Services">SERVICES</a>
          </li>
          <li>
            <a href="http://localhost/adinance.github.io/demo/index.php/Work">WORKS</a>
          </li>
          <li>
            <a href="http://localhost/adinance.github.io/demo/index.php/News">NEWS</a>
          </li>
          <li>
            <a href="https://cmo-group.com/ir/index.php?lang=en&menu=home" target="_blank">INVESTORS</a>
          </li>
          <li>
            <a href="https://cmo-group.com/creative-play-ground.html" target="_blank">SPACE RENTAL</a>
          </li>
          <li>
            <a href="https://career.cmo-group.com/" target="_blank">CAREERS</a>
          </li>
          <li>
            <a href="#contract">CONTACT US</a>
          </li>
          <li>
            <a href="#footer2-l">TH</a>
          </li>

        </ul>




      </div>







    </nav>
  </div>

  <!-- for localhost end -->


</section>








<script>
  $(document).ready(function() {
    $('.navbar3-toggler').click(function() {
      $('.navbar3-collapse').slideToggle(300);
    });

    smallScreenMenu();
    let temp;

    function resizeEnd() {
      smallScreenMenu();
    }

    $(window).resize(function() {
      clearTimeout(temp);
      temp = setTimeout(resizeEnd, 100);
      resetMenu();
    });
  });


  const subMenus = $('.sub-menu');
  const menuLinks = $('.menu-link');

  function smallScreenMenu() {
    if ($(window).innerWidth() <= 992) {
      menuLinks.each(function(item) {
        $(this).click(function() {
          $(this).next().slideToggle();
        });
      });
    } else {
      menuLinks.each(function(item) {
        $(this).off('click');
      });
    }
  }

  function resetMenu() {
    if ($(window).innerWidth() > 992) {
      subMenus.each(function(item) {
        $(this).css('display', 'none');
      });
    }
  }
</script>














<!-- <div class="  logo-container " style="display:flex ;justify-content: flex-end ; gap: .25rem;">
  <a href="https://www.facebook.com/CMOGroupTH/" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-FB.png"></img></a>
  <a href="https://www.instagram.com/cmogroupth/" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-IG.png"></img></a>
  <a href="https://twitter.com/CMOGroupTH" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-Twitter.png"></img></a>
  <a href="https://www.tiktok.com/@cmogroupth" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-tiktok.png"></img></a>
  <a href="https://www.threads.net/@cmogroupth" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-Threads-.png"></img></a>
  <a href="https://page.line.me/798nqsnv" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-Line.png"></img></a>
  <a href="https://www.youtube.com/@cmo-group" target="_blank"><img style="width: 22px;height: 22px;" src="<?php echo BASE_URL; ?>assets/images/icon/Logo-Youtube.png"></img></a>
</div> -->