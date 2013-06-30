<?php get_header(); ?>
<section id="content">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article>
				<div class="heading"><h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					
				</div><!--heading-->

				
				<div class="articlecontent">
				<?php the_content('Devamı &#8250;'); ?>
				
				<div class="clear"></div>
				</div>
				
			
			</article>
			
		
			<?php endwhile; ?>
			<!-- edit this ok? -->
			
			<?php else : ?>
				</p>
			<?php endif; ?>
		

		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>