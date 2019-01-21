<?php
/*
Template Name: landing
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Useful meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, noodp">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
     
    <link href="/wp-content/themes/gsi/css/landings.css" rel="stylesheet" />
    
   

</head>
<body>
<div class="wrap-all">
	<header>
    <div class="container wrap-container">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-5">
          <div class="logo-wrap "> <img class="d-block img-fluid mx-auto" src="/wp-content/themes/gsi/img/logo.png" alt="Global Sports Intelligence"></div>
         
        </div>
        <div class="col-12 col-md-7 col-lg-7">
          <div class="wrap-continue"><a href="#" class="btn-continue">continue to site</a></div>
        </div>
      </div>
    </div>
             
    </header>


  <?php
while ( have_posts() ) : the_post();
the_content();
endwhile;
?>
	

<footer>
	<div class="container wrap-container">
		<div class="row align-items-center">
			<div class="col-12 col-md-7"><div class="copyright">© 2018 All rights Reserved. Global Sports Intelligence.</div></div>
      <div class="col-12 col-md-5"><div class="logo-footer-wrap"> <img src="/wp-content/themes/gsi/img/footer-logo.png" alt="Global Sports Intelligence"></div></div>
		</div>
		
	</div>
</footer>
</div>
<?php get_footer(); ?>
<!-- <script src="/wp-content/themes/gsi/js/main.js"></script> -->
</body>
</html>