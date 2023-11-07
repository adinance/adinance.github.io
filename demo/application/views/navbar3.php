<section>


    <div class="main-wrapper">
      <nav class="navbar3 ">
        <div class="brand-and-icon">
          <a href="http://localhost/adinance.github.io/demo/index.php/Home"><img src="<?php echo BASE_URL; ?>assets/images/cmo-white-164x62.png" /></a>
          <button type="button" class="navbar3-toggler">
            <i class="fas fa-bars"></i>
          </button>
        </div>

        <div class="navbar3-collapse">
          <ul class="navbar3-nav">
            <li>
              <a href="#" class="menu-link">
                ABOUT
                <span class="drop-icon">
                  <i class="fas fa-chevron-down"></i>
                </span>
              </a>
              <div class="sub-menu w3-animate-opacity">
                <!-- item -->
                <div class="sub-menu-item"><br>
                  <!-- <h4>top categories</h4> -->
                  <ul>
                    <li><a href="http://localhost/adinance.github.io/demo/index.php/About" style="font-weight: bold;">Who We Are</a></li>
                    <li><a href="#" style="font-weight: bold;">Vision/Mission and Cor Value</a></li>
                    <li><a href="#" style="font-weight: bold;">History and Milestones</a></li>
                    <li><a href="#" style="font-weight: bold;">Business Overview</a></li>

                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class="sub-menu-item"><br>
                  <!-- <h4>top categories</h4> -->
                  <ul>
                    <li><a href="#" style="font-weight: bold;">Company Structure</a></li>
                    <li><a href="#" style="font-weight: bold;">Board of Directors</a></li>
                    <li><a href="#">- Message frome the Chairman</a></li>
                    <li><a href="#">- Board of Directors</a></li>
                    <li><a href="#">- Sub Committees</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class="sub-menu-item" style="margin: 0%;"><br>
                  <ul>
                    <li><a href="#" style="font-weight: bold;">Management Team</a></li>
                    <li><a href="#" style="font-weight: bold;">Organizaion Structure</a></li>
                    <li><a href="#" style="font-weight: bold;">Important Informaion On the</a></li>
                    <li><a href="#" style="font-weight: bold;">Company's Employees</a></li>
                    <li><a href="#" style="font-weight: bold;">Award</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class="sub-menu-item">
                  <img src="<?php echo BASE_URL; ?>assets/images/about-subnav.png" />
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href="http://localhost/adinance.github.io/demo/index.php/Services">SERVICES</a>
            </li>
            <li>
              <a href="http://localhost/adinance.github.io/demo/index.php/Work">WORK</a>
            </li>
            <li>
              <a href="http://localhost/adinance.github.io/demo/index.php/News">NEWS</a>
            </li>
            <li>
              <a href="https://cmo-group.com/ir/index.php?lang=en&menu=home" target="_blank">INVESTOR RELATIONS</a>
            </li>
            <li>
              <a href="https://cmo-group.com/creative-play-ground.html" target="_blank">SPACERENTAL</a>
            </li>
            <li>
              <a href="https://career.cmo-group.com/" target="_blank">CAREERS</a>
            </li>
            <li>
              <a href="#footer2-l">CONTACT US</a>
            </li>
            <a style="color:#fff;font-size: 12px !important;">TH</a>
          </ul>
        </div>
      </nav>
    </div>

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