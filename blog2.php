<article class="blog_box"> 

			<div class="right2">
				
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($thumbnail->ID, 'thumbnail'); ?></a>
				<?php } else {?>
					<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/blog-def-london-wedding-photographer.jpg" alt="<?php the_title(); ?>" /></a>
				<?php } ?>
				
				
			
			<div class="clear"></div>		
			</div>
						
				<div class="left2">
					<p class="blog_date"><?php the_time('d F Y'); ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<p>By <?php the_author_posts_link(); ?></p>
					
					<div class="not-mobile">
					<div class="line"></div>
					<p>Comments: <?php comments_popup_link( __('Zero'), __('1 comment'), __('% comments'), 'comments-link', __('Comments are Off'))?><br></p><div class="line"></div>
					
					<?php 
					if(taxonomy_exists('location')){
					     echo get_the_term_list( $post->ID, 'location', '<p>Location: 	', ', ', '</p><div class="line"></div>' );}
					if(taxonomy_exists('djband')){
					     echo get_the_term_list( $post->ID, 'djband', '<p>DJ / Band: 	', ', ', '</p><div class="line"></div>' );}
					if(taxonomy_exists('typ')){
					     echo get_the_term_list( $post->ID, 'typ', '<p>Type: 	', ', ', '</p><div class="line"></div>' );}
					?>
					
					<p>Category: <?php the_category(' '); ?></p><div class="line"></div>
					<p><?php the_tags('Tags: ', ', ', '</p><div class="line"></div>'); ?> </p>
					</div>
					<!--<p><?php echo ds_get_excerpt('255'); ?><a href="<?php the_permalink(); ?>" class="read_more">[...]</a></p>-->
				
			</div>
			
			
				
</article>
