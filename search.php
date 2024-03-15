<?php 
include'connect.php';

$a=$_POST['mysearch'];
$search=mysqli_query($db,"SELECT * FROM user WHERE name like '%$a%'limit 5 ");

while($array=mysqli_fetch_array($search)) {
	echo $array['name'].'<br>';
}

?>