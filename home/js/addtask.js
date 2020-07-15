// Input Var

var task_inf0 = $("#task_path");

function AddTask()
{
	if (task_inf0.val() == "") {
		task_inf0.attr("placeholder", "Please type your task");
	}else {

		$.ajax({

			type: "POST",
			url: "../App/Routes.php",
			dataType: "JSON",
			data: {

				Task: task_inf0.val(),

			}, success:function(Response)
			{
				if(Response.Status == "Task_Added")
				{
					setTimeout(function (){

						window.location = '../App/success.php';
					  }, 100);
				}else 
				{
					alert("Something went wrong try again....");
				}
			}
		});
	}
}

function Delete_All()
{

		$.ajax({

			type: "POST",
			url: "../App/Routes.php",
			dataType: "JSON",
			data:{

				command: 'deleteAllF0rMe',
				
			},success:function(Response)
			{
				if (Response.Status == "task_deleted") 
				{
					setTimeout(function (){

						window.location = '../App/success.php';

					}, 100);
				}else if(Response.Status == "mission_fail")
				{
					$(".del-all").text("No tasks...");
				}
			}
		});

}

function Complete_All()
{
	$.ajax({

		type: "POST",
		url: "../App/Routes.php",
		dataType: "JSON",
		data:{

			command2: 'completeAllF0rMe',
			
		},success:function(Response)
		{
			if (Response.Status == "tasks_completed") 
			{
				setTimeout(function (){

					window.location = '../App/success.php';

				}, 100);
			}else if(Response.Status == "mission_fail")
			{
				$(".read-all").text("No tasks...");
			}
		}
	});


}