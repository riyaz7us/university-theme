<?php get_header(); ?>
<!---------- PRIMARY LAYOUT START ------->
<div id="filter-form">
	<?php get_template_part('partials/forms','filter'); ?>
	<?php 
	$args = array(
		'post_type'  => 'courses',
		
	);


	if(isset($_GET['course_duration']))
			$course_duration = sanitize_text_field($_GET['course_duration']);
			if(($_GET['course_duration']!=0))
			$args['meta_query'][] = array(
			'key' => 'course_duration',
			'value' => $course_duration,
			'compare' => 'IN'
			);

	$courses_query = new WP_Query($args);
	
	 ?>
</div>

<div class="container-fluid">
	<div class="row" >
		<div class="row col-12 col-md-8">
<?php
if ( $courses_query -> have_posts() ) : ?>
			<?php
/* Start the Loop */
			while (  $courses_query -> have_posts() ) : $courses_query -> the_post(); ?>

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
		<div class="col-md-4 sidebar-r bl-1 pt-4 mt-2"><div class="col-md-12"><?php get_sidebar(); Ninja_Forms()->display( 1 ); ?></div></div>
	</div><!--row-->
</div><!--container-->
	<?php echo paginate_links(); ?>
<?php
get_footer();


?>
