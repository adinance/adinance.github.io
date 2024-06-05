<!-- Logo (Max. width = 200px) -->
<!-- <p id="logo"><img src="images/logo.jpg" alt="Home" title="back to Intranet"  /></p> -->

<?php

if(isset($_REQUEST['company_id'])) {
    if($_REQUEST['company_id']=='1'){
        echo '<p id="logo"><img src="images/logo.jpg" alt="Home" title="back to Intranet"  /></p>';
    }elseif ($_REQUEST['company_id']=='2') {
        echo '<p id="logo"><img src="images/nerve-creative.png" alt="Home" title="back to Intranet"  /></p>';
    }elseif ($_REQUEST['company_id']=='3') {
        echo '<p id="logo"><img src="images/pm-center-200.jpg" alt="Home" title="back to Intranet"  /></p>';
    }elseif ($_REQUEST['company_id']=='5') {
        echo '<p id="logo"><img src="images/muses-200.jpg" alt="Home" title="back to Intranet"  /></p>';
    }elseif ($_REQUEST['company_id']=='7') {
        echo '<p id="logo"><img src="images/momentum-s-200.jpg" alt="Home" title="back to Intranet"  /></p>';
    }elseif ($_REQUEST['company_id']=='9') {
        echo '<p id="logo"><img src="images/cm-live-200.jpg" alt="Home" title="back to Intranet"  /></p>';
    }else{
        echo '<p id="logo"><img src="images/logo.jpg" alt="Home" title="back to Intranet"  /></p>';
    }

}else {
    echo '<p id="logo"><img src="images/logo.jpg" alt="Home" title="back to Intranet"  /></p>';
}