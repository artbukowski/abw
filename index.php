<?php get_header(); ?>
<section id="blog">
			<div class="kolumna">
			<div class ="kolumna900 kreska_na_dole"></div>
            <h1 class="single_title">BLOG</h1>
            <div class ="kolumna900 kreska_na_dole2 pause30"></div>
            <!-- Start the Loop. -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <?php get_template_part( 'blog2' ); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <!-- REALLY stop The Loop. -->
            
            <!--<div class="not-mobile"><?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages,4);} ?></div>-->
            <!--<div class="movile"><?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages,0);} ?></div>-->
            
            
            <div class="asd"><?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages,4);} ?></div>
            
            
            </div>
 			<div class="clear"></div>
 </section>
<?php get_footer(); ?>