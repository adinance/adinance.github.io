<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../inc/config.php"; 
?>
<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo PAGETITLE?></title>
<!--<style>
                        html {
                          filter: grayscale(100%);
                          -o-filter: grayscale(100%);
                          -moz-filter: grayscale(100%);
                          -webkit-filter: grayscale(100%);
                          filter: gray;
                        }
                        </style>-->
<meta name="keywords" content="event organizer, event organiser, thai event, thailand event, thai event organizer, thailand event organizer, event organizer bangkok, event bangkok, imc, imc thailand, activation, activation thailand, experiential marketing,experiential marketing thailand
cm, cmo, cmc, cm expertise, icm, odyssey, cm art, mice, cm mice, the glitz, cmex, integrated marketing communications, creative campaign, creative campaign thailand. pco, pco thailand, pco bangkok, professional convention organizer, professional conference organizer, peo, peo thailand, peo bangkok, professional exhibition organizer, thailand exhibition, bangkok exhibition
creative organizer,sermkhun, sermkhun kunawong, kunawong, event supply, event supplies, marketing communication consultant,creative event management, creative event planning, event planner, event agency,creative agency,creative marketing
creative company, creative playground, bangkok creative playground, infinite creativity, blasting infinite creativity, 360๐ experience creator, event management
"/>

<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>">



<!-- cmo -->
<link rel="shortcut icon" href="https://cmo-group.com/assets/images/ico/logo.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/datePicker.css"/>

<!-- scg -->
<!--<link rel="stylesheet" type="text/css" href="http://ir.listedcompany.com/images/css_si_common.css">
<link rel="stylesheet" type="text/css" href="http://ir.listedcompany.com/images/css_ir_common.css">-->
<link rel="stylesheet" type="text/css" href="css/css_ir_scc.css">
<link rel="stylesheet" type="text/css" href="css/css_ir_scc_download.css">

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='../image/plus.gif' class='statusicon' />", "<img src='../image/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "slow", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

