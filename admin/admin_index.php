<?php
include '../db_connection.php';
   session_start();
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM adminlogin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
 
      
      $count = mysqli_num_rows($result);
      
     
		
      if($count == 1) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['myusername'] = $myusername;  
         header("location: all_cars_admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }



?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="admin_style.css">
      
   </head>
   
   <body>
  <div class="container">
    <div class="login-box">
      <div class="login-header">
        <h2>Admin Login</h2>
      </div>
      <div class="login-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" />
          </div>
          <button type="submit" class="btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
