<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="Global Sports Intelligence" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,600, 800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">


</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#top-m">
	<div id="preloaders">
<img src="<?php echo get_template_directory_uri(); ?>/img/zagryz.gif">
</div>
  <header class="sticky-top">
<div class="container-fluid">
    <div class="row top-panel align-items-center ">
  
  <div class="col-xl-4">
    <a href="<?php echo get_site_url(); ?>">
            <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Global Sports Intelligence"></a>
  </div>
  <div class="col-md-6 col-xl-6">
    <div class="wrap-menu ">
    <div class="nav-center mx-auto" id="navbar-example">
    <nav class="navbar navbar-expand-md navbar-light bg-faded "  id="top-m">
      
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'top',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
    </nav>
</div>
  </div>
</div>
  
  <!--   <div class="login-btn-wrap">
      <a href="#" class="login-btn">LOG IN</a>
    </div> -->
  <div class="social-btn-top col-md-2">
    <span class="top-social-item">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png" alt="fb-icon">
    </span>
    <span class="top-social-item">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/insta-icon.png" alt="insta-icon">
    </span>
    <span class="top-social-item">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="twitter-icon">
    </span>
  </div>
</div>
</div>

		
</header>




