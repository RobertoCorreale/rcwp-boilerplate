<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" aria-label="Search" placeholder="<?php
		esc_attr_e( 'Search', 'rcwp' ); ?>">
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'rcwp' ); ?>" class="button">
		</div>
	</div>
</form>
