	<?php get_header(); ?>
<section id="content">
	<?php
	global $wp_query;
	$total_results = $wp_query->found_posts;
	 $search_query = get_search_query();
	?>
			<article>
				<div class="heading">
					<h2><?php _e('Search Results', 'seventhblog') ?></h2>
				</div><!--heading-->
				
				
				<div class="articlecontent">
				<p>
				<form action="" method="get">
					<input type="text" name="s" value="<?php echo $search_query ?>"/> 
					<button type="submit" class="submit"><?php _e('Search', 'seventhblog') ?></button>
				</form>
				</p>
				
				<ul>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
				
					<?php endwhile; ?>
				
				</ul>
				<p></p>
				<p><?php printf(__('%s results found.', 'seventhblog'), $total_results) ?></p>
				<?php else : ?>

					<p><?php printf(__('No post found for %s', 'seventhblog'), '<strong>'.$search_query.'</strong>')?> </p>
				<?php endif; ?>
				<div class="clear"></div>	
				
			</div>
				
			
		</article>
		

	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>