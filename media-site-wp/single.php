<?php get_header(); ?>

    <div id="content">
        <div id="center-content">
		<?php get_sidebar(); ?>
            
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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>
                <!--<h3>България и Гърция ще строят жп линия между Бяло и Черно море</h3>
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
				-->
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
