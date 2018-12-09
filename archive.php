<!-- this is a comment to the file -->
<?php get_header(); ?>
<section id="blog">
			<div class="kolumna">
			<div class ="kolumna900 kreska_na_dole"></div>       
			<h1 class="single_title"><?php printf( __( 'Archives for %s', 'pilot' ), single_tag_title( '', false ) ); ?></h1>
			<div class ="kolumna900 kreska_na_dole2 pause30"></div>
		<?php
					
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
			 			printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
		<?php if ( have_posts() ) : ?>
		<?php
		
					while ( have_posts() ) : the_post();
						get_template_part( 'blog2' );
					endwhile;
				else : ?>
				<div class="single_inside_content">
					<img src="http://www.arturbukowski.pl/wp-content/uploads/2012/06/jabadaba.jpg" alt="jabadaba" width="1100" height="500" class="alignnone size-full wp-image-4931" />
					<center>
					<h1>Sorry – Can't find anything about <?php printf( __( '%s', 'pilot' ), single_tag_title( '', false ) ); ?></h1>
					<p><center>Apologies, but we were unable to find what you were looking for. Perhaps searching will help. </center>
					<?php get_search_form(); ?><br/>
					<center>In the meanwhile, you can check my <a href="http://www.facebook.com/abweddings.london">facebook fanpage</a>!</center>
					</p>
					</center>
				</div>

				<?php endif;
			?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div></div>
</section>
<?php get_footer(); ?>