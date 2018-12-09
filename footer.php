<section id="foooooooter" class="">

<div class="not-mobile">
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
</div>

<div class="senter"><p>&copy; 2008 - <?php echo date("Y"); ?> ABWeddings.co.uk <a href="<?php bloginfo('url');?>">Artur Bukowski. LONDON WEDDING PHOTOGRAPHER.</a></p></div>



<?php if(is_front_page()) { ?> <div class="tothetop"><a href="#slider"><img src="http://www.abweddings.co.uk/wp-content/themes/pilot/images/up3.png" width="50px" height="50px" style="
    opacity: 0.2;
"></a></div>
<?php } else { ?> 			   <div class="tothetop"><a href="#logo"><img src="http://www.abweddings.co.uk/wp-content/themes/pilot/images/up3.png" width="50px" height="50px" style="
    opacity: 0.2;
"></a></div>
<?php } ?>
</section>

 <!--
  <section id="lower-menu-mobile">

  <div class="movile">
  <nav id="menu_container_footer">
  <div id="footer_menu">

  		<?php
  		$backup_query = $wp_query;
  		$wp_query = new WP_Query(array('post_type' => 'post'));

  		wp_nav_menu( array( 'theme_location' => 'dol', 'depth' => '2') );

  		$wp_query = $backup_query;

  		?>


  		<div class="clear"></div></div>
  	</nav>
  </div>





  </section>
 -->

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <?php wp_footer(); ?>

 </body>
 </html>
