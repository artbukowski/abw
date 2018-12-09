<?php
/*
Template Name: HTML Sitemapasd CPT Page
*/
?>

<?php get_header(); ?>
	
        
            
         <div class="kolumna">
         <div class ="kolumna900 kreska_na_dole"></div>       
         <h1 class="single_title">SITEMAP CPT</h1>
         <div class ="kolumna900 kreska_na_dole2 pause30"></div>
         			
          			<h2 id="posts">Posts</h2>
          			<ul>
          			<?php
          			// Add categories you'd like to exclude in the exclude here
          			$cats = get_categories('exclude=301,7422,2886');
          			foreach ($cats as $cat) {
          			  echo "<li><h3>".$cat->cat_name."</h3>";
          			  echo "<ul>";
          			  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
          			  while(have_posts()) {
          			    the_post();
          			    $category = get_the_category();
          			    // Only display a post link once, even if it's in multiple categories
          			    if ($category[0]->cat_ID == $cat->cat_ID) {
          			      echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
          			    }
          			  }
          			  echo "</ul>";
          			  echo "</li>";
          			}
          			?>
          			</ul> 			
          			
          			          			
          </div>
          <div class="clear"></div>
          <?php get_footer(); ?> 