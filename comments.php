<?php if ( post_password_required() ) {return;}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'pilot' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'pilot' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'pilot' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'pilot' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			
			<div class="komenatrz"><ul>
			<?php
			$args = array(
			   // args here
			);
			
			// The Query
			$comments_query = new WP_Comment_Query;
			$comments = $comments_query->query( $args );
			
			// Comment Loop
			if ( $comments ) {
				foreach ( $comments as $comment ) {
					echo '<li><p> <a href="'. $comment->comment_author_url .'">' . $comment->comment_author .'</a> - ' . $comment->comment_content . '</p></li>';
				}
			} else {
				echo 'No comments found.';
			}
			?>
			
			</ul></div>
			
					
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'pilot' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'pilot' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'pilot' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'pilot' ); ?></p>
	<?php endif; ?>

	<?php 
	$comments_args = array(
// change the title of send button 
       'label_submit'=>'Send',
       // change the title of the reply section
       'title_reply'=>'Write a Reply or Comment',
       // remove "Text or HTML to be displayed after the set of comment fields"
       'comment_notes_after' => '',
       // redefine your own textarea (the comment body)
       'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" cols="95" rows="12" name="comment" aria-required="true"></textarea></p>',
	              
	          );
	
	comment_form($comments_args);
	?>	

</div><!-- #comments -->


