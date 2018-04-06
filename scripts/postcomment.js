


function postComment()
{
	$(document).ready(function()
	{
		//alert("work");
		var user = $("#user").val();
		var msg = $("#message").val();

		var comment = user + "\n" + msg;

		document.getElementById("poster").innerHMTL = comment;
		
		//alert(user + " " + msg);
		console.log(user + " "+ msg);
	});
}