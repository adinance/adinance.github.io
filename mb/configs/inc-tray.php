<div id="tray" class="box">
    <p class="f-left box">
        <!-- Switcher -->
        <span class="f-left" id="switcher">
                <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="images/switcher-1col.gif" alt="1 Column" /></a>
                <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="images/switcher-2col.gif" alt="2 Columns" /></a>
        </span>
<!--        Project: <strong>CMO Tools</strong>-->
        <strong><a href="http://intranet.cm.co.th" title="back to Intranet" >HOME</a></strong>
    </p>
    <?php
    if(isset($_SESSION['configs_username'])){
    if($_SESSION['configs_username']) echo '<p class="f-right">H e l l o ! &nbsp;&nbsp;<strong><a href="#">'.$_SESSION['configs_username'].'</a></strong> , &nbsp;how  are  you  today ?&nbsp; <strong><a href="main.php?menu=logout&pages=logout" id="logout">Log out</a></strong></p>';
    }
    ?>
</div>
<hr class="noscreen" />
