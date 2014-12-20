
var events = [];
var item;

$('#neweventokbtn').click(function(){
	var $eventTitle = $('#neweventtitle').val();
	var $eventDescription = $('#neweventdescription').val();
	var $eventPic = $('#neweventphoto').val();
	// var $itemTitle = $('#itemtitle').val();
	// var $itemDescription = $('#itemdescription').val();

	if(document.getElementById('eventdescription') && document.getElementById('collapsetitle'))
	{
		document.getElementById('collapsetitle').id = 'collapsetitle' + events.length.toString();
		document.getElementById('eventdescription').id= 'eventdescription' + events.length.toString();
		document.getElementById('eventimage').id = 'eventimage' + events.length.toString();
	}
	//try to make all other panels collapsed

	$('#accordion').append(
			"<div class='panel panel-default'>\
				<div class='panel-heading' role='tab' id='heading'>\
					<h4 class='panel-title'>\
						<a id='collapsetitle' href='#collapse' data-toggle='collapse' data-parent='#accordion' aria-expanded='true' aria-controls='newitem'></a>\
					</h4>\
				</div>\
				<div id='collapse' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading'>\
					<div class='panel-body'>\
						<p id='eventdescription'></p>\
						<img id='eventimage' class='img-responsive'>\
					</div>\
				</div>\
			</div>\
			<br>"
		);
	var eventObj = {
		title: $eventTitle,
		description: $eventDescription,
		photo: $eventPic
	};
	document.getElementById('heading').id = 'heading' + events.length.toString();
	document.getElementById('collapsetitle').href = '#collapse' + events.length.toString();
	document.getElementById('collapse')["aria-labelledby"] = 'heading' + events.length.toString();
	document.getElementById('collapse').id = 'collapse' + events.length.toString();
	//try to make all other panels collapsed

	for(i = 0; i < events.length;i++){
		if(document.getElementById('collapse' + i.toString())){
			document.getElementById('collapse' + i.toString()).classList.remove('in');
		}
	}
	events[events.length] = eventObj;

	
	document.getElementById('collapsetitle').innerHTML = $eventTitle;
	document.getElementById('eventdescription').innerHTML = $eventDescription;
	document.getElementById('eventimage').src = $eventPic;
	$('#myModal').modal('hide');

});

$('#addnewitembtn').click(function(){
	var $itemTitle = $('#itemtitle').val();
	var $itemDescription = $('#itemdescription').val();
	item = {
		title: $itemTitle,
		description: $itemDescription,
		events: events
	};
	$.ajax({
		type: 'POST',
		url: '/sharemytravel',
		success: function(response){
			window.location.href = '/itemlist';
		},
		error: function(xhr,status,error){
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		},
		data:{
			item: item
		},
	});
});