ddaccordion.init({
	headerclass: "submenuheader1", //Shared CSS class name of headers group
	contentclass: "submenu1", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='../image/plus.gif' class='statusicon' />", "<img src='../image/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "slow", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>


</head>
<style>
body{
    padding:0px;
    margin:0px;
}
/* ---- text Menu---- */
.text_Menu {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	font-weight: bold;
	background-color:#ED1C24;
	color: #FFFFFF;
}
.text_Menu_Over {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	font-weight: bold;
	background-color:#F0F0EA;
	color: #FF0000;
}
.text_Ex_Menu_Top {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	font-style: normal;
	color: #666666;
}
.text_Sub_Menu_Top {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	background-color:#C9C9C2;
	color: #666666;
}
.text_Sub_Menu_Top  a{
	display:block;
	padding:4px 0px;
}
.text_Sub_Menu_Top_Over {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	background-color:#F0F0EA;
	color: #FF0000;
}
.text_Sub_Menu_Left {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	background-color:#F0F0EA;
	color: #666666;
}
.text_Sub_Menu_Left_Over {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11px;
	font-weight: bold;
	background-color:#FFFFFF;
	color: #FF0000;
}
/* ---- link default ---- */
a {
	font-family: "Tahoma", Thonburi, Arial, sans-serif;
	font-size: 11 px;
	color : #666666;
	text-decoration: none;
}
a:visited {
	color : #666666;
	text-decoration: none;
}
a:active {
	color : #FF6600;
	text-decoration: none;
}
a:hover {
	color : #FF0000;
	text-decoration:underline;
}
</style>


<style type="text/css">
.glossymenu{
margin: 5px 0;
padding: 0;
width: 170px; /*width of menu*/
border: 1px solid #9A9A9A;
border-bottom-width: 0;
}

.glossymenu a.menuitem{
background: black url(../image/glossyback.gif) repeat-x bottom left;
font:  12px "Tahoma", Thonburi, Arial, sans-serif;
color: white;
display: block;
position: relative; /*To help in the anchoring of the ".statusicon" icon image*/
width: auto;
padding: 4px 0;
padding-left: 10px;
text-decoration: none;
}


.glossymenu a.menuitem:visited, .glossymenu .menuitem:active{
color: white;
}

.glossymenu a.menuitem .statusicon{ /*CSS for icon image that gets dynamically added to headers*/
position: absolute;
top: 5px;
right: 5px;
border: none;
}

.glossymenu a.menuitem:hover{
background-image: url(../image/glossyback2.gif);
}

.glossymenu div.submenu{ /*DIV that contains each sub menu*/
background: white;
}

.glossymenu div.submenu ul{ /*UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
}

.glossymenu div.submenu ul li{
border-bottom: 1px solid gray;
}

.glossymenu div.submenu ul li a{
display: block;
font: normal 12px "Tahoma", Thonburi, Arial, sans-serif;
color: black;
text-decoration: none;
padding: 2px 0;
padding-left: 10px;
}

.glossymenu div.submenu ul li a:hover{
background: #e3e4e5;
colorz: white;
}

</style>


<!--<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a{ text-decoration:none; }
a.dp-choose-date {
	float: left;
	width: 32px;
	height:15px;
	height: 16px;
	padding: 0;
	margin: 0;
	margin-left:140px;
	margin-top:-12px;
	display: block;
	background: url(image/news/calendar.png) no-repeat;
	overflow:hidden;
	font-size:0px;
	color:#fff;
	line-height:15px;
}
.st-accordion ul { padding:0; margin:0;  }
.st-accordion ul li{
	height:auto;
	padding:0; margin:0;
	border-left:1px solid #c8c7c7;
	border-right:1px solid #c8c7c7;
	border-bottom:1px solid #c8c7c7;
	list-style:none;


}
.st-accordion ul li > a span{

}
.st-accordion{
    width:780px;

}
.st-accordion ul li{
	padding:0; margin:0;
	top:0;
	left:0;
    overflow: hidden;
	list-style:none;
	text-align:left;

}
.st-accordion ul li:first-child{
    padding:0; margin:0;

}

.st-title{ height:21px; line-height:20px; width:780px;padding:0; margin:0; background:#000; background: url(image/arrow-nonal.jpg) no-repeat #000; ;
	padding:3px 10px 0px 40px; color:#fff; text-decoration:none; font-weight:bold;}
.st-title-open{ height:21px; line-height:20px; width:780px;padding:0; margin:0; background:#000; background: url(image/arrow-down.jpg) no-repeat #000; ;
	padding:3px 10px 0px 40px; color:#fff; text-decoration:none; font-weight:bold;}
.st-link a {
    font-size: 12px;
	color:#fff;

	position: relative;
	text-decoration:none;
	padding:0; margin:0;
	margin-top:0;
    -webkit-transition:  color 0.2s ease-in-out;
	-moz-transition:  color 0.2s ease-in-out;
	-o-transition:  color 0.2s ease-in-out;
	-ms-transition:  color 0.2s ease-in-out;
	transition:  color 0.2s ease-in-out;
}

.st-link2 a {
    font-size: 12px;
	color:#fff;

	position: relative;
	text-decoration:none;
	padding:0; margin:0;
	margin-top:0;
    -webkit-transition:  color 0.2s ease-in-out;
	-moz-transition:  color 0.2s ease-in-out;
	-o-transition:  color 0.2s ease-in-out;
	-ms-transition:  color 0.2s ease-in-out;
	transition:  color 0.2s ease-in-out;
}


.st-link a:hover{
    color: #fff;
	text-decoration:none;
}

.st-link2 a:hover{
    color: #fff;
	text-decoration:none;
}

.st-content-preview{
	padding-bottom:0px;
	background:#fff;
	color:#333;
	min-height:125px;
	margin:0;
	padding:18px ;
	position:relative;

}

.st-content-preview p{
	font-size:  12px;
	padding-top:0px;
    color:#333;
}
.st-content{
	background:#fff;
	color:#333;
	margin:0;
	padding:18px;
	padding-top:3px;

}

.st-content p{
    font-size:  12px;
	padding-top:0px;
    color:#333;
}

.more-btn{ color:#ffc20e; cursor:pointer;  }

ul.news-list{ list-style:none; padding:0; margin:0;  }
ul.news-list li{ list-style:none; padding:0; margin:0;  float:left; border:0;}

@media screen and (max-width: 320px){
	.st-accordion ul li > a{
		font-size:36px;
	}
}

</style>-->

<style type="text/css">.head-tb {color:#231f20; font-size:11px; }
.tb-border1 {border:0;  border-bottom: 1px solid #ccc; border-right:1px solid #ccc; border-left:1px solid #ccc;  }
.tb-border2 {border-bottom: 1px solid #ccc;border-right:1px solid #ccc; }
.tb-border3 {border-bottom: 1px solid #ccc;border-right:1px solid #ccc; }
.tb-border4 {border-bottom: 1px solid #ccc; border-right:1px solid #ccc;}
.tb-tr{ color:#231f20; font-size:11px; }
td{ color:#231f20; font-size:11px; }
.tb-border1{ border:0;  border-bottom: 1px solid #ccc; border-right:1px solid #ccc; border-left:1px solid #ccc;  }
.tb-border2{ border-bottom: 1px solid #ccc;border-right:1px solid #ccc; }
.tb-border3{ border-bottom: 1px solid #ccc;border-right:1px solid #ccc; }
.tb-border4{ border-bottom: 1px solid #ccc; border-right:1px solid #ccc;}

.tb2-td1{ border-bottom: 1px solid #ccc; border-right:1px solid #ccc;  border-left:1px solid #ccc;  padding:10px;  }
.tb2-td2{ border-bottom: 1px solid #ccc; border-right:1px solid #ccc; padding:10px;}
</style>

<style type="text/css">
/*body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}*/
.head-tb{ color:#231f20; font-size:11px; }
.ir-td1{ padding:10px; padding-right:0;  border-bottom:1px dotted #ccc; border-top:1px dotted #ccc; border-left:1px solid #ccc; }
.ir-td2{ padding:10px; padding-left:3px; border-bottom:1px dotted #ccc; border-top:1px dotted #ccc; border-left:0px solid #ccc; border-right:1px solid #ccc; }
.ir-td3{ padding:10px; border-bottom:1px dotted #ccc; border-top:1px dotted #ccc;  border-right:1px solid #ccc; }


.td1{ padding:15px; padding-right:0;  border-bottom:1px dotted #ccc; border-left:1px solid #ccc; }
.td2{ padding:15px; padding-left:3px; border-bottom:1px dotted #ccc; border-left:0px solid #ccc; border-right:1px solid #ccc; }

.td3{ padding:15px; border-bottom:1px dotted #ccc;  border-right:1px solid #ccc; }
.txt-yellow{ color:#ffd268;  font-weight:bold; }
.txt-light-grey{ color:#e7e7e8; }
</style>

<!-- <body style="background:url(../image/bg3.jpg) repeat-x;" > -->
<body  >
