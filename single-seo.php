<?php get_header(); ?>
	<section id="blog">
	<div class="kolumna">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
	
			<div class ="kolumna900 kreska_na_dole"></div>
			<h1 class="single_title"><?php the_title(); ?></h1>
			<div class ="kolumna900 kreska_na_dole2 pause30"></div>
			
			<div class="single_inside_content">
			
			
			<center>
			<div id="owl-demo">    
				<div class="item"><img src="http://www.abweddings.co.uk/wp-content/uploads/2013/04/2_IMG_15511.jpg" alt="wedding photographer London"/></div>
				<div class="item"><img src="http://www.abweddings.co.uk/wp-content/uploads/2013/04/131.jpg" alt="wedding photography london"/></div>
				<div class="item"><img src="http://www.abweddings.co.uk/wp-content/uploads/2013/04/IMG_9340-2-copy11.jpg" alt="engagement session london"/></div>
				<div class="item"><img src="http://www.abweddings.co.uk/wp-content/uploads/2013/04/IMG_1129211.jpg"/></div> 
			</div>
			</center>
			
			
			
			<?php the_content(); ?>
			
			</div><!--//single_inside_content-->
			
		
		</div>
		<div class="kolumna">	
				<p><?php the_time('d F Y'); ?> by <?php the_author_posts_link(); ?></p>
				<?php echo get_the_term_list( $post->ID, 'location', '<p>Location: 	', ', ', '</p>' ) ?>
				<p>Category: <?php the_category(' '); ?></p>
				<p><?php the_tags('Tags: ', ', ', ''); ?> </p>
	
	
	<?php endwhile; else: ?>
			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?> 
	</div> <!-- // kolumna -->
	</section><!--//single_cont-->
	
	<div class="clear"></div>
	
	<script> $(document).ready(function() {
    $("#owl-demo").owlCarousel({
       autoPlay: 3000,
	  navigation : true, 
	  navigationText : 	["PREV","NEXT"],
	  stopOnHover : true,
	  pagination : false,
      items : 1,
      lazyLoad	: true, 
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [479,1],
      singleItem: true
   });
});</script>
	
<?php get_footer(); ?>            	