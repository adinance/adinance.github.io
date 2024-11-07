<style>
  body {
    background-color: #525659;
  }
</style>
<div class="align-center">
  <?php foreach ($src as $file) { ?>
    <img src="<?php echo BASE_URL; ?>assets/uploads/files/<?php echo $file;?>" width="98%">
    <br>
  <?php } ?>
</div>
<script src="<?php echo BASE_URL . TEMPLATE ; ?>assets/web/assets/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
  $(function() {
    $(this).bind("contextmenu", function(e) {
      e.preventDefault();
    });
  });
  $(function() {
    $(this).bind("keydown", function(e) {
      if (e.ctrlKey || e.metaKey) {
        e.preventDefault();
      }
    });
  });
</script>