<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Лайфстаил</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

    
    <script language="javascript" src="js/site.js"></script>
    <script src="js/s3Slider.js" type="text/javascript"></script>
    <script src="js/button.top.js" type="text/javascript"></script>
    <script language="javascript" src="js/jquery.ticker.js"></script>

    <link href="css/style1.css" rel="stylesheet" type="text/css" />
    <link href="css/button.top.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/allarticles.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="css/media-queries.css">
    <script src="js/modernizr.custom.js"></script>

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
                    <img id="logo" src="images/logo.png" />
                </div>
                <div id="right-center-header">
                    <div id="menu-right-center-header">
                        <a href="#">Контакти</a> | <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Aasdkjhsa</a>
                    </div>
                    <div id="w2b-searchbox">
                        <form id="w2b-searchform" action="pencarian" method="POST">
                            <input type="text" id="s" name="key" value="Search..." onfocus='if (this.value == "Search...") {this.value = ""}' onblur='if (this.value == "") {this.value = "Search...";}' />
                            <input type="image" src="images/blank.gif" id="sbutton" />
                        </form>
                    </div>
                    <div class="cleaner_h0"></div>
                    <div id="date-right-center-header">
                        Добре дошли посетители |
                        <script src="js/clock.js" type="text/javascript"></script><span id="clock"></span>
                    </div>
                </div>
            </div>

            <div id="line-menu1">
                <div id="center-menu1">
                <ul>
                    <li class="hamburger" onclick="myFunction();"><a href="#">☰ Меню</a></li>
                </ul>
                <ul id="nav" class="nav-hide">
                    
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
                    
                    <!--<li class="icon">
                        <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                    </li>-->
                </ul>
                <nav id="cbp-hrmenu" class="cbp-hrmenu">
                    <ul>
                        <li>
                            <a href="index.html">Plovdiv News</a>
                        </li>
                        <li>
                            <a href="#">България</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">Водещи</a></li>
                                            <li><a href="#">Новини от света</a></li>
                                            <li><a href="#">Новините днес</a></li>
                                            <li><a href="#">Новините вчера</a></li>
                                            <li><a href="#">Най-четени</a></li>
                                            <li><a href="#">Емисии</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/fb.png" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/fb.png" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/f1.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Светът</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">Водещи</a></li>
                                            <li><a href="#">Новини от света</a></li>
                                            <li><a href="#">Новините днес</a></li>
                                            <li><a href="#">Новините вчера</a></li>
                                            <li><a href="#">Най-четени</a></li>
                                            <li><a href="#">Емисии</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/fb.png" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/fb.png" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/f1.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Коментар</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                        <li>
                            <a href="sport.html">Спорт</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">Футбол</a></li>
                                            <li><a href="#">Формула 1</a></li>
                                            <li><a href="#">Волейбол</a></li>
                                            <li><a href="#">Баскетбол</a></li>
                                            <li><a href="#">MMA</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/f1.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/f1.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/f1.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                        <li>
                            <a href="#">Моята новина</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Лайфстайл</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">АРТ</a></li>
                                            <li><a href="#">Любопитно</a></li>
                                            <li><a href="#">Музика</a></li>
                                            <li><a href="#">Култура</a></li>
                                            <li><a href="#">Технологии и наука</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/an.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kino.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/teat.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Камерите</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                         <li>
                            <a href="#">Галерия</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">Рецепти</a></li>
                                            <li><a href="#">Мода</a></li>
                                            <li><a href="#">Шопинг</a></li>
                                            <li><a href="#">Семейство</a></li>
                                            <li><a href="#">Време за теб</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Емисии</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Най-четени</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#">Евро 2016</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner"> 
                                    <div class="drop-menu">
                                        <ul>
                                            <li><a href="#">Рецепти</a></li>
                                            <li><a href="#">Мода</a></li>
                                            <li><a href="#">Шопинг</a></li>
                                            <li><a href="#">Семейство</a></li>
                                            <li><a href="#">Време за теб</a></li>
                                        </ul>
                                    </div>
                                    <div class="drop-down-under">
                                        <div class="left-art">
                                            <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="250px" height="150px;">
                                            <p>Текстът към снимката ще бъде тук</p>
                                        </div>
                                        <div class="right-art">
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                            <div class="inn-art">
                                                <img src="images/kitchen_adventurer_caramel.jpg" alt="#" width="125px" height="75px;">
                                                <p class="text">Текстът към снимката ще бъде тук</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /cbp-hrsub-inner -->
                            </div><!-- /cbp-hrsub -->
                        </li>
                        </ul>
                    </nav>
                </div>
                </div>
            </div>
    </header>
    <div id="content">
        <div id="center-content">
            <div id="left-center-content">
                <div class="cleaner_h10"></div>

                <img src="images/iklan-left.png" />
                <div class="cleaner_h10"></div>

                <script>
                    $(document).ready(function(){
                    $("a.tab").click(function () {
                    $(".active").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp();
                    var content_show = $(this).attr("title");
                    $("#"+content_show).slideDown();
                    });
                    });
                </script>
                <div class="tabbed_box">
                    <div class="tabbed_area">
                        <ul class="tabs">
                            <li><a href="javascript:void(0);" title="content_1" class="tab active">Последни</a></li>
                            <li><a href="javascript:void(0);" title="content_2" class="tab">Популярни</a></li>
                            <li><a href="javascript:void(0);" title="content_3" class="tab">Коментари</a></li>
                        </ul>
                        <div id="content_1" class="content">
                            <ul>
                                <li><a href="#">Безкомпромисен Григор Димитров се класира за четвъртфинал в Торонто</a></li>
                                <li><a href="#">Тир с плочки се обърна близо до Разград (СНИМКИ)</a></li>
                                <li><a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></li>
                                <li><a href="#">Уикилийкс” публикува гласови съобщения от комитета на Демократическата партия в САЩ</a></li>
                                <li><a href="#">Пожар бушува на границата с Турция</a></li>
                                <li><a href="#">Доброволци събират пари за спасяването на българския "Стоунхендж"</a></li>
                                <li><a href="#">Доброволци събират средства за българския „Стоунхендж”</a></li>
                                <li><a href="#">Доброволци събират средства за българския „Стоунхендж”</a></li>
                                <li><a href="#">Интернет предизвикателство помогна за научно откритие</a></li>
                                <li><a href="#">Близо 150 хил. долара за всеки наш медалист в Рио</a></li>
                            </ul>
                        </div>
                        <div id="content_2" class="content">
                            <ul>
                                <li><a href="#">Безкомпромисен Григор Димитров се класира за четвъртфинал в Торонто</a></li>
                                <li><a href="#">Тир с плочки се обърна близо до Разград (СНИМКИ)</a></li>
                                <li><a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></li>
                                <li><a href="#">Уикилийкс” публикува гласови съобщения от комитета на Демократическата партия в САЩ</a></li>
                                <li><a href="#">Пожар бушува на границата с Турция</a></li>
                            </ul>
                        </div>
                        <div id="content_3" class="content">
                            <ul>
                                <li><a href="#">Тир с плочки се обърна близо до Разград (СНИМКИ)</a></li>
                                <li><a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></li>
                                <li><a href="#">Уикилийкс” публикува гласови съобщения от комитета на Демократическата партия в САЩ</a></li>
                                <li><a href="#">Пожар бушува на границата с Турция</a></li>
                                <li><a href="#">Доброволци събират пари за спасяването на българския "Стоунхендж"</a></li>
                                <li><a href="#">Доброволци събират средства за българския „Стоунхендж”</a></li>
                                <li><a href="#">Доброволци събират средства за българския „Стоунхендж”</a></li>
                                <li><a href="#">Интернет предизвикателство помогна за научно откритие</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cleaner_h10"></div>




                <div id="sub-left-center-content">
                    <div id="single-sub-left-center-content">
                        <div id="title-sub-small">Нашия Избор</div>
                        <a href=""><h2>Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</h2></a>
                        <img src="articles-images/1.jpg" width="120" height="90" />
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират...
                    </div>
                    <div class="cleaner_h5"></div>
                    <div id="title-sub-left-center-content"><a href="#">- Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></div>
                    <div id="title-sub-left-center-content"><a href="#">- Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></div>
                    <div id="title-sub-left-center-content"><a href="#">- Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></div>
                    <div id="title-sub-left-center-content"><a href="#">- uИнтелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></div>
                    <div id="title-sub-left-center-content"><a href="#">- Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a></div>
                    <div class="index-button">Прочети още</div>
                </div>
                <div class="cleaner_h5"></div>
                <img src="images/iklan-left.png" />
                <div class="cleaner_h5"></div>


                <div id="sub-left-center-content">
                    <div id="single-sub-left-center-content">
                        <div id="title-sub-small">ЛАЙФСТАЙЛ</div>
                        <a href="">
                            <h2>
                                И все пак: Предизвикателството на ледената кофа помогна на науката
                            </h2>
                        </a>
                        <img src="articles-images/7.jpg" width="120" height="90" />
                        Заливането с кофи с ледена вода като инициатива в подкрепа на страдащите от нервнодегенеративното заболяване ALS (амиотрофичната латерална склероза, болест на Лу Гериг-б.р.) се оказа в основата на ...
                    </div>
                    <div class="cleaner_h5"></div>
                    <div id="title-sub-left-center-content"><a href="">- И все пак: Предизвикателството на ледената кофа помогна на науката</a></div>
                    <div id="title-sub-left-center-content"><a href="">- И все пак: Предизвикателството на ледената кофа помогна на науката</a></div>
                    <div id="title-sub-left-center-content"><a href="">- И все пак: Предизвикателството на ледената кофа помогна на науката</a></div>
                    <div id="title-sub-left-center-content"><a href="">- И все пак: Предизвикателството на ледената кофа помогна на науката</a></div>
                    <div id="title-sub-left-center-content"><a href="">- И все пак: Предизвикателството на ледената кофа помогна на науката</a></div>
                    <div class="index-button">Прочети още</div>
                </div>
                <div class="cleaner_h10"></div>

                <div id="sub-left-center-content">
                    <div id="single-sub-left-center-content">
                        <div id="title-sub-small">Анкета</div>
                        <div class="cleaner_h10"></div>
                        <strong>Как може да се спре паленето на стърнища?</strong>
                        <div class="cleaner_h5"></div>
                        <form method="post" action="">
                            <input type="radio" name="isi" /> С по-сериозни глоби за нарушителите<div class="cleaner_h5"></div>
                            <input type="radio" name="isi" />С информационни кампании на пожарната<div class="cleaner_h5"></div>
                            <input type="radio" name="isi" /> С изпращане на повече огнеборци по селата<div class="cleaner_h5"></div>
                            <input type="radio" name="isi" /> Друго (посочете в коментарите)<div class="cleaner_h5"></div>
                            <input id="img-vote" type="image" src="images/vote.png" /> <input id="img-results" type="image" src="images/results.png" />
                        </form>
                    </div>
                </div>
                <div class="cleaner_h5"></div>
                <img src="images/iklan-left.png" />
                <div class="cleaner_h5"></div>

                <div id="sub-left-center-content">
                    <div id="single-sub-left-center-content">
                        <div id="title-sub-small">Странцата на Plovdiv News в Facebook</div>
                        <div class="cleaner_h10"></div>
                        <img src="images/fb.png" />
                    </div>
                </div>
                <div class="cleaner_h10"></div>

                <div id="sub-left-center-content">
                    <div id="single-sub-left-center-content">
                        <div id="title-sub-small">Нашите Потребители Online</div>
                        <div class="cleaner_h10"></div>
                        109 User Online
                    </div>
                </div>
        </div>


    <div id="right-center-content">
        <div class="articalls">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <img src="images/an.jpg" width="500px" height="250px" />
                      <p class="flex-caption">Холивуд</p>
                        </li>
                        <li>
                        <img src="images/kino.jpg" width="500px" height="250px" />
                      <p class="flex-caption">Кино</p>
                        </li>
                        <li>
                        <img src="images/teat.jpg" width="500px" height="250px" />
                      <p class="flex-caption">Театър</p>
                        </li>
                  </ul>
                </div>
            <div class="posts">
            <div class="all-art">
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                         В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                </div>
                    <div class="cleaner_h5"></div>
                    <img class="img-add-center"src="images/iklan-center-top.png" />
                    <div class="cleaner_h5"></div>
                <div class="all-art">
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                         В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                </div>
                <div class="all-art">
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                         В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                </div>
                    <div class="cleaner_h5"></div>
                    <img class="img-add-center"src="images/iklan-center-top.png" />
                    <div class="cleaner_h5"></div>
                    <div class="all-art">
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                         В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                </div>
                <div class="all-art">
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                         В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                <div class="post-num">
                <a href="#">
                    <img src="articles-images/1.jpg" height="145" width="250">
                    <time class="published updated" datetime="2013-10-31 07:12:05">October 31, 2013</time>
                    <h2 class="post-title">
                            <a href="#">Интелектуалци зоват Красимир Каракачанов да се кандидатира за президент</a>
                    </h2>
                    <p>
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        В писмо български интелектуалци и общественици призовават патриотичните сили в страната за обединение на предстоящия президентски вот и да номинират... 
                        </p> 
                    </a>
                </div>
                </div>
            </div>  
            <div class="page-slider">
                <nav>
                    <a href="#">1</a> |
                    <a href="#">2</a> |
                    <a href="#">3</a> |
                    <a href="#">4</a>
                </nav>
            </div>   
        </div>
    </div>
    </div
         <div class="cleaner_h5"></div>
     </div>
    <div class="cleaner_h0"></div>
        </div>
    </div>
    <footer>
        <div id="footer-menu">
        <div id="center-footer-menu"><a href="#">Контакти </a>| <a href="#">Facebook</a> | <a href="#">Twitter</a> <a href="#">Коментар</a> | <a href="#">Aasdhjdak</a></div>
        </div>

        <div id="footer">
        <div id="center-footer">
        Copyright © 2016 IMG Academy Plovdiv.<br />
        Uchastnici,...,........,...... Tel.-62 333 420600. Fax.-62 333 414890<br />
        You come here with the IP Address 180.247.235.203<br />
        </div>
        </div>
        <a href="#" class="scrollToTop"></a>
    </footer>
    <script src="js/cbpHorizontalMenu.min.js"></script>
    <script>
        $(function() {
            cbpHorizontalMenu.init();
                    });
    </script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
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

</body>
</html>