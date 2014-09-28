<div id="searchform">
	<form action="<?php echo home_url( '/' ); ?>" method="get">
		<label for="s"><?php _e('Search Box', 'seventhblog') ?></label>
			<input type="text" name="s" value="<?php _e('type something', 'seventhblog') ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" id="s"/> 
			<button type="submit" ><?php _e('Search', 'seventhblog') ?></button>
	</form>
	<div class="link"><?php _e('Close', 'seventhblog') ?></div>
</div><!--searchform-->