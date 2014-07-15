<?php get_header(); ?>
<section id="content">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article>
			<?php
				$post = get_post(get_the_ID());
				$comments = intval(get_comments_number('0', '1', '%'));
			?>
				<div class="heading"><h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php
					if($post->comment_status != 'closed' || $comments > 0):
				?>
					<div class="comment"><a href="<?php comments_link(); ?>"><?php echo $comments ?></a></div>
					<?php
						endif;
					?>
				</div><!--heading-->

				
				<div class="articlecontent">
				<?php the_content('Devamı &#8250;'); ?>
				
				<div class="clear"></div>
				</div>
				
				<div class="info"><?php the_date('d F Y, l')?>
				
				<?php $loc = get_post_custom_values('location');
					if($loc[0] != '')
					{
						echo ' - '.$loc[0];
					}
				 ?>
				  </div>
				</div>
			</article>
			
			<div id="comments_template"> 
			<?php comments_template(); ?> 
			</div> 
			
			<?php endwhile; ?>
			<!-- edit this ok? -->
			
			<?php else : ?>
				</p>I'm not sure what you're looking for. 
			<?php endif; ?>
		

		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>