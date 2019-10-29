<?php get_header(); ?>
<!---------- PRIMARY LAYOUT START ------->
<div class="container-fluid">
	<div class="row" >
		<div class="row col-12 col-md-8">
<?php
if ( have_posts() ) : ?>
			<?php
/* Start the Loop */
			while (  have_posts() ) : the_post(); ?>

			<?php 
			//get template from partials/template-courses.php
			get_template_part( 'partials/courses', 'archive' ); ?>
			<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>	
		<?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif; 
		?>
		</div><!--column-->
		<div class="col-md-4 card pt-4 mt-2"><div class="col-md-12"><?php get_sidebar(); Ninja_Forms()->display( 1 ); ?></div></div>
	</div><!--row-->
</div><!--container-->
	<?php echo paginate_links(); ?>
<?php
get_footer();


?>
