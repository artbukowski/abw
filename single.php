<?php get_header(); ?>
	<?php $shortname = "typographic"; ?>
	
	<section id="blog">
	<div class="kolumna">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
			<div class="senter metka">
			<div class ="kolumna900 kreska_na_dole"></div>
			<h1 class="single_title"><?php the_title(); ?></h1>
			<div class ="kolumna900 kreska_na_dole2 pause30"></div>
		
			 
			<p><?php the_time('d F Y'); ?> in <?php if(taxonomy_exists('location')){echo get_the_term_list( $post->ID, 'location', '', ', ', '' );} ?>, <?php the_category(' '); ?>
			</p>
			</div>
			
			
			<div class="single_inside_content">
			
			<?php the_content(); ?>
			
			</div><!--//single_inside_content-->
			
	
			<!--<?php get_template_part('next-prev');?>-->
	</div>
	<div class ="kolumna900 kreska_na_dole pause30"></div>
	<div class="kolumna">
			
				<p><?php the_time('d F Y'); ?> by <?php the_author_posts_link(); ?></p>
				<?php if(taxonomy_exists('location')){ echo get_the_term_list( $post->ID, 'location', '<p>Location: 	', ', ', '</p>' );} ?>
				<?php if(taxonomy_exists('djband')){ echo get_the_term_list( $post->ID, 'djband', '<p>DJ / Band: 	', ', ', '</p>' );} ?>
				<?php if(taxonomy_exists('typ')){ echo get_the_term_list( $post->ID, 'typ', '<p>Type: 	', ', ', '</p>' ) ;}?>
				<p>Category: <?php the_category(' '); ?></p>
				<p><?php the_tags('Tags: ', ', ', ''); ?> </p>
	</div>
	<div class ="kolumna900 kreska_na_dole pause30"></div>
	<div class="kolumna">
	
	<!--<?php comments_template(  ); ?> -->
	</div>
	
	<?php endwhile; else: ?>
			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?> 
	</section><!--//single_cont-->
	
	<div class="clear"></div>
	
	<script>
   $(document).ready(function() {
 
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
 
});
    </script>
	
	
<?php get_footer(); ?>            	