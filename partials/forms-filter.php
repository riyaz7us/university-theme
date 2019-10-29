<form action="archive-universities.php" method="get" id="filter">
	<label for="course_duration">Course Duration:</label>
	<select id="course_duration" name="course_duration" >
		<option value="" default> Year</option>
		<option value="1">1 Year</option>
		<option value="4">4 Years</option>
	</select>
	<label for="shift">Shift:</label>
	<select id="shift" name="shift" >
		<option value="" default>Shift</option>
		<option value="full">Full-Time</option>
		<option value="part">Part-Time</option>
	</select>
	<input type="hidden" name="action" value="myfilter">
	<button type="submit" class="btn-primary mt-2">Filter</button>
</form>

<script type="text/javascript">

(function($) {
	
	// change
	$('#filter').on('submit', function(){

		// vars
		var url = '<?php echo home_url('universities'); ?>';
			args = {};
			
		
		// loop over filters
		$('#archive-filters .filter').each(function(){
			
			// vars
			var filter = $(this).data('filter'),
				vals = [];
			
			
			// find checked inputs
		course_duration: $(this).find('#course_duration').val(),
		shift: $(this).find('#shift').val(),
		university: $(this).find('#university').val(),
	
			});
			
			
			// append to args
			args[ filter ] = vals.join(',');
			
		});
		
		
		// update url
		url += '?';
		
		
		// loop over args
		$.each(args, function( name, value ){
			
			url += name + '=' + value + '&';
			
		});
		
		
		// remove last &
		url = url.slice(0, -1);
		
		
		// reload page
		window.location.replace( url );
		

	});

(jQuery);

</script>