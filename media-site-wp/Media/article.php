﻿<?php get_header(); ?>

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
            <div id="line-menu">
                <div id="center-menu">
        <ul>
            <li class="hamburger"onclick="myFunction();"><a href="#">☰ Меню</a></li>
        </ul>
        <ul id="nav"class="nav-hide">
            
            <li><a href="index.html">Plovdiv News</a></li>
            <li><a href="#">България</a></li>
            <li><a href="#">Светът</a></li>
            <li><a href="#">Коментар</a></li>
            <li><a href="lifestyle/allarticles.html">Лайфстайл</a></li>
            <li><a href="sport.html">Спорт</a></li>
            <li><a href="#">Моята Новина</a></li>
            <li><a href="#">Камерите</a></li>
            <li><a href="#">Галирия</a></li>
            <li><a href="#">Емисии</a></li>
            <li><a href="#">Най-четени</a></li>
            <li><a href="#">Евро 2016</a></li>
            </ul>
                    <div class="cleaner_h0"></div>
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
                <div class="cleaner_h10"></div>

                <ul id="crumbs">
                    <li><a href="#">Plovdiv News</a></li>
                    <li><a href="#">Водещи Новини</a></li>
                    <li>България и Гърция ще строят жп линия между Бяло и Черно море</li>
                </ul>

                <div class="cleaner_h5"></div>
                <img class="img-add-center" src="images/iklan-center-top.png" />
                <div class="cleaner_h5"></div>

                <h3>България и Гърция ще строят жп линия между Бяло и Черно море</h3>
                <div id="content-attribute">
                    <span style="float:left; width:200px; text-align:left;">01.08.2016 | 16:38</span>
                    <span style="float:right; width:390px; text-align:right;">
                        Прегледано: <strong>57</strong> Коментари | <strong>0</strong> Коментарай | Share
                        <script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'> Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'> Facebook</a> ");
                        </script>
                    </span>
                    <div class="cleaner_h10"></div>
                    <div class="cleaner_h0"></div>
                </div>
                <div class="cleaner_h10"></div>
                <div id="detail-img-with-article">
                    <img class="text" src="articles-images/2.jpg" width="300" height="200" />
                    <div class="cleaner_h10"></div>
                    <strong class="non">Други Новини</strong>
                    <ul class="drugi-nov">
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                        <li><a href="#">България и Гърция ще строят жп линия между Бяло и Черно море</a></li>
                    </ul>
                </div>
                <div class="text"> Двете държави нямат никакви различия по кризисните въпроси, стана ясно след разговори между правителствата
                <br /><br />
                Връзката между Бургас и Александруполис отново стана актуална. България и Гърция ще строят жп линия между Бяло и Черно море. Тя ще свързва двата града и заради общите ни енергийни проекти.
                <br /><br />
                Двете държави нямат никакви различия по кризисните въпроси, установиха двете правителства по време на съвместното си заседание в резиденция „Бояна”.
                <br /><br />
                Така решиха да свържат с жп линия двете пристанища.
                <br /><br />
                Българската страна настоява и за изграждането на газовата интерконекторна връзка между Комотини и Стара Загора, за да се довърши газовият хъб "Балкан". За нея започва обявяването на конкурси.
                <br /><br />
                „Идеята е да се разшири с добавяне на два интермодални терминала в Александруполис и Бургас, като уговорката ни е в първата седмица на септември да се срещнем и след това да отидем до Брюксел, за да видим дали е удачно да се финансира проектът по плана „Юнкер”, коментира транспортният министър Ивайло Московски.
                <br /><br />
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jysWuGTe7Gs" frameborder="0" allowfullscreen></iframe>

                <div class="cleaner_h20"></div>
                <div id="content-attribute">
                    <span style="float:left; width:200px; text-align:left;">Добавено на, 02 Август 2016	 | 21:32</span>
                    <span style="float:right; width:390px; text-align:right;">
                        Добавени: <strong>57</strong> коментари | <strong>0</strong> коментирай | Share
                        <script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'> Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'> Facebook</a> ");
                        </script>
                    </span>
                    <div class="cleaner_h0"></div>
                </div>

                <div class="cleaner_h5"></div>
                <img class="img-add-center" src="images/iklan-center-top.png" />
                <div class="cleaner_h5"></div>
                <div id="content-attribute">
                    <strong>Коментирай</strong>
                    <div class="cleaner_h0"></div>
                </div>
                <div class="cleaner_h10"></div>
                <div id="comment-box">
                    <form method="post" action="">
                        <table cellpadding="5" cellspacing="0" border="0">
                            <tr><td>Име</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
                            <tr><td>Email</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
                            <tr><td>Коментар</td><td>:</td><td><textarea class="input-comment"></textarea></td></tr>
                            <tr><td></td><td></td><td><img src="images/captcha.jpg" /></td></tr>
                            <tr><td>Антиспам код</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
                            <tr><td></td><td></td><td><input type="image" src="images/comment.jpg" /> <input type="image" src="images/cancel.png" /></td></tr>
                        </table>
                    </form>
                    <div class="cleaner_h10"></div>
                    <div id="footnote-comment-box">
                        Когато коментирам винаги ще е позитивно
                        Когато критикувам, критиката винаги ще е градивна
                        Ще помня, че "казаната дума е хвърлен камък" и "тежка дума не се забравя".
                    </div>
                </div>

                <div class="cleaner_h5"></div>
                <img class="img-add-center" src="images/iklan-center-top.png" />
                <div class="cleaner_h5"></div>

                <div class="cleaner_h40"></div>

            </div>
            <div class="cleaner_h0"></div>

        </div>
    </div>
    
<?php get_footer(); ?>
