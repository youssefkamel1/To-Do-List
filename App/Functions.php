<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "devcalender");

// Some Functions to Filter Speacialchars & Descode it
// Avoid XSS\HTML INJECTION Vulnerabilities
function clean($e)
{
	return htmlentities(htmlspecialchars(htmlspecialchars_decode($e))); 
}

// Filter String
function escape($x)
{
	global $connection;
	return $connection->real_escape_string($x);
}

// Convert mysqli_query To Function to make it easier
function ConfirmQuery($query)
{
	global $connection;
	return mysqli_query($connection, $query);
}



// Login Check
function check($email, $password)
{
   global $connection;
   return $query    = "SELECT id, is_logged FROM users WHERE email = '$email' AND password = '{$password}'";
}



// Get Rows Of " DATABASE "
function rows_count($row)
{
	global $connection;
	return mysqli_num_rows($row);
}



// Echo Message if code had error
function Queryerror($result, $message)
{
	global $connection;
	if (!$result) {
		die("WRONG CODE " . mysqli_error($connection));
	}else {
		echo $message;
		
	}
}



// Grab User Info From " DATABASE "
function grab_user_info($query)
{
	global $connection;
	return  mysqli_fetch_assoc($query);
}



// Update User Status  "Make is_logged = 1 " => "That's mean the user is active"
function update_user_status($user_email)
{
	global $connection;
	return $proccess = "UPDATE users SET is_logged = 1 WHERE email = '$user_email'";
}



// Redirect
function redirect($PATH)
{
	return exit(header("Location: $PATH"));
}



// Set Session
function SetSession($session_name, $session_value)
{
	return $_SESSION[$session_name] = $session_value;
}



// Set Response For Ajax Code
function setResponse($Response, $Status)
{
	return exit(json_encode(array("Response"=>$Response, "Status"=>$Status)));
}



// Last Login
function Lastlogin() 
{
	return date("d/m/Y h:i:s GMT");
}


// Grab Completed Tasks
function get_completed_tasks()
{
	global $connection;
	
	$excu = mysqli_query($connection, $q2);
	$result = rows_count($excu);
	$completed_tasks = $result;
}

// Login Check
if (isset($_POST['email'])) 
{
	$email      = clean(escape($_POST['email']));

	$passwrd   = $_POST['password'];

	$hashed     = sha1($passwrd);

	$select     = ConfirmQuery(check($email, $hashed));

	$email_hash = base64_encode($email);

	if (rows_count($select) == 1) {

		$grab = grab_user_info($select);

		$session_status = $grab['is_logged'];

		if($session_status == 1){

			setResponse("already_running","session_alreadyopen");

		}else {

			SetSession("email", $email);
			setResponse("user_found","Passed");
		}
	}else {
		
		setResponse("Not_found", "Invalid_data");
	}
}

//Check if Session['email'] is exists
function HomeCheck($session_id){
	if(isset($_SESSION[$session_id]))
	{
		$email  = $_SESSION[$session_id];

		$fetch  = ConfirmQuery(update_user_status($email));

		Queryerror($fetch,"");

		$data = grab_user_info(ConfirmQuery("SELECT * FROM users WHERE email = '$email'"));

	}else {

		echo redirect("../");
	}
}

// Logout Function
function Logout()
{
	if (isset($_SESSION['email'])) {
	$email  =  $_SESSION['email'];
	$time   =  Lastlogin();
	$query  =  "UPDATE users SET is_logged = 0, last_login = '{$time}' WHERE email = '$email'";
	$exc    = ConfirmQuery($query);
	if ($exc) {
		unset($_SESSION['email']);
		session_destroy();
		redirect("../");
	}else {

		echo Queryerror($exc, "");
	}
}
}

// Check E-Mail With Validate EMAIL..
function CheackMail($mailProvider)
{
	if (!filter_var($mailProvider, FILTER_VALIDATE_EMAIL)) {

		return setResponse("invalid_Mail", "error_500");
	}
}

//Make New User
function createUser($user_email, $user_password, $is_, $LoginTime)
{
	global $connection;
	return $q = "INSERT INTO users (email, password, is_logged, last_login) VALUES ('$user_email', '$user_password', '$is_', '$LoginTime')";
}

// Registeration Code...
if (isset($_POST['reg_email'])) {
	$reg_email = escape(clean($_POST['reg_email']));
	$reg_pass1 = $_POST['reg_pass1'];
	$reg_pass2 = sha1($_POST['reg_pass2']);
	$db_check  = ConfirmQuery("SELECT id FROM users WHERE email = '$reg_email'");
	if (rows_count($db_check) == "1") {

		setResponse("Mail_exists", "error_501");
		echo "Mail Exists";
	}else {
		$hisLoginTime = Lastlogin();
		$created = ConfirmQuery(createUser($reg_email, $reg_pass2, '0', $hisLoginTime));
		Queryerror($created, "");
		setResponse("Passed", "registered_successfully");
	}
}
// Add Task...
function AddTask($for_email, $task_info, $stats) 
{
	global $connection;

	$q = ConfirmQuery("INSERT INTO tasks (user_email, task_info, completed)VALUES ('$for_email', '$task_info', '$stats')");
	Queryerror($q, "");

}
// Checking Old Password
function checking_old_Password($email, $password)
{
	global $connection;
	return $q = ConfirmQuery("SELECT email, password FROM users WHERE email = '$email' AND password = '$password'");
	Queryerror($q, "");
}

