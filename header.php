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
							<a id="navbar-text-frontpage" class="navbar-brand navbar-text" href="#" style="display:none;">NURSEC</a>
	            <a id="navbar-img-frontpage" class="navbar-brand navbar-img" href="#"><img src="img/logo.png" alt="logo"></a>
						<?php } else { ?>
							<a class="navbar-brand navbar-text" href="#">NURSEC</a>
						<?php } ?>



          </div>
          <div id="navbar" class="navbar-collapse collapse">
						<?php if (is_home()) { ?>
            <ul id="navbar-nav-frontpage" id="top-menu" class="nav navbar-nav main_nav">
						<?php } else { ?>
						<ul id="top-menu" class="nav navbar-nav main_nav navbar-nav-forced">
						<?php } ?>
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                <ul class="dropdown-menu">
        			    <li class="dropdown-submenu">
        			        <a tabindex="-1" href="#s1">Engineering Design<i class="fa fa-caret-right pull-right chevron-center"></i></a>
        			        <ul class="dropdown-menu">
        			          <li><a tabindex="-1" href="#s1-1">Detail Engineering</a></li>
        			          <li><a href="#s1-2">Feed</a></li>
        			        </ul>
        			    </li>
                  <li><a href="#s2">Civil and Infrastructure Planning</a></li>
                  <li><a href="#s3">Geophysical Survey</a></li>
                  <li><a href="#s4">Geotechnical Survey</a></li>
                  <li><a href="#s5">Soil Laboratory Test</a></li>
                  <li><a href="#s6">Land and Aerial Survey</a></li>
                  <li><a href="#s7">Marine, Offshore, and Subsea Structures</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#facilities" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Facilities <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#s2">Soil Mechanic Lab</a></li>
                  <li><a href="#s3">Warehouse</a></li>
                  <li><a href="#s4">Workshop</a></li>
                </ul>
              </li>
              <li><a href="#team">Experiences</a></li>
              <li><a href="#team">News</a></li>
              <li class="dropdown">
                <a href="#facilities" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#s2">History</a></li>
                  <li><a href="#s3">Vision and Mission</a></li>
                  <li><a href="#s4">Company Profile</a></li>
                  <li><a href="#s4">HSE Policy</a></li>
                  <li><a href="#s4">Gallery</a></li>
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

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div>
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="img/full-slider/full-slide1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>We guarantee quality warehouse</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada magna tempus justo ornare, sed aliquet lectus semper. Integer eget convallis lorem. Duis bibendum mi ac elementum hendrerit.</p>
                <a href="#" class="slider_btn">Check Our Warehouse</a>
              </div>
            </li>

            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div>
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="img/full-slider/full-slide2.jpg" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Best team you can found</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada magna tempus justo ornare, sed aliquet lectus semper. Integer eget convallis lorem. Duis bibendum mi ac elementum hendrerit.</p>
                <a href="#" class="slider_btn">Who We are</a>
              </div>
            </li>

            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div>
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="img/full-slider/full-slide3.jpg" alt="img">
              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Another highlight</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada magna tempus justo ornare, sed aliquet lectus semper. Integer eget convallis lorem. Duis bibendum mi ac elementum hendrerit.</p>
                <a href="#" class="slider_btn">Click</a>
              </div>
            </li>
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
        <img class="decoration-top-img" src="<"> </img>
      </div>
			<?php } else { ?>
			<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
			<div class="page-banner" style="background:url('<?php echo $featured_img_url ?>') center center no-repeat; background-size:cover">
	      <div class="page-heading">
	        <h2><?php echo get_the_title(); ?></h2>
	      </div>
    	</div>
			<?php } ?>
    </header>
    <?php
    $args = array(
      'orderby' => 'name',
      'parent' => 3,
      'order' => 'ASC'
      );
    global $ancestor;
    global $ancestorchild;
    $categories = get_categories($args);
      foreach($categories as $category) {
        echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
        echo '<p> Description:'. $category->description . '</p>';
        $childcats = get_categories('child_of=' . $category->cat_ID );
        foreach ($childcats as $childcat) {
          if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
            echo '<li><h2><a href="'.get_category_link($childcat->cat_ID).'">';
            echo $childcat->cat_name . '</a></h2>';
            echo '</li>';
            $ancestor = $childcat->cat_ID;
            $childchildcats = get_categories('child_of=' .  $childcat->cat_ID );
            foreach ($childchildcats as $childchildcat) {
              echo "<p>AHAI</p>";
              if (cat_is_ancestor_of($ancestorchild, $childchildcat->cat_ID) == false){
                echo '<li><h2><a href="'.get_category_link($childchildcat->cat_ID).'">';
                echo $childchildcat->cat_name . '</a></h2>';
                echo '<p>'.$childchildcat->category_description.'</p>';
                echo '</li>';
                $ancestorchild = $childcat->cat_ID;
              }
            }
          }
        }
      }
    ?>
