<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="Продажа орехов оптом." />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,800,800i" rel="stylesheet">
  


</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#top-m">
 

  <header>
    <div class="wrap-header container">
        <div class="logo-wrap">
            <div class="logo">
                <div class="insert-logo">

 <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="оптовая торговля орехами">
                 </div>
                <div class="logo-desc">Global Sports Intelligence
</div></a>
            
            </div>
        </div>
          
        <div class="tel-top">

        <div class="wrap-menu">
  <div class="nav-center mx-auto" id="navbar-example">
    <nav class="navbar navbar-expand-md navbar-light bg-faded" id="top-m">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
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
    </div>
    </header>


	
		





