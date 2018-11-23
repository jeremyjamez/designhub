<?php get_header('child'); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<div class="row">
			<div class="content">
				<div class="row group">
					<div class="col col10">
					<?php woocommerce_content(); ?>
					</div>
				</div>
			</div>
			<? get_sidebar(); ?>
		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
