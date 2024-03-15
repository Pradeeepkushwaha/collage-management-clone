<?php 
include'connect.php';

$a=$_POST['name'];
$b=$_POST['myid'];


$update=mysqli_query($db,"UPDATE user SET Name='$a' WHERE ID='$b'");
if($update) {
	echo '<div class="badge badge-success py-4 px-5 w-100">Succesfully Update</div>';

}
else{
	echo 'somthing went wrong ! data not update';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include'files.php' ?>
</head>
<body>

</body>
</html>