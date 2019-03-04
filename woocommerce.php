<?php
get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php woocommerce_content(); ?>
		</main>
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
