<?php get_header();?>
<!--page init -->
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		
        <?php the_title();?>
        <?php the_content();?>

	<?php } // end while
} // end if?>
<!--page fim -->


<?php get_footer();?>