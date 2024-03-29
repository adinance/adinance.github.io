<!-- <button onclick="topFunction()" id="BttBtn" title="Go to top">Top</button> -->

<div id="BttBtn" class="scrollToTop mbr-arrow-up" onclick="topFunction()">
</div>


<script>
// Get the button
let bttbutton = document.getElementById("BttBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    bttbutton.style.display = "block";
  } else {
    bttbutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>