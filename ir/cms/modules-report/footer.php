<!--<script type="text/javascript">
$(document).ready(function(){ 
    $(function() {
        $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable("serialize") + '&action=updateRecordsListings&page=<?php echo $page?>&pagesize=<?php echo $pagesize?>'; 
            $.post("updateDB.php", order, function(theResponse){
                    $("#contentRight").html(theResponse);
            }); 															 
        }								  
        });
    });
});	
</script>-->
</body>
</html>