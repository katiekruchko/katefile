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
        

  
				<?php dynamic_sidebar( 'standings' ); ?>

			</div>
		</div>
	
	
</section>

</div>
</div>


<?php get_footer(); ?>