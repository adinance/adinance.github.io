<?php 
// innitial require value
include('configs/inc-config.php'); 

// header
include('configs/inc-header.php');

// top bar
include('configs/inc-tray.php');//include('configs/inc-menu.php');//include('configs/inc-columns.php');

// menu
echo '<div id="cols" class="box">';
include('configs/inc-main-left.php');
include('configs/inc-main-right.php');
echo '</div> ';

// footer
include('configs/inc-footer.php');
?>



