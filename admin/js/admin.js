$('#allot_group').click(function(){
   guide =  $('#guide').val();
    leader = $('#leader').val();
    if(guide == ""){
    	return false;
    }
    if(leader == ""){
    	return false;
    }
			  $.ajax({
		   	url: "ajax/ajax_allot_group.php",
			method: "POST",
			data:{guide: guide, leader:leader}, 
			dataType: "html"
		}).done(function(msg) {
		  $('#result').html(msg);
		});
 		setTimeout(function()
 			{
 				$('#result').html('');
 				location.reload();
 			}, 2000);
			  
});
/////Project Allotment Start
$('#allot_project').click(function(){
   guide =  $('#guide').val();
    project_id = $('#project_id').val();
    
    if(guide == ""){
    	return false;
    }
    if(project_id == ""){
    	return false;
    }
			  $.ajax({
		   	url: "ajax/ajax_allot_project.php",
			method: "POST",
			data:{guide: guide, project_id:project_id}, 
			dataType: "html"
		}).done(function(msg) {
		  $('#result').html(msg);
		});
 		setTimeout(function()
 			{
 				$('#result').html('');
 				location.reload();
 			}, 2000);
			  
});


/////Project Allotment Closed
$('#allot_student').click(function(){
   student =  $('#student').val();
    group = $('#group').val();
    if(student == ""){
    	return false;
    }
    if(group == ""){
    	return false;
    }

			  $.ajax({
		   	url: "ajax/ajax_allot_student.php",
			method: "POST",
			data:{student: student, group:group}, 
			dataType: "html"
		}).done(function(msg) {
		  $('#result').html(msg);
		});
 		setTimeout(function()
 			{
 				$('#result').html('');
 				location.reload();
 			}, 2000);
			  
});

$('#createGroup').click(function(){
	 users_per_group = $('#users_per_group').val();
	if(users_per_group == ""){
	 return false;
	}
			  $.ajax({
		   	url: "ajax/ajax_create_group.php",
			method: "POST",
			data: {users_per_group: users_per_group},
			dataType: "html"
		}).done(function(msg) {
		  $('#result').html(msg);
		});
 		setInterval(function()
 			{
 				$('#result').html('');	
 			}, 4000);
			  

});

$('#addguide').click(function(){
		guideid = $('#guidename').val();
		projectid = $('#projectname').val();

		if(guideid == ""){
			return false;
		}
		if(projectid){
			return false;
		}

		  $.ajax({
		   	url: "ajax/add_guide.php",
			method: "POST",
			data: { guideid: guideid, projectid: projectid }
			//dataType: "html"
		}).done(function(msg) {
		  $('#result').html(msg);
		});
 		setInterval(function()
 			{
 				$('#result').html('');	
 			}, 3000);
			 
});

function verify($id){
      userid = $id;
      if(userid == ""){
      	return false;
      }
		  $.ajax({
		   	url: "ajax/ajax_verify_user.php",
			method: "POST",
			data: { userid: userid}
			//dataType: "html"
		}).done(function(msg) {
		  $('.row'+userid).html('<td colspan="4" style="color: green;">'+msg+'<td>');
		});
 		setInterval(function()
 			{
 				$('#result').html('');	
 			}, 3000);
}


function deleteUser($id){
      userid = $id;
      if(userid == ""){
      	return false;
      }
		  $.ajax({
		   	url: "ajax/ajax_delete_user.php",
			method: "POST",
			data: { userid: userid}
			//dataType: "html"
		}).done(function(msg) {
		  $('.row'+userid).html('<td colspan="4" style="color: red;">'+msg+'<td>');
		});
 		setInterval(function()
 			{
 				$('.row'+userid).html('');	
 			}, 3000);
}
