<style>

.button4 {
  border: none;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 8px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: #0F6D94; 
  color: white !important; 
  margin-top: 20px;
  /* border-radius: 4px  ; */
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.1), 0 6px 20px 0 rgba(0,0,0,0.07);
}

.button4:hover {
  background-color: #081B3A;
  color: white!important;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

</style>



<div id="top-nav">
	<?php
        $class1 = $class2 = $class3 = $class4 = $class5 =$class6 = $class7 = $class8 ="";
        switch($page_name){
        case "nav1": $class1= "class='active'"; break;
        case "nav2": $class2= "class='active'"; break;
        case "nav3": $class3= "class='active'"; break;
        case "nav4": $class4= "class='active'"; break;
        case "nav5": $class5= "class='active'"; break;
        case "nav6": $class6= "class='active'"; break;
        case "nav7": $class7= "class='active'"; break;
        case "nav8": $class8= "class='active'"; break;
        default :$class = ""; break;
        }

        ?>
        <ul class="top-nav-list">
            <li class="logo"><img src="https://cmo-group.com/2022/assets/images/_logo-menu-121x62.png" width="89"  /></li>
            <a class="button4" href="http://www.cmo-group.com/">HOME</a>
            <!--<li id="nav1" ><a href="http://www.cmo-group.com/" <?php echo $class1; ?>>HOME</a></li>-->
            <!--<li id="nav5"><a href="../about.php" <?php echo $class5; ?>>ABOUT US</a></li>  style="background-color:#0F6D94;color:white; !important;"
            <li id="nav2"><a href="../our-family.php" <?php echo $class2; ?>>OUR FAMILY</a></li>
            <li id="nav3"><a href="../our-work.php" <?php echo $class3; ?>>OUR WORK</a></li>
            <li id="nav4"><a href="../ir/" <?php echo $class4; ?>>INVESTOR RELATIONS</a></li> 
            <li id="nav6"><a href="../news.php" <?php echo $class6; ?>>NEWS&ACTIVITY</a></li>
            <li id="nav7"><a href="../career.php" <?php echo $class7; ?>>CAREER</a></li>
            <li id="nav8"><a href="../contact.php" <?php echo $class8; ?>>CONTACT US</a></li>-->
       </ul>
    
</div>

<div class="clear"></div>
    <br /><br />