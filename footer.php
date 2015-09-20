		<section>
		 <footer id="footer">
		   <div class="separator-special">
		   </div>
		   <div class="container">
				 <div class="head-title">
					 <img src="<?php echo get_bloginfo('template_directory');?>/img/logo-white.png"> </img>
			     <h2>PT Nur Straits Engineering</h2>
				 </div>
		     <div class="row">
		       <div class="col-lg-4 col-md-4 col-sm-12">
		        <h3>About</h3>
		        <p>NURSEC is a privately owned company belong to citizen of Indonesia,
		        including its management staff. In carrying out its activity, NURSEC is supported
		        by experts from various disciplines. NURSEC always provides effective and efficient
		      services which are able to satisfy clients and deliver the best results for any works performed</p>
		       </div>
		       <div class="col-lg-4 col-md-4 col-sm-12">
		         <h3>Services</h3>
		         <ul>
							 <?php
								 $backup = $post;
								 $category_ids = array(get_category_by_slug('services')->term_id);
								 $args = array (
									 'category__in' => $category_ids,
									 'posts_per_page'=> 6,
									 'caller_get_posts'=> 1
								 );

								 $my_query = new wp_query($args);
								 if( $my_query->have_posts() ) {
										 while ($my_query->have_posts()) : $my_query->the_post();
								 ?>
			           	<a href="<?php the_permalink($post->ID); ?>" ><li>- <?php the_title(); ?></li></a>
								 <?php
									 endwhile;
								 }
								 $post = $backup;  // copy it back
								 wp_reset_query(); // to use the original query again
							 ?>
		         </ul>
		       </div>
		       <div class="col-lg-4 col-md-4 col-sm-12">
		        <h3>Contact Us</h3>
		        <p>Jl. Situsari VII No 49A Bandung <br>
		        Phone/Fax: 022-7304740<br>
		        Email: info@nursec.com<br>
		        Visit: www.nursec.com<br></p>
		       </div>
		     </div>
		   </div>
		  </footer>
		</section>
  </body>
</html>
