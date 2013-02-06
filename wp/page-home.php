<?php 
/*
Template Name: homepage
*/
?>
<?php get_header();?>

     <div id="photo"><img src="<?php bloginfo('template_directory'); ?>/images/trees-wide.jpg" alt="trees photo"></div>

      <div id="main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
			
		<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
              </div>

<?php get_footer(); ?>