<!DOCTYPE html>
<html lang="en-GB">
<head>

	<meta charset="utf-8" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> - Artur Bukowski</title>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Port+Lligat+Slab|Scope+One" rel="stylesheet">

	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

	<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37824789-3', 'auto');
  ga('send', 'pageview');

</script>


</head>


<body <?php body_class(); ?>>


<?php if(!is_front_page()) { ?>

<section id="logo" class="">
<div class="text_center">
	<a class="logo" href="<?php bloginfo('url');?>"></a>
</div>
</section>


<section id="menunowe" class="movile">

<div style="overflow:hidden;">
  <input type="checkbox" id="click" class="burger-input"/>
  <label for="click">
    <div>= MENU</div>
  </label>

  <navi id="menu_container_footer">
  <div id="footer_menu">

  		<?php
  		$backup_query = $wp_query;
  		$wp_query = new WP_Query(array('post_type' => 'post'));

  		wp_nav_menu( array( 'theme_location' => 'dol', 'depth' => '2') );

  		$wp_query = $backup_query;

  		?>


  		<div class="clear"></div></div>
  	</navi>

</div>



</section>



<section id="menulas" class="not-mobile">
<div class="menu-not-mobile"><nav id="menu_container">



	<?php
	$backup_query = $wp_query;
	$wp_query = new WP_Query(array('post_type' => 'post'));

	wp_nav_menu( array( 'theme_location' => 'gora' ) );

	$wp_query = $backup_query;

	?>





	<div class="clear"></div>
</nav></div>
<div class="menumobile mobile">

<div class="clear"></div>
	<nav id="menu_container">
		<?php
		$backup_query = $wp_query;
		$wp_query = new WP_Query(array('post_type' => 'post'));

		wp_nav_menu( array( 'theme_location' => 'iphone' ) );

		$wp_query = $backup_query;

		?>
	<div class="clear">
	</div>
	</nav><!--menu_container-->
</div>
</section>


<?php } else { ?>

<section id="logo" class="movile">
<div class="text_center">
	<a class="logo" href="<?php bloginfo('url');?>"></a>
</div>
</section>
<section id="menunowe" class="movile">

<div style="overflow:hidden;">
  <input type="checkbox" id="click" class="burger-input"/>
  <label for="click">
    <div>= MENU</div>
  </label>

  <navi id="menu_container_footer">
  <div id="footer_menu">

  		<?php
  		$backup_query = $wp_query;
  		$wp_query = new WP_Query(array('post_type' => 'post'));

  		wp_nav_menu( array( 'theme_location' => 'dol', 'depth' => '2') );

  		$wp_query = $backup_query;

  		?>


  		<div class="clear"></div></div>
  	</navi>

</div>



</section>
<!--<section id="menu" class="movile">
	<nav id="menu_container">
		<?php
		$backup_query = $wp_query;
		$wp_query = new WP_Query(array('post_type' => 'post'));

		wp_nav_menu( array( 'theme_location' => 'iphone' ) );

		$wp_query = $backup_query;

		?>
	<div class="clear"></div>
	</nav>-->

</section>
<section id="slider">
 <div id="owl-demo">
<div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/2_IMG_15511-1.jpg'); background-position: 65% top;">
 	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
 	<a class="slider-scroll not-mobile" href="#menulas"></a>
	</div>

 	<div class="item slider_bg slide1" style="background: url('http://www.abweddings.co.uk/test/sikh-wedding-photogrpher-london-45.jpg'); background-position: 40% center;">
 		<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
 		<a class="slider-scroll not-mobile" href="#menulas"></a>
 		</div>

 	<div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/131.jpg'); background-position: 50% top;">
	 	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
	 	<a class="slider-scroll not-mobile" href="#menulas"></a>
 	</div>
 	<div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/2013-06-09_125236_5d1_00114.jpg'); background-position: 75% bottom;">
     	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
     	<a class="slider-scroll not-mobile" href="#menulas"></a>
    	</div>
    <div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/sikh-wedding-photogrpher-london-391.jpg'); background-position: 35% bottom;">
     	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
     	<a class="slider-scroll not-mobile" href="#menulas"></a>
    	</div>
<div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/2021.jpg'); background-position: 35% top;">
 	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
 	<a class="slider-scroll not-mobile" href="#menulas"></a>
	</div>
<div class="item slider_bg slide2" style="background: url('http://abweddings.co.uk/test/IMG_112921.jpg'); background-position: 35% top;">
 	<a class="logowhite not-mobile" href="<?php bloginfo('url');?>"></a>
 	<a class="slider-scroll not-mobile" href="#menulas"></a>
	</div>





 </div>
</section>






<section id="menulas" class="not-mobile">
<div class="menu-not-mobile"><nav id="menu_container">



	<?php
	$backup_query = $wp_query;
	$wp_query = new WP_Query(array('post_type' => 'post'));

	wp_nav_menu( array( 'theme_location' => 'gora' ) );

	$wp_query = $backup_query;

	?>





	<div class="clear"></div>
</nav></div>
<div class="menumobile mobile">

<div class="clear"></div>
	<nav id="menu_container">
		<?php
		$backup_query = $wp_query;
		$wp_query = new WP_Query(array('post_type' => 'post'));

		wp_nav_menu( array( 'theme_location' => 'iphone' ) );

		$wp_query = $backup_query;

		?>
	<div class="clear">
	</div>
	</nav><!--menu_container-->
</div>
</section>

<?php } ?>
