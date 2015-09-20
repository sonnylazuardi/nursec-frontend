<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<?php
					if(!$wp_query) global $wp_query;
					query_posts( array_merge( array( 'category__not_in' => array(get_category_by_slug('slider')->term_id) ) , $wp_query->query ) );
				?>
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
