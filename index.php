
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <?php include'files.php' ?>
</head>

<body>
  <section>  
          <div class="form text-center">
                <div class="text-center">
      <img src="images/admin.png" width="100px " height="100px ">
      <h1>Admin login</h1>
    </div>
      <form action="submit.php" method="post"> 
    <label><i fa fa-user></i> Enter your Name</label>
    <input type="text" name="name">
    <br>
    <label>Email</label>
    <input type="Email" name="email">
    <br>
       <label>Password</label>
    <input type="text" name="password">
    <br> 
    <label>Enter your Mobile No.</label>
    <input type="text" name="mobile">
    <br>
    <label>Enter your Address</label>
    <input type="text" name="address">
    <br>
    <button class="mybtn">Submit</button>
  </form>
      <form method="post"action="search.php">
        <input type="text" name="mysearch">
        <button class="btn btn-success">Search</button>
      </form>
    </div> 
    <div>

    </div>
  </section>
</body>
</body>
</html>