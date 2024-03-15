    <?php 
    include"connect.php";
$array = mysqli_query($db,"SELECT * FROM user order by no. desc");
$myarray=mysqli_fetch_array($array);
    ?> 
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update.php</title>
    <?php include'files.php'; ?>
 </head>
 <body class="bg-success ">
    <div class="container">
        <div class="row justify-content-center py-5" >
            <table border="5">
                <tr>
                    <td>Name</td>
                    <td> <?php echo $myarray['Name']; ?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <?php echo $myarray['Email']; ?> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <?php echo $myarray['Password']; ?> </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td> <?php echo $myarray['Address']; ?> </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><?php echo $myarray['Mobile']; ?> </td>
                </tr>
                                <tr>
                    <td>Active</td>
                    <td><?php if ($myarray['activeu']==0){
                        echo '<span class="badge badge-danger">False<span>';

                    }
                        else{
                            echo'<span class="badge badge-info">True<span>';
                        }
                     ?> </td>
                </tr>
            </table>
        </div>
    </div>
 </body>
 </html>