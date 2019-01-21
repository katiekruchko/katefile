	


<footer>
  <div class="container wrap-container">
    <div class="row align-items-center">
      <div class="col-12 col-md-7"><div class="copyright">© 2018 All rights Reserved. Global Sports Intelligence.</div></div>
      <div class="col-12 col-md-5"><div class="logo-footer-wrap"> <img class="img-fluid logo-footer mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/logo-infinity.png" alt="Soccer"></div></div>
    </div>
    
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	
	<?php wp_footer(); ?>
<!-- 	<script>
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
</body>
</html>

