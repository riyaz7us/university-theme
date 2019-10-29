<?php 
 
 //Courses related to university



// Define list item (for score requirements)
$li = '<li class="list-group-item flex-fill">';
$cli = '</li>';
// Define Score requirements
$gpa = get_field('gpa');
$ielts = get_field('ielts');
$toefl = get_field('toefl');
$pte = get_field('pte');
$sat = get_field('sat');

$gpa>0 ? $agpa = $li.'GPA: '.$gpa.$cli:"";
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
			
			<!--Score Requirements-->
			<div class="card mt-2 mb-4">
				<div class="card-body">
					<h6>Requirements:</h6>
					<ul class="list-group list-group-horizontal"><?php echo $agpa.$atoefl.$aielts.$apte.$asat ?></ul>

				</div>
			</div>
			<!--Courses List-->
			<div class="card mt-2 mb-4">
				<div class="card-body">
					<h6>Find Courses:</h6>
					<ul class="list-group">
						<li class="list-group-item">
							<?php 
							$related_courses = get_field('related_courses');
							$as= get_category_link($related_courses);
							echo "<a class='btn btn-primary btn-block' href='".$as."'>view all related courses</a>"; 
							 ?>
						</li>
					</ul>
				</div>
			</div>
			  <!--Main Content-->
			  <div class="card mt-4">
			  	<div class="card-body">
			  		<?php the_content(); ?>
			  	</div>
			  </div>
		</div>
	</div>
</div>
