<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

    <section id="blog">
      <div class="separator-special">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Recent Works</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGAIN BLOG SLIDER -->
              <div class="blog_slider">
								<?php
		            // get other posts from this category only as related posts //
		              $backup = $post;  // backup the current object
		              $category_ids = array(get_category_by_slug('experience')->term_id);
		              $args = array (
		                'category__in' => $category_ids,
		                'posts_per_page'=> 6, // Number of related posts that will be shown.
		                'caller_get_posts'=> 1
		              );

		              $my_query = new wp_query($args);
		              if( $my_query->have_posts() ) {
		                  while ($my_query->have_posts()) : $my_query->the_post();
		              ?>
										<div class="col-lg-4 col-md-4 col-sm-4">
		                  <div class="single_post wow fadeInUp">
												<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		                    <div class="blog_img">
		                      <img src="<?php echo $featured_img_url; ?>" alt="img">
		                    </div>
												<h3><?php the_title(); ?></h3>
		                    <p><?php echo get_field('client');?></p>
		                  </div>
		                </div>
		              <?php
		                endwhile;
		              }
		              $post = $backup;  // copy it back
		              wp_reset_query(); // to use the original query again
		            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->

    <!--=========== BEGIN SERVICE SECTION ================-->
    <section id="service">
      <div class="separator-special">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Services</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">
              <!-- BEGAIN BLOG SLIDER -->
							<div class="blog_slider">
								<?php
		            // get other posts from this category only as related posts //
		              $backup = $post;  // backup the current object
		              $category_ids = array(get_category_by_slug('services')->term_id);
		              $args = array (
		                'category__in' => $category_ids,
		                'posts_per_page'=> 6, // Number of related posts that will be shown.
		                'caller_get_posts'=> 1
		              );

		              $my_query = new wp_query($args);
		              if( $my_query->have_posts() ) {
		                  while ($my_query->have_posts()) : $my_query->the_post();
		              ?>
										<div class="col-lg-4 col-md-4 col-sm-4">
		                  <div class="single_post wow fadeInUp">
												<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		                    <div class="blog_img">
		                      <img src="<?php echo $featured_img_url; ?>" alt="img">
		                    </div>
												<h3><?php the_title(); ?></h3>
		                    <p><?php echo get_field('client');?></p>
		                  </div>
		                </div>
		              <?php
		                endwhile;
		              }
		              $post = $backup;  // copy it back
		              wp_reset_query(); // to use the original query again
		            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SERVICE SECTION ================-->

    <!--=========== BEGAIN WORKS SECTION ================-->
    <section id="works">
      <div class="separator-special">
      </div>
      <!-- BEGAIN MILESTONE WORKS SECTION -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="counter_section">
            <!-- SKILLS COUNTER OVERLAY -->
          </div>
          <div class"quote-icon">
            <i class"fa fa-quote-left"> </i>
          </div>
          <div class="counter_text">
            <h2>Bicara tentang pengalaman bukan tentang berapa lama, tapi berapa tentang berapa dalam kita memahami, dan mengambil pelajaran untuk lebih baik</h2>
          </div>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
