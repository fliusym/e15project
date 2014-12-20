
$("button[name|='deleteitembtn']").click(function(){
	
	var cur = $(this).attr('name');
	//get the id of the item
	var id = cur.substring(14);
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