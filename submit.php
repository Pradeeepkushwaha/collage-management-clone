<?php  
include"connect.php";
$name=$_POST['name'];
$Password=$_POST['password'];
$Email=$_POST['email'];
$Mobile=$_POST['mobile'];
$Address=$_POST['address'];
$message='';


if ($name=="") {
	$message=' <div cls="asbadge badge-danger py-3 px-3 w-100">Please enter Name</div>';
	
}

elseif ($Email=="") {
	$message=' <div class="badge badge-danger py-3 px-3 w-100">Please enter Email</div>';
}
elseif ($Password=="") {
	$message=' <div class="badge badge-danger py-3 px-3 w-100">Please enter Password</div>';
}
elseif ($Mobile=="") {
	$message=' <div class="badge badge-danger py-3 px-3 w-100">Please enter Mobile No.</div>';
}
elseif ($Address==""){
	$message=' <div class="badge badge-danger py-3 px-3 w-100">Please enter Address</div>';
}
else{
	echo $otp=rand(000000,999999);

	$add=mysqli_query($db,"INSERT INTO  user SET Name='$name',Password='$Password',Email='$Email',Address='$Address',Mobile='$Mobile', otp='$otp' ");

	if ($add) {
	$message='<div class="badge badge-success py-4 px-3 w-100 font-weight-bold">Succesfuly Submit</div>';
}
else {
	$message='<div class="badge badge-danger py-3 px-3 w-100">Data not submit</div>';
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <?php include"files.php"; ?>


</head>
<body>
	<header class="py-5 "></header>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php echo "$message"; ?>
					<a href="viewall.php" class="badge badge-info py-3 px-5 " class="rounded">View all data</a>
					<a href="totaldata.php" class="badge badge-info py-3 px-5 " class="rounded">Total data</a>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
