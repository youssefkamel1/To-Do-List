<?php
include '../App/Functions.php';
HomeCheck('email');
$usr_email        = $_SESSION['email'];
$q5               = "SELECT last_login FROM users WHERE email = '$usr_email'";
$exte             = grab_user_info(ConfirmQuery($q5));
$last_login_title = $exte['last_login'];
?>
<!DOCTYPE html>
<html>
<head> 
    <!-- Meta -->
    <meta charset="utf-8">
    <!-- styles -->
    <title> BugDealers - To Do List </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <!-- favicon -->
    <link rel="icon" href="images/favicon.png">
    
</head>   
<body>