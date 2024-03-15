<?php 

include'connect.php';
function getdata($db)
{

	$getdatas=mysqli_query($db,"SELECT * FROM user order by no. desc");
	$array=mysqli_fetch_array($getdatas);
	return($array);
}

?>

<?php 
$data=getdata($db);

echo $data['name'];
echo $data['mobile'];
echo $data['email'];
echo $data['password'];
echo $data['address'];


?>