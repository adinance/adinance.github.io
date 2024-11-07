<?php

ob_start();

// language.
$lang = $_REQUEST['lang'];
$language = 'th';
if(isset($lang) && $lang=='en') $language = 'en';
$language .= '/';

// module
$mod = @$_REQUEST['mod'];
$module = '';
if(isset($mod)) $module = $mod.'/';

// sub module
$submod = @$_REQUEST['submod'];
$subModule = '';
if(isset($submod)) $subModule = $submod.'/';

// menu
$menu = @$_REQUEST['menu'];
$file = 'home';
if(isset($menu)) $file = $language.$module.$subModule.$menu;

// file
$file .= '.php';

?>
<?php include('header.php'); ?>
    <div style="height:23px;">&nbsp;</div>
    <div id="wrapper" style="min-height:400px;">
    <?php include('menu-top.php'); ?>
    <div id="ir_container">
        <div id="content_container">
            <div id="img_title"><img src="../image/banner.jpg" width="850" height="150" /></div>	
            <br />
            <?php include($language.'/menu.php'); ?>
            <div id="panel_right">
                <div id="ir_content">
                    <a href="<?php echo curPageURL().'&lang=en'?>">EN</a> / 
                    <a href="<?php echo curPageURL().'&lang=th'?>">TH</a>
                    <?php include($file); ?>					       	
                </div>
            </div>
        <div class="clear"></div>
        </div>
    </div>
    </div>
<?php include "footer.php" ?>