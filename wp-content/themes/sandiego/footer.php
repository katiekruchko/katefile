	

<footer>
  <div class="train-wrap">
    <h2 class="h2-red">Train with the best</h2>
    <div class="desc-train">See scientific results with major league as you improve 
physically and mentallly</div>
<h3 class="h3-red">
      register below
    </h3>
    <div class="btn-train-wrap">
      <div class="btn-empty">
        PLAYERS
      </div>
      <div class="btn-full">
        COACHES
      </div>

    </div>
    </div>
    <section class="brand-section">
      <h2 class="brand-h2">
        brand partners
      </h2>
      <div class="brands-wrap">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="item-brand">
                <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/brand.png" alt="brand">
              </div>
            
          </div>
          <div class="col-3">
            <div class="item-brand">
            <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/brand.png" alt="brand">
              </div>
          </div>
          <div class="col-3">
            <div class="item-brand">
            <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/brand.png" alt="brand">
              </div>
          </div>
          <div class="col-3">
            <div class="item-brand">
            <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/brand.png" alt="brand">
              </div>
          </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class="footer-menu">
      <div class="img-triangle">
        <svg version="1.1"  width="100%" height="160px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
   xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none" >
<polygon fill="#051c25" points="0,0 100,0 100,100 0,100
                                "/>
<polygon fill="#ffffff" points="0,0 100,0 50,98
                                "/>
</svg>
</div>
<div class="wrap-footer-menu">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h4 class="h4-footer">
          Address
        </h4>
        <div class="footer-info">
          Lorem ipsum dolor sit amet, case ipsum dolor sit at, ut probo congue constituto mei, dicta falli ei 
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="h4-footer">
          quick links
        </h4>
        <div class="footer-info">
          <ul class="quick-links">
            <li>Home</li>
            <li>Sponsors</li>
            <li>League</li>
            <li>Buy amet</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="h4-footer">
          contact
        </h4>
        <div class="footer-info">
          <div class="tel-footer">
            Tel:
          </div>
          <div class="email-footer">
            Email:
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="h4-footer">
          Newsletter
        </h4>
        <div class="footer-info">
          <div class="btn-empty">
        SUBSCRIBE
      </div>
        </div>
      </div>
    </div>
  
</div>
      </div>
    </section>
  </div>
	<div class="container-fluid copyright">
		<div class="row copyright-wrap">
<div class="col-2"></div>
			<div class="col-md-6 copy-txt">
          © 2018 Sandiego League |  All rights reserved.
        
        
    </div>
		<div class="col-md-4">
			<img class="img-fluid logo-footer mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/logo-infinity.png" alt="Global Sports Intelligence">
		</div>
		
		
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	
	<?php wp_footer(); ?>
	<!-- <script>
function footerToBottom() {
     var browserHeight = $(window).height(),
          footerOuterHeight = $('footer').outerHeight(true),
          mainHeightMarginPaddingBorder = $('#wrap-page').outerHeight(true) - $('#wrap-page').height() + 3;
          $('#wrap-page').css({
               'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorder,
          });
     };
     footerToBottom();
     $(window).resize(function () {
     footerToBottom();
});
</script> -->
<script>

  //     jQuery(document).on('ready', function() {


  //         jQuery('.slider').slick({
  //           dots: true,
  //       lazyLoad: 'ondemand', 
  //      speed: 600,
  //      initialSlide: 2,
  
  // autoplay: false,
  // arrows: false,
  // infinite: true,

  //     });
         
   
  //   });
  jQuery('.slider').slick({
  dots: true,
arrows: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
</script>
	<script>
$(window).on('load', function() {
$('#preloaders').find('img').fadeOut().end().delay(400).fadeOut('slow');
});
</script>
</body>
</html>

