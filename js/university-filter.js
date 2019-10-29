$ = jQuery;
var unis = $("#unis");
var searchform = unis.find("form");
//$(".widget-area").removeClass("col-md-3");


searchform.submit(function(e){
	e.preventDefault();
	//console.log("form submitted");
	console.log(searchform.serializeArray());

	var data = {
		action: "unis",
		course_duration: unis.find('#course_duration').val(),
		shift: unis.find('#shift').val(),
		university: unis.find('#university').val(),
	}

	$.ajax({
		url : ajax_url,
		data : data,
		success : function(response){
			unis.find("ul").empty();
			for (var i=0; i < response.length; i++){
				console.log(response[i]);
				var html = "<li class='col-md-6 card mt-2 p-4'>"+
								"<h5 class='card-title'>" + response[i].title + "</h5><br/>"+
								"<h6 class='text-muted'>"+ response[i].rel_university +"</h6><hr>"+
								"<span>"+response[i].course_type+"</span><br>"+
								"<button class='btn btn-primary btn-block' onClick='window.location.href=`"+response[i].permalink+"`'>know more</button>"+
								"</li>";
				unis.find('ul').append(html);
				unis.find('#response').remove();
			};
		}
	});

});
