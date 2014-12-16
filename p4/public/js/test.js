$('#addbutton').click(function(){
	var htmlStr = "<div class='container'><p>this is test</p></div>";
	$('#finalpanel').before(
		"<div class='container-fluid'>\
			<div class='row'>\
				<label>Title   </label>\
				<input type='text'>\
			</div>\
			<div class='row'>\
				<label>Title   </label>\
				<textarea rows='4' cols='50'></textarea>\
			</div>\
			<div class='row'>\
				<button type='button' id='eventokbutton' class='btn btn-primary'>OK</button>\
				<button type='button' id='eventcancelbutton' class='btn btn-default'>Cancel</button>\
			</div>\
		</div>"
		);
});

