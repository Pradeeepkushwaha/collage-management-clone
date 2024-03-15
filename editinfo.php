<?php 
include'connect.php';
$uid=$_REQUEST['id'];

$getdata=mysqli_query($db,"SELECT * FROM user WHERE id='$uid'");
$array=mysqli_fetch_array($getdata);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>editinfo.php</title>
	<?php include'files.php'; ?>
</head>
<body class="bg-danger py-5">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-6 py-4 px-3 rounded bg-info">
				<form action="updatenow.php" method="post">
					<input type="hidden" name="myid" value="<?php echo $array['no.']; ?>">
					<label class="bg-warning rounded"><i class="fa fa-user-circle text-info pl-5"></i><span class="text-danger px-3"><span>Enter New Name</span></label>
					<input type="text" name="name" value="<?php echo $array['name']; ?>">
					<label class="bg-warning rounded"><i class="fa fa-user-circle text-info pl-5"></i><span class="text-danger px-3"><span>Enter New Email</span></label>
					<input type="text" name="Email" value="<?php echo $array['email']; ?>">
					<a href="delete.php?id=<?php echo $myarray['no.']; ?>">
					<button class="btn btn-success">update now</button></a>
			    </form>
			</div>
		</div>
	</div>
</body>
</html>
