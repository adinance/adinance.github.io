<!--<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
//		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
//		text.innerHTML = "hide";
	}
} 
</script>-->
<!--<a id="displayText" href="javascript:toggle();">show</a> <== click Here
<div id="toggleText" style="display: none"><h1>peek-a-boo</h1></div>-->
<script>
    $(document).ready(function(){
        $("#displayText").click(function () {
            $("#toggleTextOutboundLetter").slideToggle("slow");
            $("#toggleTextEmembers").slideToggle("slow");
        });
    });
</script>
<!--  <style>
  p { width:400px; }
  </style>
  <button>Toggle</button>
  <p>
    This is the paragraph to end all paragraphs.  You
    should feel <em>lucky</em> to have seen such a paragraph in
    your life.  Congratulations!
  </p>-->
  
<?php
echo '<ul class="box">';
//if($_SESSION['eit']=='1'){
//    echo '<li><a id="displayText" href="javascript:toggle();">Access Tools</a>';
//    echo '<ul >';
//    echo '<li id="toggleTextOutboundLetter" style="display: none" ><a href="main.php?menu=access_list&pages=access_list">e-Documents Management > Outbound Letter</a></li>';
//    echo '</ul>';
//    echo '</li>';
//}
if(isset($_SESSION['eit'])){
if($_SESSION['eit']=='1'){
    echo '<li><a href="main.php?menu=access_list&pages=access_list">Access Tools</a></li>';
//    echo '<ul>';
//    echo '<li><a href="main.php?menu=access_list&pages=access_list">e-Documents Management > Outbound Letter</a></li>';
//    echo '</ul>';
//    echo '<ul>';
//    echo '<li><a href="main.php?menu=access_emembers_list&pages=access_emembers_list">CMO Members</a></li>';
//    echo '</ul>';
}
}
if(isset($_SESSION['emembers'])){
//if($_SESSION['emembers']=='2') {
//    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=1">CMO Members</a></li>';
//    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=2">The Eyes Members</a></li>';
//}

//if($_SESSION['emembers']=='3' or $_SESSION['emembers']=='4'){ 
    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=1"><i><b>CMO</b> Members</i></a></li>';
    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=2"><i><b>Nerve Creative</b> Members</i></a></li>';
    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=3"><i><b>PM Center</b> Members</i></a></li>';
    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=5"><i><b>Muse</b> Members</i></a></li>';
    // echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=6"><i><b>Muse K Agency</b> Members</i></a></li>';
    echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=7"><i><b>Momentum S</b> Members</i></a></li>';
    // echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=8"><i><b>CM Lab</b> Members</i></a></li>';
    // echo '<li><a href="main.php?menu=employee_list&pages=employee_list&company_id=9"><i><b>CM Live</b> Members</i></a></li>';
//}
}
//echo '<li><a href="https://docs.google.com/a/cm.co.th/spreadsheets/d/1iz3HYd02xBIghWQGgVQ44KAqtupVAXAG7uuqShn_LSc/edit?usp=sharing">PM Center Contact Document</a></li>';
//echo '<li><a href="https://docs.google.com/a/cm.co.th/spreadsheets/d/1i6I3NjVea74s6T4VKKm3AHzsVa7SB40w0n6sKPV9j5I/edit?usp=sharing">The Eyes Contact Document</a></li>';
echo '</ul>';
?>
<!--        <li ><a href="main.php?menu=access_list&pages=access_list">Document Managements Tools</a>  Active 
                <ul>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum</a></li>
            </ul>
        </li>-->
        
<!--            <li><a href="#">Lorem ipsum</a></li>
        <li id="submenu-active"><a href="#">Lorem ipsum</a>
            <ul>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum</a></li>
            </ul>
        </li>
        <li><a href="#">Lorem ipsum</a></li>-->

