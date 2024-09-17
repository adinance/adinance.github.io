<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#debugs").toggle();
  });
});
</script>
<button>Debugs</button> -->
<ul class="debugs" id="debugs">
  <li>Server | <strong class="debugs-highlight"><?php echo ENVIRONMENT;?></strong></li>
  <li>Page rendered | <strong class="debugs-highlight">{elapsed_time} seconds.</strong></li>
  <!-- <li>Result | <?php //var_dump($result);?></li> -->
</ul>



<!-- <div>
    ทดสอบ
    <br>
    test
    <h1>ทดสอบ testggg</h1>
</div> -->



<!-- <form>
  <input id="x" type="hidden" name="content">
  <trix-editor input="x"></trix-editor>
</form> -->


<!-- <div class="editable"></div> -->
<!-- <script>

var editor = new MediumEditor('.editable');

var editor = new MediumEditor('.editable', {
    toolbar: {
        allowMultiParagraphSelection: true,
        buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'quote'],
        diffLeft: 0,
        diffTop: -10,
        firstButtonClass: 'medium-editor-button-first',
        lastButtonClass: 'medium-editor-button-last',
        relativeContainer: null,
        standardizeSelectionStart: false,
        static: false,
        align: 'center',
        sticky: false,
        updateOnEmptySelection: false
    }
});

</script> -->




<?php
// echo "<script>console.log(JSON.parse('" . json_encode($result) . "'));</script>";
// echo "<script>console.log(".json_encode(var_export($result, true)).");</script>";
?>