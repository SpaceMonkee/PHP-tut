<?php /* Template Name: HomePage */ ?>


<?php get_template_part('head'); ?>

<?php get_header(); ?>


<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'division/mainBody_content');
  
			endwhile; endif; 

?>

<?php get_footer(); ?>

