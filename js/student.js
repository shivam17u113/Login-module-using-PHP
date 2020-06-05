$('#viewgrp').click(function(){
	user_id = $('#user_id').val();
  if(user_id == ""){
    return false;
  }
			  $.ajax({
		   	url: "ajax/ajax_view_group.php",
			method: "POST",
			data: {user_id: user_id},
			dataType: "html"
		}).done(function(msg) {
		  $('#displayResult').html(msg);
		  //console.log(msg);
		});
 		setInterval(function()
 			{
 				$('#result').html('');	
 			}, 4000);
			  

});
function comment(id){
  comment = $('#comment').val();
user_id = $('#user_id').val();
  
  if(user_id == ""){
    return false;
  }
  if(comment == ""){
    return false;
  }
  
  $.ajax({
        url: "ajax/ajax_comment.php",
      method: "POST",
      data:{user_id:user_id,project_id: id, comment:comment}, 
      dataType: "html"
    }).done(function(msg) {
            
    });
    setTimeout(function()
      {
        location.reload();
      }, 2000);
}
