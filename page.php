<?php get_header(); ?>
<section id="blog">
 <div id="main_container">

 <div class="clear"></div>
	
	<div class ="kolumna900 kreska_na_dole"></div>
	
	 <div id="main_container">

	
        <?php if ( is_front_page() ) { ?>
            <div class="">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="single_inside_content"></div>
			<div class="kolumna"><?php the_content(); ?></div>
						
			<br /><br />
			
			</div>
			
			<?php //comments_template(); ?>
		
		<?php endwhile; else: ?>
			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?>  
        <? } else { ?>
            <div class="kolumna">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
	
				<h1 class="single_title"><?php the_title(); ?></h1>
				
				<div class ="kolumna900 kreska_na_dole2 pause30"></div>
				
				<div class="single_inside_content"><?php the_content(); ?></div>
				
				<br /><br />
			
			<?php //comments_template(); ?>
			
			</div>
		
		
		
		<?php endwhile; else: ?>
			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?>  
        <? } ?>
	
        </div>
	
	
	
    	<div class="clear"></div>          	

	 
	 
	 </section>
	 
	 
	
	 <?php get_footer(); ?> 
	 
	 <script>
	     
	     	
	     	
	   $(document).ready(function() {
	  
	   $("#owl-demo").owlCarousel({
	  
	       autoplay:        true,
	       autoplayTimeout: 2500,
	       animateOut: 'fade',
	       loop:true,
	       items:           1,
	  
	   });
	   
	    
	 });
	     </script> 