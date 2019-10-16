$ = jQuery;
var unis = $("#unis");
var searchform = unis.find("form");

searchform.submit(function(e){
	e.preventDefault();
	//console.log("form submitted");
	//console.log(searchform.serializeArray());

	var data = {
		action: "unis",
		
		course_duration: unis.find('#course_duration').val(),
	}

	$.ajax({
		url : ajax_url,
		data : data,
		success : function(response){
			console.log(response);
		}
	});

});
