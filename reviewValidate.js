function validateComment() {
	var comment = document.commentForm.comment;
	if(comment.value.length==0)
	{
		window.alert("Cannot submit an empty review");
		comment.focus();
		return false;
	}
	else {
		return true;
	}
}