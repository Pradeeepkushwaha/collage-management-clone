<?php 
include'connect.php';
$uid=$_REQUEST['id'];

$getdata=mysqli_query($db,"SELECT * FROM user WHERE id='$uid'");
$getarray=mysqli_fetch_array($getdata);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>update.php</title>
 	<?php include'files.php'; ?>
 </head>
 <body class="bg-info py-5">
 	<div class="container bg-danger py-4 rounded ">
 		<div class="row justify-content-center py-4 w-100">
 			<div>
 				<table border="2">
				 	<tr>
					 	<td>Name</td>
					 	<td><?php echo $getarray['Name']; ?></td>
				 	</tr>
				 	 	<tr>
					 	<td>Email</td>
					 	<td><?php echo $getarray['Email']; ?></td>
				 	</tr>
				 	 	<tr>
					 	<td>Password</td>
					 	<td><?php echo $getarray['Password']; ?></td>
				 	</tr>
				 	 	<tr>
					 	<td>Mobile</td>
					 	<td><?php echo $getarray['Mobile']; ?></td>
				 	</tr>
				 	 	<tr>
					 	<td>Address</td>
					 	<td><?php echo $getarray['Address']; ?></td>
				 	</tr>
				 	
				 </table>
 			</div>
 		</div>
 	</div>
 
 </body>
 </html>