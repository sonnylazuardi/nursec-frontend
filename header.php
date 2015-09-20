<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php wp_head(); ?>
   	<title>NURSEC : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
				<?php if (is_home()) { ?>
        	<nav id="navbar-frontpage" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<?php } else { ?>
					<nav class="navbar navbar-default navbar-fixed-top past-main" role="navigation">
				<?php } ?>
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
						<?php if (is_home()) { ?>
							<a id="navbar-text-frontpage" class="navbar-brand navbar-text" href=<?php echo get_home_url(); ?> style="display:none;"><?php echo get_bloginfo( 'name' ); ?></a>
	            <a id="navbar-img-frontpage" class="navbar-brand navbar-img" href=<?php echo get_home_url(); ?>><img src="<?php echo get_site_icon_url() ?>" alt="logo"></a>
						<?php } else { ?>
							<a class="navbar-brand navbar-text" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
						<?php } ?>



          </div>
          <div id="navbar" class="navbar-collapse collapse">
						<?php if (is_home()) { ?>
            <ul id="navbar-nav-frontpage" id="top-menu" class="nav navbar-nav main_nav">
						<?php } else { ?>
						<ul id="top-menu" class="nav navbar-nav main_nav navbar-nav-forced">
						<?php } ?>
              <?php
              $args = array(
                'orderby' => 'name',
                'parent' => 0,
                'hide_empty' => 0,
                'exclude' => array(1, get_category_by_slug('slider')->term_id),
                'order' => 'ASC'
                );
              global $ancestor;
              global $ancestorchild;
              $categories = get_categories($args);
                foreach($categories as $category) {
                  $childcats = get_categories('child_of=' . $category->cat_ID . '&hide_empty=0');
                  if (count($childcats) > 0 ) {
                    echo '<li class="dropdown"><a href="' . get_category_link( $category->term_id ) . '" role="button" aria-haspopup="true" aria-expanded="false">' . $category->name . ' <span class="caret"></span></a>';
                    echo '<ul class="dropdown-menu">';
                  }
                  else {
                    echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
                  }
                  foreach ($childcats as $childcat) {
                    if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
                      $ancestor = $childcat->cat_ID;
                      $childchildcats = get_categories('child_of=' .  $childcat->cat_ID . '&hide_empty=0');
                      if (count($childchildcats) > 0 ){
                        echo '<li class="dropdown-submenu"><a tabindex="-1" href="' . get_category_link( $childcat->term_id ) . '">' . $childcat->name . '<i class="fa fa-caret-right pull-right chevron-center"></i></a>';
                        echo '<ul class="dropdown-menu">';
                      }
                      else {
                        echo '<li><a href="' . get_category_link( $childcat->term_id ) . '">' . $childcat->name . '</a></li>';
                      }
                      foreach ($childchildcats as $childchildcat) {
                        if (cat_is_ancestor_of($ancestorchild, $childchildcat->cat_ID) == false){
                          echo '<li><a href="' . get_category_link( $childchildcat->term_id ) . '">' . $childchildcat->cat_name . '</a></li>';
                          $ancestorchild = $childcat->cat_ID;
                        }
                      }
                      if (count($childchildcats) > 0 ){
                        echo '</ul></li>';
                      }
                    }
                  }
                  if (count($childcats) > 0) {
                    echo '</ul></li>';
                  }
                }
              ?>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></a>
                <ul class="dropdown-menu">
                  <li class="searchbar-nav">
                    <form class="form-inline" action="<?php echo get_home_url(); ?>">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Keywords</label>
                        <input type="search" class="form-control" id="s" name="s" placeholder="Keywords">
                      </div>
                      <button type="submit" class="btn btn-default">Search</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
			<?php if (is_home()) { ?>
      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->
        <div id="slides">
          <ul class="slides-container">
            <?php
            // get other posts from this category only as related posts //
              $backup = $post;  // backup the current object
              $category_ids = array(get_category_by_slug('slider')->term_id);
              $args = array (
                'category__in' => $category_ids,
                'posts_per_page'=>3, // Number of related posts that will be shown.
                'caller_get_posts'=>1
              );

              $my_query = new wp_query($args);
              if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post();
              ?>
                <li>
                  <!-- FIRST SLIDE OVERLAY -->
                  <div class="slider_overlay"></div>
                  <!-- FIRST SLIDE MAIN IMAGE -->
                  <?php $image = get_field('image');?>
                  <img src="<?php echo $image['url']; ?>" alt="img">
                  <!-- FIRST SLIDE CAPTION-->
                  <div class="slider_caption">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_field('description');?></p>
                    <a href="<?php echo get_field('link'); ?>" class="slider_btn">More</a>
                  </div>
                </li>
              <?php
                endwhile;
              }
              $post = $backup;  // copy it back
              wp_reset_query(); // to use the original query again
            ?>
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="/item1">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="/item3">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>
        </div>
        <!-- END SLIDER-->
      </div>
      <!-- END SLIDER AREA -->
      <div class="decoration">
        <img class="decoration-top-img" src="<?php echo get_bloginfo('template_directory');?>/img/top-decoration.png"> </img>
      </div>
			<?php } else if (is_search()) { ?>
      <?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <div class="page-banner" style="background:url('<?php echo $featured_img_url ?>') center center no-repeat; background-size:cover">
	      <div class="page-heading">
	        <h2><?php echo  'Searching: "' . get_search_query() . '"' ?></h2>
	      </div>
    	</div>
      <?php } else if (is_category()) {?>
        <?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <div class="page-banner" style="background:url('<?php echo $featured_img_url ?>') center center no-repeat; background-size:cover">
	      <div class="page-heading">
	        <h2><?php echo single_cat_title( '', true ); ?></h2>
	      </div>
    	</div>
      <?php } else if (!is_404() && !is_category()){ ?>
			<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
			<div class="page-banner" style="background:url('<?php echo $featured_img_url ?>') center center no-repeat; background-size:cover">
	      <div class="page-heading">
	        <h2><?php echo get_the_title(); ?></h2>
	      </div>
    	</div>
			<?php } ?>
    </header>
