<section id="slider">
 <div id="owl-demo">   
 	<div class="item slider_bg slide1" style="background: url('http://www.abweddings.co.uk/wp-content/uploads/2014/04/sikh-wedding-photogrpher-london-45.jpg'); background-position: 40% center;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 	<div class="item slider_bg slide2" style="background: url('http://www.arturbukowski.pl/zdjecia/lucymichal/106.jpg'); background-position: 35% bottom;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 	<div class="item slider_bg slide2" style="background: url('http://www.arturbukowski.pl/zdjecia/lucymichal/15.jpg'); background-position: 35% bottom;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 </div>
</section>




<?php if(is_front_page()) { ?> 
<section id="logo" class="movile">
<div class="text_center">
	<a class="logo" href="<?php bloginfo('url');?>">
		
	</a>
</div>

</section>
<?php } ?>



<?php if(!is_front_page()) { ?>
<section id="logo">
 <div class="text_center">
 	<a class="logo" href="<?php bloginfo('url');?>">
 		
 	</a>
 </div>
</section>
<?php } else { ?>
<section id="slider">
 <div id="owl-demo">   
 	<div class="item slider_bg slide1" style="background: url('http://www.abweddings.co.uk/wp-content/uploads/2014/04/sikh-wedding-photogrpher-london-45.jpg'); background-position: 40% center;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 	<div class="item slider_bg slide2" style="background: url('http://www.arturbukowski.pl/zdjecia/lucymichal/106.jpg'); background-position: 35% bottom;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 	<div class="item slider_bg slide2" style="background: url('http://www.arturbukowski.pl/zdjecia/lucymichal/15.jpg'); background-position: 35% bottom;"> <a class="logo" href="<?php bloginfo('url');?>"></a> </div>
 </div>
</section>
<?php } ?>
 
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
 <section id="menulas" class-"not-mobile">
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
 
 <section id="main_container">
 <div id="main_container">

 <div class="clear"></div>
	
	<div class ="kolumna900 kreska_na_dole"></div>
	</div>
	 <div id="main_container">
