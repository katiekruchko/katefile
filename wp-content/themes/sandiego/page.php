<?php
/*
Template Name: right sidebar
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
				
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>

	
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<?php dynamic_sidebar( 'standings' ); ?>

			</div>
		</div>
	</div>
	
</section>

</div>
</div>

<?php get_footer(); ?>