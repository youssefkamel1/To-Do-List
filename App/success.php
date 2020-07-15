<?php
include 'Functions.php';
if (isset($_SESSION['email'])) {
    $msg = $_SESSION['email'];
}else {
  
  redirect('../');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mission Done Successfully</title>
	<link rel="stylesheet" href="../css/sweetalert2.min.css"/>
</head>
<body>

</body>
<script type="text/javascript" src="../js/sweetalert2.min.js"></script>
<script type="text/javascript">
	Swal.fire(  
	'Sucess',
  'Mission Done Successfully...',
  'success');
setTimeout(function (){

      window.location = ("../home/");
    }, 700);
</script>
</html>