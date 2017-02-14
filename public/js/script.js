$('#Registro').click(function(){
	var dato=['#genre'].val();
	var route='http://localhost:8000/genero';
	var token=['#toke'].val();
	$.ajax({
		URl: route,
		headers: ['X-CSRF-TOKEN':token],
		type:'POST',
		dataType= 'json',
		data:{genre:dato},
	});
});