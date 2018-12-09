<article class="blog_box"> 
			
			<div class="left">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-image'); ?></a>
			</div>
			
			<div class="right">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="blog_date"><?php the_time('F d, Y'); ?></p>
				
				
					<p><?php echo ds_get_excerpt('135'); ?></p>
				
				
				<p><a href="<?php the_permalink(); ?>" class="read_more">Read more...</a></p>
			</div>
			
			<div class="clear"></div>
			
		</article><!--//blog_box-->