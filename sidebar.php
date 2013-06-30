<section id="sidebar">
		<?php

		if(!function_exists('dynamic_sidebar')
		|| !dynamic_sidebar()) :
				dynamic_sidebar('Aside');
		endif;
	?>
</section><!--#sidebar-->