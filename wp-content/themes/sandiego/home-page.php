<?php
/*
Template Name: home page
*/
?>

<?php get_header(); ?>



<div id="wrap-page">




<section class="slider-main">
	<div class="slider">
		

  <!-- slide 1 -->
  <!-- 	<div class="wrap-slide slide1">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			LATEST MATCH<br />
			BLAZING HOT SUNDAY
			</div>
			<div class="desc-header-slide">
				They establish world championships and promote a<br />
				competitive spirit and friendly relationship
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">BUY PICKS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div> -->
  <!--slide 2  -->
    <div class="wrap-slide slide2">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			MAJOR LEAGUE 
			</div>
			<div class="desc-header-slide">
				player development and  academy
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">READ MORE</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
   <!-- slide 3 -->
  	<div class="wrap-slide slide3">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			Spread, Totals, Halftime,<br />
			& Team Total Sharp Bets
			</div>
			<div class="desc-header-slide">
					<br />
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">BUY FOOTBALL PICKS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
  <!-- slide 4 -->
  	<div class="wrap-slide slide4">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			Trusted Source for<br />
			Professional Sports Bettors
			</div>
			<div class="desc-header-slide">
					<br />
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">MEMBERSHIPS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
   <!-- slide 5 -->
  	<div class="wrap-slide slide5">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			Fixed Odds, Asian Handicaps,<br />
			Goals, & Correct Scores
			</div>
			<div class="desc-header-slide">
					<br />
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">BUY SOCCER PICKS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
  	  	<!-- slide 6 -->
  	<div class="wrap-slide slide6">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			Syndicate Tips -<br />
			Correct Scores- Fixed Odds
			</div>
			<div class="desc-header-slide">
					<br />
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">BUY SOCCER PICKS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
  	  	<!-- slide 7 -->
  	<div class="wrap-slide slide7">
  	  <div class="container-fluid ">
  		<div class="offset-md-2 col-md-7">
  			<div class="desc-slide">
  			<div class="header-slide">
			Money-Line, Run Line,<br />
			 Team Totals, & First 5 Inning Bets
			</div>
			<div class="desc-header-slide">
					<br />
			</div>
			<div class="btn-a">
				<a href="#" class="btn-slide">BUY MLB PICKS</a>
			</div>
  		</div>
  		</div>
  		</div>
  	  	</div>
  	  	<!-- end -->
 </div>


</section>
<section class="big-img">
  <div class="big-img-right">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
          <h2 class="big-img-h">
            What can we<br />do for you
          </h2>
          <div class="big-img-desc">
            Lorem ipsum dolor sit amet, case ipsum dolor sit at, ut probo congue constituto mei, dicta falli ei usu. Dictas fabellas mea at, eos an oratio possim constituto, simul nostrud democritum te est. Sit homero postulant ad, temporibus persequeris vix te. Accumsan copiosae
          </div>
          
            <a href="#" class="btn-read">READ MORE</a>
          

        </div>
      </div>
    </div>
  </div>
</section>
<section class="big-img">
  <div class="big-img-left">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-xl-7"></div>
        <div class="col-sm-12 col-md-6 col-xl-5">
          <div class="big-img-left-wrap">
            <h2 class="big-img-h">
            Is san diego<br />league for me
          </h2>
          <div class="big-img-desc">
            Lorem ipsum dolor sit amet, case ipsum dolor sit at, ut probo congue constituto mei, dicta falli ei usu. Dictas fabellas mea at, eos an oratio possim constituto, simul nostrud democritum te est. Sit homero postulant ad, temporibus persequeris vix te. Accumsan copiosae
          </div>
          <a href="#" class="btn-read">READ MORE</a>
          </div>
          

        </div>
        <div class="col-sm-12 col-md-1 col-xl-1"></div>
      </div>
    </div>
  </div>
</section>
<?php dynamic_sidebar( 'big-area' ); ?>
<section id="main-page-content">
  <div class="container wrap-container" id="content">
    <div class="row">
      <div class="col-12">



	
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>


      </div>
    </div>
  </div>
</section>

</div>



<section class="social-large">
  <div class="container width920">
    <div class="row">
      <div class="col-12">
        <h2 class="dark-header">
    SOCIAL EXPERIENCE
  </h2>
    <h3 class="social-h">
    Instagram</h3>
<img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/insta-demo.png" alt="paroller">

      </div>
    </div>
  </div>
  
  
  
</section>

<?php get_footer(); ?>



