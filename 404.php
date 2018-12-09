<!DOCTYPE html>
<html lang="en-GB">
<head>
  	
	<meta charset="utf-8" /> 
	<title><?php wp_title('&laquo;', true, 'right'); ?> - Artur Bukowski</title>  
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />             		
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	
	<!-- GA -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','/analytics.js','ga');

  ga('create', 'UA-37824789-3', 'auto');
  ga('send', 'pageview');

</script>

	
</head>


<body <?php body_class(); ?>>




<section id="logo" class="movile">
<div class="text_center">
	<a class="logo" href="<?php bloginfo('url');?>"></a>
</div>
</section>
<section id="menu" class="movile"> 
	<nav id="menu_container">
		<?php 		
		$backup_query = $wp_query;
		$wp_query = new WP_Query(array('post_type' => 'post'));
		
		wp_nav_menu( array( 'theme_location' => 'iphone' ) ); 
		
		$wp_query = $backup_query;
		
		?>
	<div class="clear"></div>
	</nav><!--menu_container-->

</section>
<section id="slider">
 <div id="owl-demo">   
 	<div class="item slider_bg404 slide2" style="background: url('http://www.arturbukowski.pl/wp-content/uploads/2012/06/jabadaba.jpg'); background-position: 75% 0%;">
	 	<a class="" href="<?php bloginfo('url');?>">404</a>
	 	<a class="logo not-mobile" href="<?php bloginfo('url');?>"></a>
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









<section id="blog">
	<div class="kolumna">       
		<h1 class="single_title">e404 - Page not found :(</h1>
		<div class ="kolumna900 kreska_na_dole pause30"></div>
		<div class="single_inside_content">
			<center>
			<h1>Sorry – that page no longer exists</h1>
			<p><center>Apologies, but we were unable to find what you were looking for. Perhaps searching will help. </center>
			<?php get_search_form(); ?><br/>
			<center>In the meanwhile, you can check my <a href="http://www.facebook.com/abweddings.london">facebook fanpage</a>!</center>
			</p>
			</center>
		</div>
	</div>
	</section>

<?php get_footer(); ?>