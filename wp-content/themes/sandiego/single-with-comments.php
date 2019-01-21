<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
		
	<div class="header-page">
	<div class="container-fluid ">
		<div class="row">
			<div class="hidden-sm-down col-md-1 col-lg-1"></div>
			<div class="col-sm-12 col-md-10 col-lg-10">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</div>
		</div>
		
	</div>
	
</div>
<section class="page-sidebar">
	<div class="container-fluid single-content">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-8">


		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>



	<!-- .entry-header --
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	
			<div class="col-12 col-md-4 col-lg-4">
				<?php dynamic_sidebar( 'standings' ); ?>

			</div>
		</div>
	</div>
	
</section>
</div>
</div>



<?php get_footer(); ?>
