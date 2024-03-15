<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>totaldata</title>
     <?php include'files.php'  ?>
 </head>
 <body class="bg-dark text-success">
    <header class="bg-info text-danger">
        <div class="container--fluid">
            <div class="row justify-content-center">
                 <h1>This is the all data</h1>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div>
                <?php 
                    include'connect.php';
                    $array=mysqli_query($db,"SELECT *FROM  user ");
                    echo '<table border="3">    
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                    ';
                    while($myarray=mysqli_fetch_array($array)){
                      
                      ?>
                        <tr>
                            <td> <a href="update.php?id=<?php echo $myarray['no.']; ?>"><?php echo $myarray['name']; ?></a></td>
                            <td> <a href="update.php?id=<?php echo $myarray['no.']; ?>"><?php echo $myarray['email']; ?></a></td>
                            <td><?php echo $myarray['password'];?></td>
                            <td><?php echo $myarray['mobile']; ?></td>
                            <td><?php echo $myarray['address']; ?></td>
                            <td><a href="delete.php?id=<?php echo $myarray['no.'];?>"><button class="btn btn-danger">Delete </button></a></td>
                            <td><a href="editinfo.php?id=<?php echo $myarray['no.']; ?>"> <button class="btn btn-success">Edit </button></a></td>
                        </tr>
                        
                <?php } echo'</tbody></table>'; ?>

            </div>
        </div>
    </div>
 
 </body>
 </html>

 
