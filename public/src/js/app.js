var postId = 0;
var postBodyElement = null;

$('.posts').find('.post').find('.interaction').find('.badge-success').on('click',function(event){
	//console.log('it works');
event.preventDefault();

	postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
   
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click',function(){
	 $.ajax({
            method: 'POST',
            url: url,
            data: {body: $('#post-body').val(), postId: postId, _token: token}
        })
		.done(function(msg){
				
				$(postBodyElement).text(msg['new_body']);

				$('#edit-modal').modal('hide');
		});
});