<?php
include 'Functions.php';
if (isset($_SESSION['email'])) {
$email = escape($_SESSION['email']);


$q = "SELECT * FROM tasks WHERE user_email = '$email'";
$exc = ConfirmQuery($q);
while ($rows = grab_user_info($exc)) { 

	$task = $rows['task_info'];
	$task_status = $rows['completed'];
    $task_id = $rows['id'];
	$count = rows_count($exc);
	if ($task == "") {
        
        $task = "no tasks to show";

    }else {
        $res = "
            <a style='border:none;' href='../App/Routes.php?task_id=$task_id' class='delete'>Delete</a>
            <a  class='complete' style='border:none;' href='../App/Routes.php?id=$task_id'>Complete</a>
        ";
    }
    if ($task_status == "Finished") {
        $task_span = "finished";
        $res = "

            <a style='border:none;' class='delete' href='../App/Routes.php?task_id=$task_id'>Delete</a>

            <a class='complete' style='border:none;' href='../App/Routes.php?untask_id=$task_id'>Uncompleted</a>";

    }else {

        $task_span = "";
    }
?>  
                    <div class="task-box <?php if(isset($task_span)){ echo $task_span; } ?>" id="deleted_task" style="padding:20px 0;float:left;width:100%;">
                        <?php  echo $task;?>
                    <?php
                    if (isset($res)) {

                        echo $res;
                    } 
                    ?>
                    </div>
<?php } }else { exit(header('Location: ../')); } ?>