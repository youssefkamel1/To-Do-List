<?php
// Routing Page Arrangment Requests....
include 'Functions.php';
if (isset($_POST['Task'])) {

	CreateTask();

}elseif (isset($_GET['id']) OR isset($_GET['untask_id']) OR isset($_POST['command2'])) {

	setComplete();

}elseif (isset($_GET['task_id']) OR isset($_POST['command'])) {

	Delete_Task();

}elseif (isset($_POST['oldpass']) && isset($_POST['new1']) && isset($_POST['new2'])) {

	ChangePassword();
}
?>