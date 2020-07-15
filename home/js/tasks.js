if (window.XMLHttpRequest) 
{
    xmlhttp = new XMLHttpRequest();
}

xmlhttp.onreadystatechange = function() 
{
    if (this.readyState == 4 && this.status == 200)
    {
        document.getElementById("tasks-message").innerHTML = this.responseText;
    }
};
    xmlhttp.open("POST","../App/view_all_tasks.php",true);
    xmlhttp.send();

function Changepass()
{
  var defaultPass = $("#default");
  var newPass     = $("#new1");
  var newpass2    = $("#new2");
  if (defaultPass.val() == "" && newPass.val() == "" && newpass2.val() == "") {

	$("#changeResponse").text('Please Fill Data').css("color", "red");

}else if(newPass.val() != newpass2.val()) {

		$("#changeResponse").text('Password not match.').css("color", "red");
	
	}else {

		$.ajax({

			type: "POST",
			url:  "../App/Routes.php",
			dataType: "JSON",
			data: {

				oldpass: defaultPass.val(),
				new1: newPass.val(),
				new2: newpass2.val(),

			},success:function(Response)
			{
				if (Response.Status == "error_502") {

					$("#changeResponse").text('incorrect password!').css("color", "red");

				}else if(Response.Status == "error_503")
				{
					$("#changeResponse").text("use password you didn't used before").css("color", "red");
					
				}else if(Response.Status == "code_200")
				{
					setTimeout(function (){

						window.location = '../App/Success.php';

					}, 100);
				}
			}
		});

	}
}
