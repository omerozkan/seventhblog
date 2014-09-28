	<?php
/**
* @package WordPress
* @subpackage SeventhBlog
*/

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}

 
	
function seventhblog_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    static $count = 0;
    $count++;
    ?>
    <li>
    <div class="comment <?php echo $count % 2 == 0? 'second':'first'; ?>" id="comment-<?php echo $comment->comment_ID?>"> 
		<div class="left">
		      <?php echo get_avatar(get_comment_author_email(), 60); ?>
		      <time><?php comment_date('d/m/Y'); ?></time>
		</div>
		<div class="right">
		      <h3><a href="<?php comment_author_url()?>" target="_blank"><?php comment_author()?></a></h3>
		      
		      <div class="clear"></div>
		      <div class="comment-content">
			  	<?php comment_text(); ?>
		      </div>
		</div>
		<div class="clear"></div>
		 <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 
                'reply_text' => 'Yanıtla',
                /*'after' => ' <span>&darr;</span>',*/ 
                'depth' => $depth,
                'max_depth' => $args['max_depth'] 
                ) ) ); ?>
            </div><!-- .reply -->
            
	    </div>
	    
    <?php 
}
?>

<?php if ( have_comments() ) : ?>
	<h3><?php _e('Comments', 'seventhblog') ?> ( <?php comments_number('0', '1', '%' );?> )</h3>

	<?php
		$count = 0;
		$status = $post->comment_status;
	?>
	<a href="#commentform" class="linktoform js-scroll"><?php _e('Leave a reply', 'seventhblog') ?></a>
	<div class="clear"></div>
	<div id="comments">
	<ul>
	<?php
	    wp_list_comments( array(
	      'callback' => 'seventhblog_comments',
 	      'style' => 'ul'
     ) ); ?>
    </ul>
	
	</div><!--comments-->
	
	<?php else : // this is displayed if there are no comments so far ?>
	<div id="comments">
		<?php if (comments_open()) : ?>

			<p class="nocomments"><?php _e('There is no comment for this post.', 'seventhblog') ?></p>
		<?php else : // comments are closed ?>

			<p class="nocomments"><?php _e('Comments are closed for this post!', 'seventhblog') ?></p>

		<?php endif; ?>
	</div>
<?php endif; ?> 


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( __('Leave a reply!', 'seventhblog'), __('Leave a reply  -> %s !', 'seventhblog') ); ?></h3>

<div class="cancel-comment-reply">
  <small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<?php _e('You have to', 'seventhblog') ?>
	<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">
		<?php _e('login', 'seventhblog') ?></a>
		<?php _e('first to leave a reply', 'seventhblog') ?>!
<?php else : ?>

<div id="commentform" class="commentform">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

<?php if ( $user_ID ) : ?>

<p><label><?php _e('Username', 'seventhblog') ?>:</label> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Logout', 'seventhblog') ?>"><?php _e('Logout', 'seventhblog') ?>&raquo;</a></p>

<?php else : ?>

<p>
<label for="author"><?php if ($req) echo "* "; ?><?php _e('Name', 'seventhblog') ?>:</label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
<label for="email"><?php if ($req) echo "* "; ?><?php _e('E-Mail', 'seventhblog')?>:</label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
<label for="url"><?php _e('Website', 'seventhblog') ?>:</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
</p>

<?php endif; ?>
<?php /*echo allowed_tags();*/ ?>
<p class="noborder"><label for="comment"><?php _e('Message', 'seventhblog') ?>:</label>
<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></p>

<p class="noborder">* <?php _e('Required fields', 'seventhblog') ?>. 
	<br> <?php _e('Your email will remain confidential', 'seventhblog') ?>. 
	<input name="submit" type="submit" class="submit" tabindex="5" value="<?php _e('Send', 'seventhblog') ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div><!--commentform-->
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
