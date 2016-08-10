<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Plovdiv News</title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script language="javascript" src="<?php bloginfo('template_directory');?>/js/jquery.ticker.js"></script>
<script language="javascript" src="<?php bloginfo('template_directory');?>/js/site.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/s3Slider.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/button.top.js" type="text/javascript"></script>
<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory');?>/css/button.top.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/media-queries.css">
<script>
$(document).ready(function() { 
   $('#slider').s3Slider({ 
      timeOut: 6000 
   });
});
</script>
</head>

<body onLoad="goforit()">
<header>
	<div id="line-top">
	<div id="center-line-top">
	<div style="padding:5px;">

	<div style="float:left; width:145px;">
	<strong>Последни : </strong>
	</div>

	<div id="hot-news">
		<ul id="js-news" class="js-hidden">
			<li><a href="<?php bloginfo('template_directory');?>/#">Изнася ли България оръжия за Сирия</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Бойко Борисов поискал помощ от Ангела Меркел за охраната на границата</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Защитата: Обвинението за тероризъм срещу тримата сирийци е плод на натиск</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Безкомпромисен Григор Димитров се класира за четвъртфинал в Торонто</a></li>
		</ul>
	</div>

	</div>
	</div>
	</div>

	<div class="cleaner_h30"></div>
	<div id="line-header">
	<div id="center-header">
	<div id="left-center-header">
		<img id="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
	</div>
	<div id="right-center-header">
		<div id="menu-right-center-header">
		<a href="<?php bloginfo('template_directory');?>/#">Контакти</a> | <a href="<?php bloginfo('template_directory');?>/https://www.facebook.com/plovdivnews/">Facebook</a> | <a href="<?php bloginfo('template_directory');?>/#">Twitter</a> | <a href="<?php bloginfo('template_directory');?>/#">Google Plus</a> 
		</div>
		<div id="w2b-searchbox">
		<form id="w2b-searchform" action="pencarian" method="POST">
		<input type="text" id="s" name="key" value="Search..." onfocus='if (this.value == "Search...") {this.value = ""}' onblur='if (this.value == "") {this.value = "Search...";}'/>
		<input type="image" src="<?php bloginfo('template_directory');?>/images/blank.gif" id="sbutton" />
		</form>
		</div>
		<div class="cleaner_h0"></div>
		<div id="date-right-center-header">
		Добре дошли посетители | <script src="<?php bloginfo('template_directory');?>/js/clock.js" type="text/javascript"></script><span id="clock"></span>
		</div>
	</div>
	</div>
	<div id="line-menu">
	<!--<div id="center-menu">
		<ul>
			<li><a href="index.html">Plovdiv News</a></li>
			<li><a href="#">България</a></li>
			<li><a href="#">Светът</a></li>
			<li><a href="#">Коментар</a></li>
			<li><a href="#">Лайфстайл</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="#">Моята Новина</a></li>
			<li><a href="#">Камерите</a></li>
			<li><a href="#">Галирия</a></li>
			<li><a href="#">Емисии</a></li>
			<li><a href="#">Най-четени</a></li>
			<li><a href="#">Евро 2016</a></li>
		</ul>
		<div class="cleaner_h0"></div>
	</div>-->
	<div id="center-menu">
		<ul>
			<li class="hamburger"onclick="myFunction();"><a href="#">☰ Меню</a></li>
		</ul>
		<ul id="nav"class="nav-hide">
			
			<li><a href="<?php bloginfo('template_directory');?>/index.php">Plovdiv News</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">България</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Светът</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Коментар</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/lifestyle/lifestyle/allarticles.php">Лайфстайл</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/page-sport.php">Спорт</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Моята Новина</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/lifestyle/lifestyle/For_Ladies.php">За Жената</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Галирия</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Емисии</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Най-четени</a></li>
			<li><a href="<?php bloginfo('template_directory');?>/#">Евро 2016</a></li>
			
			<!--<li class="icon">
			    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
			</li>-->
		</ul>
		<div class="cleaner_h0"></div>
	</div>

</header>
<script>
	function myFunction(){
		var x = document.getElementById("nav");
		if (x.className === "nav-hide") {
        x.className = "nav-show";
        //document.getElementById("center-content").style.marginTop = "200px";
	    } else {
	        x.className = "nav-hide";
	        //document.getElementById("center-content").style.marginTop = "547px";//
	        	
	    }
	}
</script>