// Update User Password in " DATABASE "
function update_usr_password($NEWPASSWORD, $email)
{
	global $connection;
	return $q = ConfirmQuery("UPDATE users SET password = '$NEWPASSWORD' WHERE email = '$email'");
	Queryerror($q, "");
}

// Change Password Function
function ChangePassword()
{
	if (isset($_SESSION['email'])) {
	
		if (isset($_POST['oldpass']) && isset($_POST['new1']) && isset($_POST['new2'])) {
			$email = $_SESSION['email'];
			$oldPassword = escape($_POST['oldpass']);
			$old_hashed  = sha1($oldPassword); 
			$newpassword = escape($_POST['new1']);
			$repeated    = escape(sha1($_POST['new2']));
			$check 		 = checking_old_Password($email, $old_hashed);
			if(rows_count($check) == 0)
			{
				setResponse("incorrect", "error_502");

			}else {

				$valid_pass = $old_hashed;
				if ($valid_pass == $repeated) {
					
					setResponse("incorrect", "error_503");

				}else {
					
					update_usr_password($repeated, $email);
					setResponse("changed", "code_200");
				}

			}
		}

}else {

	exit(header('Location: ../'));
}
}

// Delete Task / Delete All Tasks
function Delete_Task()
{
	if (isset($_SESSION['email'])) {

	if (isset($_GET['task_id'])) {
		$email 		= $_SESSION['email'];
		$task_id 	= intval($_GET['task_id']);
		$query 		= ConfirmQuery("DELETE FROM tasks WHERE id = '$task_id' AND user_email = '$email'");
		if ($query) {
			
			redirect('success.php');
		}
	}elseif (isset($_POST['command'])) {
	
		$email = $_SESSION['email'];

		$query = ConfirmQuery("SELECT * FROM tasks WHERE user_email = '$email'");
		if (rows_count($query) != 0) {
			$qu = ConfirmQuery("DELETE FROM tasks WHERE user_email = '$email'");
			if ($qu) {

				setSession('email', $email);
				
				setResponse("deleted", "task_deleted");
			}
		}else {

			setResponse("no_rows", "mission_fail");

		}


	}

}else {

	redirect('../');
}
}

// Set Task As Completed / Set All As Completed
function setComplete()
{
	if (isset($_SESSION['email'])) {
	if (isset($_GET['id'])) {
		// make it completed
		$email 		= $_SESSION['email'];
		$task_id 	= intval($_GET['id']);
		$query		= ConfirmQuery("UPDATE tasks SET completed = 'Finished' WHERE id = '$task_id' AND user_email = '$email'");
		if ($query) {
		 	
		 	redirect('success.php');
		} 
	 }elseif (isset($_GET['untask_id'])) {
	 	$email 		= $_SESSION['email'];
		$task_id 	= intval($_GET['untask_id']);
		$query		= ConfirmQuery("UPDATE tasks SET completed = 'not_finished' WHERE id = '$task_id' AND user_email = '$email'");
		if ($query) {
		 	
			 redirect('success.php');
			 
		}else {

			echo Queryerror($query, "WRONG Code");

		} 
	 }elseif (isset($_POST['command2'])) {
		// make all completed
		$email 		= $_SESSION['email'];
		$stats3	 	= "not_finished";
		$qu			= ConfirmQuery("SELECT * FROM tasks WHERE completed = '$stats3' AND user_email = '$email'");
		if (rows_count($qu) != 0) {
			$stats4 = "Finished";
			$query		= ConfirmQuery("UPDATE tasks SET completed = '$stats4' WHERE user_email = '$email'");
			if ($query) {
	
				SetSession('email', $email);
				setResponse('mission_success', 'tasks_completed');

			}else {
				
				echo Queryerror($query, "WRONG Code ");
			} 
		}else {
	
			setResponse('no_tasks', 'mission_fail');
		}
	 }
}else {

	redirect('../');
}
}

// Create New Task
function CreateTask()
{
	if (isset($_SESSION['email'])) {

	if (isset($_POST['Task'])) {

	    $task_info = escape(clean($_POST['Task']));
	    $for_task  = $_SESSION['email'];
	    $stats     = 'not_finished';
	    $query     = AddTask($for_task, $task_info, $stats);
	    setResponse("Success", "Task_Added");
	    setSession('email', $for_task);

	}
}else {
	
	redirect('../');
}
}
?>