<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3>Yorumlar ( <?php comments_number('0', '1', '%' );?> )</h3>
 	<!--my own template -->
 	<?php
 		$count = 0;
		$status = $post->comment_status;
 	?>
 	<a href="#commentform" class="linktoform">Sen de yorumunu gönder</a>
 	<div class="clear"></div>
 	<div id="comments">
 	<?php foreach($comments as $comment): ?>
 		<div class="comment<?php echo $count%2 == 0? '':' second'; ?>">
 			<div class="content"><?php comment_text(); ?></div>
 			<div class="avatar">
 			<?php echo get_avatar(get_comment_author_email(), 50); ?>
 			</div>
 			<div class="authorinfo">
 				<span class="author"><?php comment_author_link()?></span><br />
 				<span class="commentdate"><?php comment_date('d/m/Y'); ?></span>
 			</div>
 			
 			<div class="clear"></div>
 		</div>
 		
 		
 		
 	<?php $count++; endforeach; ?>
 	</div><!--comments-->
 	
 	
	
 	
	<?php else : // this is displayed if there are no comments so far ?>

	 <?php if (comments_open()) : ?>
		<!-- If comments are open, but there are no comments. -->
		<p class="nocomments">Bu yazıya yorum yapılmamış.</p>
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Bu yazı yorumlara kapalıdır.</p>
	

 

	

	<?php endif; ?>
<?php endif; ?> <!-- end if have comments -->


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Sen de Yorum Yap', 'Sen de Yorum Yap -> %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Bu yazıya yorum yapabilmeniz için <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">giriş</a> yapmalısınız.</p>
<?php else : ?>

<div id="commentform">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

<?php if ( $user_ID ) : ?>

<p><label>Kullanıcı adınız:</label> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="çıkış yap">Çıkış Yap&raquo;</a></p>

<?php else : ?>

<p>
<label for="author"><?php if ($req) echo "*"; ?>Adınız:</label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
<label for="email"><?php if ($req) echo "*"; ?>E-Posta:</label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
<label for="url">Website:</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
</p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p class="noborder"><label for="comment">Yorum:</label>
<textarea name="comment" id="comment" cols="50" rows="5" tabindex="4"></textarea></p>

<p class="noborder"><input name="submit" type="submit" class="submit" tabindex="5" value="Gönder" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div><!--commentform-->
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
