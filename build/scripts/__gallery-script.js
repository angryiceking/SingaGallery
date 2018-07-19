$('.comment').keyup(function(e){
	e.preventDefault();

	if (e.keyCode == 13) {
		var comment = $(this).val();
		var id = $(this).attr('data-attr-art-id');
		var user = $(this).attr('data-attr-user-id');
		$.ajax({
			url: 'gallery/art/comment',
			type: 'POST',
			data: {comment: comment, id: id, user: user },
			dataType: 'html',
			success: function(msg) {
				$('#img-div-'+id).html(msg);
			}
		})
	}
})