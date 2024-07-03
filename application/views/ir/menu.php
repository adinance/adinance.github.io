<section>
    <!-- <div class="container-fluid"> -->
    <div class="menu-top text-center text-uppercase">
        <h1><strong><?php echo $menu; ?></strong></h1>
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