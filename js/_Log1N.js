function Login_Passes()
{
  var secretemail = $("#email");
  var secret      = $("#password");

		if (secretemail.val() == "" && secret.val() == "") {

			secretemail.css("border", "1px solid red");

			secret.css("border", "1px solid red");

		}else {
			$.ajax({
				type: "POST",
				url: "App/Functions.php",
				dataType: "JSON",
				data: {
					email: secretemail.val(),
					password: secret.val(),
				},success:function(Response){
					if (Response.Status == "Passed") {
						$("#response").text("You Are Logged in, Redirecting you...").css("background", "#1f9816");

							secretemail.css("border", "1px solid green");
							secret.css("border", "1px solid green");
							setTimeout(() => {
								window.location = "home/";
							}, 2000);
					}else if(Response.Status == "session_alreadyopen"){

						$("#response").text("Session is already running..").css("background", "rgb(152, 22, 22)");

					}else {

						$("#response").text("Incorrect, check your email or password..").css("background", "rgb(152, 22, 22)");
					}
				}
			});
		}
}