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

<?php 
$comments_args = array(
  // change the title of send button 
          'label_submit'=>'Send',
          // change the title of the reply section
          'title_reply'=>'Write a Reply or Comment',
          // remove "Text or HTML to be displayed after the set of comment fields"
          'comment_notes_after' => '',
          // redefine your own textarea (the comment body)
          'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" cols="45" rows="8" name="comment" aria-required="true"></textarea></p>',);

comment_form($comments_args);
?>