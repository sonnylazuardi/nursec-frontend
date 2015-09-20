<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
