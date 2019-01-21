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
<h3>Related posts</h3>

<h3>LATEST NEWS</h3>
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

global $rand_posts;
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
<div class="col-12 col-md-6">
  <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
   <?php the_content('Перейти к полной статье...'); 
echo $post->post_content; ?>

    </div>
  <?php endforeach; ?>
<?php wp_reset_postdata() ?>
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
<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <?php
      // Start the Loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );

      // End the loop.
      endwhile;

      // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
        'next_text'          => __( 'Next page', 'twentyfifteen' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
      ) );

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>

    </main><!-- .site-main -->
  </section><!-- .content-area -->

<?php get_footer(); ?>