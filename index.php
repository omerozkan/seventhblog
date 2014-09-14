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
				<?php
					//for date
					$date = get_the_date('Y-m-d|d|M|y');
					$date = explode('|', $date);
				?>
				<time datetime="<?php echo $date[0] ?>"><span class="day"><?php echo $date[1] ?></span> <?php echo $date[2] ?>/<?php echo $date[3] ?></time>
				<div class="articlecontent">
				<?php the_content('Devamı &#8250;'); ?>
				
				<div class="clear"></div>
				</div>
			</article>
			<?php endwhile; ?>
			<!-- edit this ok? -->
			<div id="moreprev">
					<div class="more"><?php next_posts_link('&laquo; Önceki'); ?></div>
					
					<div class="prev"><?php previous_posts_link('Sonraki &raquo;'); ?></div>
			</div><!--moreprev-->
			<?php else : ?>
				</p>I'm not sure what you're looking for. 
			<?php endif; ?>
		

		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>