$('.posts').find('.post').find('.interaction').find('.badge-success').on('click',function(){
	console.log('it works');
	$('#edit-modal').modal('show');
});