<div id="wrap-page">
<?php get_header(); ?>


<div class="flex-fill" >
<div class="main-heading container">
	<h1><?php the_title(); ?></h1>
</div>
<?php dynamic_sidebar( 'big-area' ); ?>
<section class="container">



	
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>

</section>
</div>
</div>

<?php get_footer(); ?>