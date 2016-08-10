
<?php get_header(); ?>

<div id="content">
	<div id="center-content">
	<?php get_sidebar(); ?>
	<div id="right-center-content">
	<div class="cleaner_h10"></div>
	
<ul id="crumbs">
		<li><a href="<?php bloginfo('template_directory');?>/#">Plovdiv News</a></li>
		<li>Водещи Новини</li>
	</ul>
	
	<div class="cleaner_h5"></div>
	<img class="img-add-center" src="<?php bloginfo('template_directory');?>/images/iklan-center-top.png" />
	<div class="cleaner_h5"></div>
	
	<div id="slider">
   <ul id="sliderContent">
      <li class="sliderImage">
          <img src="<?php bloginfo('template_directory');?>/articles-images/head-1.jpg" width="610" height="270" />
          <span class="bottom"><strong><a href="#">Борисов поиска от Меркел помощ за охрана на границата</a></strong><br /><a href="<?php bloginfo('template_directory');?>/#">В телефонен разговор премиерът Бойко Борисов е разказал на германския канцлер Ангела Меркел какво прави страната ни за гарантиране на сигурността и спокойствието по границите, включително и след събитията в Турция.  </a></span>
      </li>
      <li class="sliderImage">
          <img src="<?php bloginfo('template_directory');?>/articles-images/head-1.jpg" width="610" height="270" />
          <span class="bottom"><strong><a href="#">Борисов поиска от Меркел помощ за охрана на границата</a></strong><br /><a href="<?php bloginfo('template_directory');?>/#">В телефонен разговор премиерът Бойко Борисов е разказал на германския канцлер Ангела Меркел какво прави страната ни за гарантиране на сигурността и спокойствието по границите, включително и след събитията в Турция.  </a></span>
      </li>
      <li class="sliderImage">
          <img src="<?php bloginfo('template_directory');?>/articles-images/head-1.jpg" width="610" height="270" />
          <span class="bottom"><strong><a href="<?php bloginfo('template_directory');?>/#">Борисов поиска от Меркел помощ за охрана на границата</a></strong><br /><a href="<?php bloginfo('template_directory');?>/#">В телефонен разговор премиерът Бойко Борисов е разказал на германския канцлер Ангела Меркел какво прави страната ни за гарантиране на сигурността и спокойствието по границите, включително и след събитията в Турция.  </a></span>
      </li>
      <div class="clear sliderImage"></div>
   </ul>
</div>
	<div class="cleaner_h10"></div>
	
	<div id="sub-right-center-content">

<div id="single-sub-right-center-content">
<!-- The titles -->
<!--<div id="title-sub">България</div>-->
<!----------------------------------------------България----------------------------------------------------------------------->
<div id="title-sub">България <?php single_cat_title(); ?></div
<!-- End -->
<!--<a href="<?php bloginfo('template_directory & cat=2');?>/#"><h2>Борисов поиска от Меркел помощ за охрана на границата</h2></a>-->
<?php query_posts('showposts=1&cat=2');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=2');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=2'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>

<div id="sub-right-center-content">
<div id="single-sub-right-center-content">
<!-------------------------------------------Sveta------------------------------------------------------------------------------>
<div id="title-sub">Света</div>
<!--<a href="<?php bloginfo('template_directory & cat=2');?>/#"><h2>Борисов поиска от Меркел помощ за охрана на границата</h2></a>-->
<?php query_posts('showposts=1&cat=3');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->

<?php query_posts('showposts=1&cat=3'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	<?php endwhile; endif; ?>
</div>
<?php query_posts('showposts=5&cat=3'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>

	
	<div class="cleaner_h5"></div>
	<img class="img-add-center" src="<?php bloginfo('template_directory');?>/images/iklan-center-top.png" />
	<div class="cleaner_h5"></div>
	
	<div id="sub-right-center-content">
<div id="single-sub-right-center-content">
<!-------------------------------------------Политика----------------------------------------------------------->
<div id="title-sub">Политика</div>
<!-- End -->
<!--<a href="<?php bloginfo('template_directory & cat=4');?>/#"><h2>Борисов поиска от Меркел помощ за охрана на границата</h2></a>-->
<?php query_posts('showposts=1&cat=4');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=4');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=4'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>

<div id="sub-right-center-content">
<div id="single-sub-right-center-content">
<!------------------------------------------------------Тази Сутрин---------------------------------------------------------->
<div id="title-sub">Тази сутрин</div>
<!--<a href="<?php bloginfo('template_directory & cat=5');?>/#"><h2>Борисов поиска от Меркел помощ за охрана на границата</h2></a>-->
<?php query_posts('showposts=1&cat=5');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=5');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=5'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>


<div class="cleaner_h5"></div>
	
	<div id="sub-right-center-content">
<div id="single-sub-right-center-content">
<!---------------------------------------------------Спорт--------------------------------------------------------------->
<div id="title-sub">Спорт</div>
<?php query_posts('showposts=1&cat=6');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=6');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=6'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>

<div id="sub-right-center-content">
<div id="single-sub-right-center-content">

<div class="cleaner_h5"></div>
<!-------------------------------------------Лайфстай------------------------------------------------------------------->
<div id="title-sub">Лайфстай</div>
<?php query_posts('showposts=1&cat=7');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=7');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=7'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>
<div class="cleaner_h5"></div>
	<img class="img-add-center" src="<?php bloginfo('template_directory');?>/images/iklan-center-top.png" />
	<div class="cleaner_h5"></div>
<div id="sub-right-center-content">
<div id="single-sub-right-center-content">



<!---------------------------------------------Евро 2016---------------------------------------------------------->
<div id="title-sub">Евро 2016</div>
<?php query_posts('showposts=1&cat=8');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=8');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=8'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>
<div id="sub-right-center-content">
<div id="single-sub-right-center-content">
<!-------------------------------------------Коментар------------------------------------------------------------->
<div id="title-sub">Коментар</div>
<?php query_posts('showposts=1&cat=9');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<a><h2> <?php echo get_the_title();?></h2></a>
	
	<?php endwhile; endif; ?>
<!-- Main Article -->
<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail(array(400, 155) );
         						 } 
      							  ?>
<!--End-->
<!--Full Post-->
<?php query_posts('showposts=1&cat=9');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<p> <?php echo get_the_content();?></p>
	
	<?php endwhile; endif; ?>
<!--End Full Post-->	
	
</div>
<?php query_posts('showposts=5 & cat=9'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="title-sub-right-center-content"><a href="<?php bloginfo('template_directory');?>/#">- <?php the_title(); ?></a></div> 
	
	<?php endwhile; endif; ?>
<div class="index-button">Прочети още</div>
</div>


<div class="cleaner_h5"></div>
	
	</div>
<div class="cleaner_h0"></div>
	
	</div>
</div>

<?php get_footer(); ?>

