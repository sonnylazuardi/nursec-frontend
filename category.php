<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="container page-container">
				<div class="row">
					<div class="col-md-9">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="page-content">
							<?php echo the_content(); ?>
						</div>
						<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
					<div class="col-md-3">
						<div class="page-recommendation">
							<div class="heading">
								<h2>Other Article</h2>
							</div>
							<?php
							// get other posts from this category only as related posts //
								$backup = $post;  // backup the current object
						    $categories = get_the_category($post->ID);
						    if ($categories) {
					        $category_ids = array();
					        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

									$args = array (
				            'category__in' => $category_ids,
				            'post__not_in' => array($post->ID),
				            'posts_per_page'=>6, // Number of related posts that will be shown.
				            'orderby' => 'rand',
				            'caller_get_posts'=>1
					        );

					        $my_query = new wp_query($args);
					        if( $my_query->have_posts() ) {
					            while ($my_query->have_posts()) : $my_query->the_post();
			      			?>
											<div class="page-recommendation-single">
												<a href="<?php the_permalink($post->ID); ?>">
													<<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
													<div class="page-recomendation-img" style="background:url('<?php echo $featured_img_url; ?>') center center no-repeat; background-size:cover"></div>
												</a>
												<a href="<?php the_permalink($post->ID); ?>">
													<h3><?php the_title(); ?></h3>
												</a>
											</div>
									<?php
										endwhile;
							  	}
								  $post = $backup;  // copy it back
								  wp_reset_query(); // to use the original query again
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
