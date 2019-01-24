<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<div class="header-page">
	<div class="container-fluid">
		<div class="row">
			<div class="hidden-sm-down col-md-1 col-lg-1"></div>
			<div class="col-sm-12 col-md-10 col-lg-10">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
		
	</div>
	
</div>
<div id="wrap-page">
<div class="flex-fill">
<div class="main-heading container">
	
</div>

<section class="page-sidebar">
	<div class="container-fluid single-content">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-8">
				
	<div class="relatedposts">

<div class="relatedposts">
<h1 class="red-bg-head">LATEST NEWS</h1>
<div class="container-fluid">
  <div class="row">

<?php

$args = array(
  'numberposts' => 6,
  'offset' => 0,
  'category' => 0,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'include' => '',
  'exclude' => '',
  'meta_key' => '',
  'meta_value' =>'',
  'post_type' => 'post',
  'post_status' => 'publish',
  'suppress_filters' => true
);

$rand_posts = get_posts( $args );
global $more;
foreach( $rand_posts as $post ) : ?>
<?php setup_postdata( $post ); ?>
<div class="col-12 col-md-6">
   <div class="item-news">
     <div class="img-wrap-news">
  <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
   </div>
    <a class="title-news" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  
  <?php
   $more = 0;
    the_content('Read More'); 
 ?>
   </div>
    </div>
  <?php endforeach; ?>
<?php wp_reset_postdata() ;

?>
</div>
</div>
</div>
			</div></div>
			<div class="col-12 col-md-4 col-lg-4">
        <!-- 1 block -->
        <h3 class="h-sidebar">LEGUE STANDINGS</h3>
        <table class="table table-striped standings-bar">
       <tbody>
      <tr>
        <td>POS</td>
        <td>  </td>
        <td>TEAM</td>
        <td>W</td>
        <td>D</td>
        <td>L</td>
        <td>PTS</td>
        
      </tr>
      <tr>
        <td>1</td>
        <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/top-club.png" alt="LEGUE STANDINGS"></td>
        <td>TOP CLUB FC</td>
        <td>21</td>
        <td>3</td>
        <td>3</td>
        <td>66</td>
      </tr>
      <tr>
        <td>1</td>
        <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reapers.png" alt="LEGUE STANDINGS"></td>
        <td>TOP CLUB FC</td>
        <td>21</td>
        <td>3</td>
        <td>3</td>
        <td>66</td>
      </tr>
      <tr>
        <td>1</td>
        <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/crimson.png" alt="LEGUE STANDINGS"></td>
        <td>TOP CLUB FC</td>
        <td>21</td>
        <td>3</td>
        <td>3</td>
        <td>66</td>
      </tr>
      <tr>
        <td>1</td>
        <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/deadly.png" alt="LEGUE STANDINGS"></td>
        <td>TOP CLUB FC</td>
        <td>21</td>
        <td>3</td>
        <td>3</td>
        <td>66</td>
      </tr>
       <tr>
        <td>1</td>
        <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wind.png" alt="LEGUE STANDINGS"></td>
        <td>TOP CLUB FC</td>
        <td>21</td>
        <td>3</td>
        <td>3</td>
        <td>66</td>
      </tr>
       
    </tbody>
  </table>
<div id="full-info" class="full-standings">FULL TABLE</div>
<!-- 2 block -->
  <div class="next-match-block">
    <h3 class="h-sidebar-red">NEXT MATCH</h3>
    <div class="desc-next-match">
      FIRST LEAGUE
    </div>
    <div class="sm-next-match">
      SEMI-FINAL
    </div>
    <div class="img-vs">
      <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/vs.png" alt="LEGUE STANDINGS">
    </div>

  </div>
  <!-- 3 block -->
  <div class="results-block">
    <h3 class="h-sidebar">FIXTURES AND RESULTS</h3>
    <table class="table table-striped standings-bar white-first">
       <tbody>
        <tr>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wind.png" alt="LEGUE STANDINGS"></td>
          <td>TOP CLUB FC</td>
          <td style="padding: 0;"><div class="score-td">2 - 3</div></td>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reapers.png" alt="LEGUE STANDINGS"></td>
          <td>THE REAPERS</td>
        </tr>
              <tr><td colspan="5"><span class="info-date">July 31, 2019</span> <span class="info-map">Eirfield Stadium</span></td>
              </tr>
              </tbody>
  </table>

              <table class="table table-striped standings-bar white-first">
       <tbody>
              <tr>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wind.png" alt="LEGUE STANDINGS"></td>
          <td>TOP CLUB FC</td>
          <td style="padding: 0;"><div class="score-td">2 - 3</div></td>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reapers.png" alt="LEGUE STANDINGS"></td>
          <td>THE REAPERS</td>
        </tr>
              <tr><td colspan="5"><span class="info-date">July 31, 2019</span> <span class="info-map">Eirfield Stadium</span></td>
              </tr>
              </tbody>
  </table>

              <table class="table table-striped standings-bar white-first">
       <tbody>
              <tr>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wind.png" alt="LEGUE STANDINGS"></td>
          <td>TOP CLUB FC</td>
          <td style="padding: 0;"><div class="score-td">2 - 3</div></td>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reapers.png" alt="LEGUE STANDINGS"></td>
          <td>THE REAPERS</td>
        </tr>
              <tr><td colspan="5"><span class="info-date">July 31, 2019</span> <span class="info-map">Eirfield Stadium</span></td>
              </tr>
              </tbody>
  </table>

              <table class="table table-striped standings-bar white-first">
       <tbody>
              <tr>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wind.png" alt="LEGUE STANDINGS"></td>
          <td>TOP CLUB FC</td>
          <td style="padding: 0;"><div class="score-td">2 - 3</div></td>
          <td><img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reapers.png" alt="LEGUE STANDINGS"></td>
          <td>THE REAPERS</td>
        </tr>
              <tr><td colspan="5"><span class="info-date">July 31, 2019</span> <span class="info-map">Eirfield Stadium</span></td>
              </tr>
          </tbody>
  </table>
  <div id="all-info" class="full-standings">VIEW ALL</div>
  </div>

  
				<?php dynamic_sidebar( 'standings' ); ?>

			</div>
		</div>
	
	
</section>

</div>
</div>


<?php get_footer(); ?>