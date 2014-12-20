
$("button[name|='deleteitembtn']").click(function(){
	var id = $('#dummySpan').text();
	$.ajax({
		type: 'POST',
		url: '/item/delete',
		success: function(response){
			window.location.href = '/itemlist';
		},
		error: function(xhr,status,error){
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		},
		data:{
			id : id
		},
	});
});