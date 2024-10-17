<!-- <section class="mbr-section content5 cid-unXTRsW6EQ" id="content5-79">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2 text-uppercase"><br><br><?php echo $menu; ?></h2>
            </div>
        </div>
    </div>
</section> -->

<section class="mbr-section content4 cid-uqdU5sUEpC" id="content4-hr">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8"></div>
        </div>
    </div>
</section>


<section class="<?php echo $menu_class; ?>" id="<?php echo $menu_id; ?>">
    
    <div class="scroll-wrapper" style="animation-duration: 60s;"></div>
    <div class="scroll-wrapper second" style="animation-duration: 60s;"></div>
    
    <div class="container text-center block-content" data-stellar-background-ratio=".5">
      <div class="row justify-content-center slider-wrapper">
        <div class="col-md-10">
          <h2 class="mbr-section-title mbr-fonts-style mbr-bold align-center display-2 text-uppercase"><?php echo $menu_main; ?></h2>
          <h4 class="mbr-text mbr-fonts-style align-center mbr-bold display-5 text-uppercase"><?php echo $menu; ?></h4><h4>
        </h4></div>
      </div>
    </div>
    
</section>

<!-- 
<section class="mbr-section content5 cid-unXTRsW6EQ" id="content5-79">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2 text-uppercase">
                    <span style="font-weight: normal;"><br><br><?php echo $menu; ?></span>
                </h2>
            </div>
        </div>
    </div>
</section> -->

<section>
    <!-- <div class="menu-top text-center">
        <h2 class="text-uppercase"><strong><?php echo $menu; ?></strong></h2>
    </div> -->

    <div class="menu-bar display-4">
        <a class="menu-left" href="<?php echo $menu_left_url; ?>">
            <?php if ($menu_left != NULL) {
                echo '◀ &nbsp;' . $menu_left;
            }?>
        </a>
        <a class="menu-right" href="<?php echo $menu_right_url; ?>">
            <?php if ($menu_right != NULL) {
                echo $menu_right . '&nbsp; ▶';
            }?>
        </a>
    </div>
</section>

<!-- <section class="mbr-section content5 cid-ugBMvIUTmD" id="content5-g">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">SUSTAINABILITY</h2>
            </div>
        </div>
    </div>
    
</section>
<div class="menu-bar">
    <a class="menu-left" href="<?php echo $menu_left_url; ?>">
        <?php if ($menu_left != NULL) {
            echo '◀ &nbsp;' . $menu_left;
        }?>
    </a>
    <a class="menu-right" href="<?php echo $menu_right_url; ?>">
        <?php if ($menu_right != NULL) {
            echo $menu_right . '&nbsp; ▶';
        }?>
    </a>
</div>
 -->

