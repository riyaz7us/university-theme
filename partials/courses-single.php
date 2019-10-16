<?php 
// Define relationships
$university = get_field('rel_university'); 
// Define list item (for score requirements)
$li = '<li class="list-group-item flex-fill">';
$cli = '</li>';
// Define Score requirements
$gpa = $university[0]->gpa;
$ielts = $university[0]->ielts;
$toefl = $university[0]->toefl;
$pte = $university[0]->pte;
$sat = $university[0]->sat;

$gpa>0 ? $agpa = $li.'GPA:'.$gpa.$cli:"";
$ielts>0 ? $aielts = $li.'IELTS: '.$ielts.$cli:"";
$toefl>0 ? $atoefl = $li. 'TOEFL: '.$toefl.$cli:"";
$pte>0 ? $apte = $li.'PTE: '.$pte.$cli:"";
$sat>0 ? $asat = $li.'SAT: '.$sat.$cli:"";

//Start Layout
?>
<div class="col-12 col-sm-12 mt-2">
	<div class="card">
		<div class="card-body">
			<h2 class="card-title"> <?php the_title(); ?> </h2>
			<hr>
			<!--University-->
			<div class="card card-hover mt-2 mb-4">
				<div class="card-body">
			<h4 class="card-title">&nbsp;<?php echo $university[0]->post_title; echo $agpa; ?></h4>
			<span class="card-subtitle text-muted"> <i class="fa fa-map-marker"></i>Location:<?php echo $university[0]->location; ?></span><br/>
			<a href="<?php echo $university[0]->guid; ?>">Know More...</a>
			<br/>
				</div>
			</div>
			<!--Score Requirements-->
			<div class="card mt-2 mb-4">
				<div class="card-body">
					<h6>Requirements:</h6>
					<ul class="list-group list-group-horizontal"><?php echo $agpa.$atoefl.$aielts.$apte.$asat ?></ul>
				</div>
			</div>
			<!--Tabulated Details-->
			<table>
				<tr>
					<td><span class="card-text"><i class="fa fa-mortar-board"></i>Course Type: <?php the_field('course_type'); ?></span></td>
					<td><span class="card-text"><i class="fa fa-calendar-o"></i>Start Date: <?php the_field('start_date'); ?></span></td>
				</tr>
				<tr>
					<td><span class="card-text"><i class="fa fa-clock-o"></i>Shift: <?php the_field('shift'); ?></span></td>
					<td><span class="card-text"><i class="fa fa-hourglass-half"></i>Duration: <?php the_field('course_duration'); ?></span> <br/></td>
				</tr>
				<tr>
					<td><span class="card-text"><i class="fa fa-money"></i>Fees: <?php the_field('shift'); ?></span></td>
					<td><span class="card-text"><i class="fa fa-inr"></i>Fees in inr: <?php the_field('course_duration'); ?></span> <br/></td>
				</tr>
			</table>
			  <?php // print_r($university); ?>
			  <!--Main Content-->
			  <div class="card mt-4">
			  	<div class="card-body">
			  		<?php the_content(); ?>
			  	</div>
			  </div>
		</div>
	</div>
</div>
