<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */

get_header(); ?>

	<div id="primary" class="row">

		<main id="main" class="col-md-8" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/universities', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-md-4 card card-hover pt-4 mt-2"><div class="col-md-12"><?php get_sidebar(); Ninja_Forms()->display( 1 ); ?></div></div>
	</div><!-- #primary -->


<?php get_footer(); ?>
