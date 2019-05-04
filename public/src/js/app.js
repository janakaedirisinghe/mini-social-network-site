$('.posts').find('.post').find('.interaction').find('.badge-success').on('click',function(event){
	//console.log('it works');
event.preventDefault();
var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
//console.log(postBody);

$('#post-body').val(postBody);

	$('#edit-modal').modal();
});

$('#model-save').on('click',function(){
	$.ajax()({
		method: 'POST',
		url: url,
		data: { body: $('#post-body').val(), postId: '', _token: token }

	})
		.done(function(msg){
			console.log(msg['message']); 
		});
});