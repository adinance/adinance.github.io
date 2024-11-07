<?php
include "inc/config_txt.php";
?>
<p align="center"><?=$cms_txt_footer?></p>
<script>

(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event;

    Event.onDOMReady(function() {
        var layout = new YAHOO.widget.Layout({
            units: [
                { position: 'top', height: 60, body: 'top1', resize: false },
				{ position: 'bottom', height: 50, resize: false, body: 'bottom1' },
                { position: 'left', header: 'Guide', width: 200, resize: true, body: 'left1', collapse: true,   collapseSize: 25, scroll: true, animate: true },
                { position: 'center', body: 'center1',scroll:true, gutter: '0px', collapse:true }
            ]
        });
        layout.render();
     
       
    });


})();
</script>