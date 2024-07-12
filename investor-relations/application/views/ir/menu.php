<section>
    <!-- <div class="container-fluid"> -->
    <div class="menu-top text-center">
        <h2 class="text-uppercase"><strong><?php echo $menu; ?></strong></h2>
    </div>

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
    <!-- </div> -->
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

