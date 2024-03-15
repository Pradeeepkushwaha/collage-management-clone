<?php 
include'connect.php';
$uid=$_REQUEST['no.'];

$del=mysqli_query($db,"DELETE FROM user WHERE no.= $uid");

?>
