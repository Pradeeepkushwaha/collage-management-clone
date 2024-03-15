<?php
$db = mysqli_connect("localhost","root","","kushwaha");
if(mysqli_connect_error()){
	echo "No Connection Found".mysqli_error();
    exit();	
}

?>