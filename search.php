<?php get_header(); ?>
<section id="content">
	<?php
	global $wp_query;
	$total_results = $wp_query->found_posts;
	 $search_query = get_search_query();
	?>
			<article>
				<div class="heading"><h2>Arama Sonuçları</h2>
					
				</div><!--heading-->
				
				
				<div class="articlecontent">
				<p>
				<form action="" method="get">
					<input type="text" name="s" value="<?php echo $search_query ?>"/> <button type="submit" class="submit">Ara</button>
				</form>
				</p>
				<?php //form here ?>
				<ul>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
				
					<?php endwhile; ?>
				
				</ul>
				<p></p>
				<p>Toplam <?php echo $total_results ?> sonuç bulundu.</p>
					<?php else : ?>
					<p>Aradığınız <strong><?php echo $search_query ?></strong> anahtar kelimesi ile ilgili sonuç bulunamamıştır. Lütfen tekrar deneyin.</p>
					<?php endif; ?>
				<div class="clear"></div>
				
				
				</div>
				
			
			</article>
			
		
			
			<!-- edit this ok? -->
			
		
				</p>
			
		

		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>