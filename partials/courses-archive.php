<?php 
// Define relationships
$university = get_field('rel_university'); 
//Start Layout
?>
<div class="col-12 col-sm-6 mt-2">
	<div class="card card-hover">
		<div class="card-body">
			<h4 class="card-title"> <?php the_title(); ?> </h4>
			<span class="card-subtitle text-muted"><i class="fa fa-building"></i><?php echo $university[0]->post_title; ?></span><br/>
			<hr>
			<span class="card-text"><i class="fa fa-mortar-board"></i><?php the_field('course_type'); ?></span> <br/>
			<span class="card-text"><i class="fa fa-calendar-o"></i>Starts: <?php the_field('start_date'); ?></span> <br/>
			<span class="card-text"> <i class="fa fa-clock-o"></i><?php the_field('shift');?> | <?php the_field('course_duration'); ?></span> <br/>
			 <span class="card-text"><i class="fa fa-money"></i><?php the_field('fees_in_usd');?> ( ₹ <?php the_field('fees_in_inr'); ?>)</span> <br/>
			 <button class="btn btn-block btn-outline-primary mt-2" onClick="window.location.href='<?php the_permalink(); ?>'">Get More Info</button>
			  <br>
			  <?php // print_r($university); ?>
		</div>
	</div>
</div>
