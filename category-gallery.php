<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="container page-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="page-content">
					<?php echo the_content(); ?>
				</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
