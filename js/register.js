function Register(){

    var email       = $("#reg_email");
    var pass1       = $("#reg_pass1");
    var pass2       = $("#reg_pass2");
    var response    = $("[id=reg-response]");
    if(!NotEmpty(email) && !NotEmpty(pass1) && !NotEmpty(pass2))
    {
        response.html("Please Fill Data");

    }else if (pass1.val() !== pass2.val()) {

        response.html("Password not match..");

    }else if(pass1.val().length <= 6){

        response.html("Password Must be 6 Chars or higher");

    }
    else {
       $.ajax({

        type:"POST",
        url: "App/Functions.php",
        dataType: "JSON",
        data:{
            reg_email: email.val(),
            reg_pass1: pass1.val(),
            reg_pass2: pass2.val(),
        },success:function(Reg_Response)
        {
            if (Reg_Response.Status == "error_500") {

                response.html("Enter a valid email");

            }else if(Reg_Response.Status == "error_501"){

                response.html("e-mail is already in use");

            }else if (Reg_Response.Status == "registered_successfully") {

                response.html("You Have Registered Successfully...").css("color", "green");

            }else {
                response.html("");
            }
        }

       });
    }
}

function NotEmpty(caller)
{
    if(caller.val() == "")
    {
        return false;

    }else {

        return true;
    }
}