﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>For Ladiess</title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script language="javascript" src="js/jquery.ticker.js"></script>
<script language="javascript" src="js/site.js"></script>
<script src="js/s3Slider.js" type="text/javascript"></script>
<script src="js/button.top.js"type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/button.top.css"rel="stylesheet"type="text/css"/>
<link rel="stylesheet" href="css/media-queries.css">
<link rel="stylesheet" href="css/style1.css">
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
			<li><a href="#">Изнася ви България оръжия за Сирия</a></li>
			<li><a href="#">Бойко Борисов поискал помощ от Ангела Меркел за охраната на границата</a></li>
			<li><a href="#">Защитата: Обвинението за тероризъм срещу тримата сирийци е плод на натиск</a></li>
			<li><a href="#">Безкомпромисен Григор Димитров се класира за четвъртфинал в Торонто</a></li>
		</ul>
	</div>

	</div>
	</div>
	</div>

	<div class="cleaner_h30"></div>
	<div id="line-header">
	<div id="center-header">
	<div id="left-center-header">
		<img id="logo"src="images/logo.png" />
	</div>
	<div id="right-center-header">
		<div id="menu-right-center-header">
		<a href="#">Контакти</a> | <a href="https://www.facebook.com/plovdivnews/">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Google Plus</a> 
		</div>
		<div id="w2b-searchbox">
		<form id="w2b-searchform" action="pencarian" method="POST">
		<input type="text" id="s" name="key" value="Search..." onfocus='if (this.value == "Search...") {this.value = ""}' onblur='if (this.value == "") {this.value = "Search...";}'/>
		<input type="image" src="images/blank.gif" id="sbutton" />
		</form>
		</div>
		<div class="cleaner_h0"></div>
		<div id="date-right-center-header">
		Добре дошли посетители | <script src="js/clock.js" type="text/javascript"></script><span id="clock"></span>
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
			
			<li><a href="index.html">Plovdiv News</a></li>
			<li><a href="#">България</a></li>
			<li><a href="#">Светът</a></li>
			<li><a href="#">Коментар</a></li>
			<li><a href="allarticles.php">Лайфстайл</a></li>
			<li><a href="../sport.php">Спорт</a></li>
			<li><a href="#">Моята Новина</a></li>
			<li><a href="#">Камерите</a></li>
			<li><a href="#">Галирия</a></li>
			<li><a href="#">Емисии</a></li>
			<li><a href="lifestyle/lifestyle/For_Ladies.php">За Жената</a></li>
			<li><a href="#">Евро 2016</a></li>
			
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

<div id="wrapper">
	<div id="ladies-top-menu">
		<ul>
			<li><a href="#" class="active">Начало</a></li>
			<li><a href="#">Свободно време</a></li>
			<li><a href="#">Красота</a></li>
			<li><a href="#">Здраве</a></li>
		</ul>

	</div> <!--ladies-top-menu-->

	<div id="ladies-top-news">
		<div id="top-new">
			<h2>Топ новини</h2>
		</div>
		<div id="top-1">
			<a href="#">
				<span> <img src="images/coctails.jpg"/> </span>
				<span><h2>Заглавие на новина "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h2></span>
			</a>
			<span><p>Новина "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></span>
		</div> <!--top-1-->

		<div id="top-2">
			<a href="#">
				<span> <img src="images/Beachbody-Blog-Pumpkin-Spice-Latte.jpg"/> </span>
				<span><h2>Заглавие на новина "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h2></span>
			</a>
			<span><p>Новина "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></span>
		</div> <!--top-2-->
	</div> <!--ladies-top-news-->

	<div id="category">
		<div class="category">
			<div class="category-head">
				<a href="#"><h2> &#9749; Свободно време</h2></a>
			</div>

			<div class="category-box">
				<div class="category-left">
					<a href="#"><img src="images/coffee.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</div>
				<div class="category-right">
					<section>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<a href="#"><span><p>Виж всички &raquo;</p></span></a>
					</section>
				</div>
			</div>
		</div> <!--class-category-->

		<div class="category">
			<div class="category-head">
				<a href="#"><h2> &#x2740; Красота</h2></a>
			</div>

			<div class="category-box">
				<div class="category-left">
					<a href="#"><img src="images/devushka-model-makiyazh-vzglyad-7178.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</div>
				<div class="category-right">
					<section>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<a href="#"><span><p>Виж всички &raquo;</p></span></a>
					</section>
				</div>
			</div>
		</div> <!--class-category-->

		<div class="category">
			<div class="category-head">
				<a href="#"><h2> &#x2764; Здраве</h2></a>
			</div>

			<div class="category-box">
				<div class="category-left">
					<a href="#"><img src="images/Healthy-Lifestyle-1.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</div>
				<div class="category-right">
					<section>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<article>
							<a href="#"> <img src="images/wallpaper.jpg"/></a>
							<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
						</article>
						<a href="#"><span><p>Виж всички &raquo;</p></span></a>
					</section>
				</div>
			</div>
		</div> <!--class-category-->
	</div> <!--category-->

	<div id="other">
		<div id="ladies-top-articles">
			<div id="ladies-top-articles-head">
				<h3>ТОП статии</h3>
			</div>
			<div id="ladies-top-articles-box">
				<article>
					<a href="#"> <img src="images/wallpaper.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</article>
				<article>
					<a href="#"> <img src="images/wallpaper.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</article>
				<article>
					<a href="#"> <img src="images/wallpaper.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</article>
				<article>
					<a href="#"> <img src="images/wallpaper.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</article>
				<article>
					<a href="#"> <img src="images/wallpaper.jpg"/></a>
					<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
				</article>
			</div>
		</div> <!--ladies-top-articles-->

		<div id="ladies-select-recepy">
			<div id="ladies-select-recepy-head">
				<h3>&#9825; Избрана рецепта</h3>
			</div>
			<div id="ladies-select-recepy-box">
				<a href="#"> <img src="images/torta.jpg"/></a>
				<a href="#"><p>Заглавие на статия "Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
			</div>
		</div>

		<div id="ladies-select-book">
			<div id="ladies-select-book-head">
				<h3>Книга на деня</h3>
			</div>
			<div id="ladies-select-book-box">
				<a href="#"> <img src="images/book.jpg"/></a>
				<a href="#"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
			</div>
		</div>

		<div id="quote">
			<div id="quote-box">
				<script type="text/javascript" src="http://100widgets.com/js_data.php?id=168"></script>
			</div>
		</div>
	</div>

</div> <!--wrapper-->

<div id="right-aside">
	<div id="clock">
		<script type="text/javascript" src="http://100widgets.com/js_data.php?id=82"></script>
	</div>
</div>

<footer>
	<div id="footer-menu">
	<div id="center-footer-menu"><a href="#">Контакти </a>| <a href="https://www.facebook.com/plovdivnews/">Facebook</a> | <a href="#">Twitter</a> <a href="#">Коментар</a> | <a href="#">Google Plus</a></div>
	</div>

	<div id="footer">
	<div id="center-footer">
	Copyright © 2016 IMG Academy Plovdiv.<br />
	Powered by : <a href="https://www.facebook.com/petia.stoianova.587">Петя Иванова</a> | <a href="https://www.facebook.com/elena.mumdzhieva">Ели Мумджиева </a> | <a href="https://www.facebook.com/Svetoslav.Slavov.bg">Светослав Славов</a> | <a href="https://www.facebook.com/ivan.timov">Иван Тимов</a>
	</div>
	</div>
	<a href="#" class="scrollToTop"></a>
</footer>
</body>
</html>
