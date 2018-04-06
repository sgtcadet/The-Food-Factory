$(document).ready(function()
	{
		$("#loginform-container").hide(); 			//On page load hide Form
		document.getElementById('cover').className = "";
	});

function showForm()
		{
			//alert(1); //Working
			$("#loginform-container").fadeIn(); 	//Show form
			document.getElementById('cover').className = "overlay";
		}
function closeForm()
		{
			$("#loginform-container").fadeOut(); 	// hide From
			document.getElementById('cover').className = "";
		}