<?php 
include("login1.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page with Animation and Glowing Text Box and Fonts</title>
<link rel="stylesheet" href="login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Averia+Serif+Libre:wght@300;400&family=Bungee+Inline&family=Bungee+Shade&family=Graduate&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="form-container">
    <h1 class="sign-up">Sign Up</h1>
    <form action="" method="POST">
      <input type="text" name="name" class="input" placeholder="Name">
      <input type="username" name="username" class="input" placeholder="Username">
      <input type="email" name="email" class="input" placeholder="Email">
      <input type="text" name="phoneno" class="input" placeholder="Phone no">
      <input type="password" name="password" class="input" placeholder="Password">
      <input type="password" name="confirmpassword" class="input" placeholder="Confirm Password">
      <div>
        <input type="submit" class="submit" value="Signup" name="Signuppp">

      </div>
    </form>
  </div>
</div>
</body>
</html>



<?php
        if($_POST['Signuppp'])
        {
         $name= $_POST['name'];
         $username= $_POST['username'];
         $email= $_POST['email'];
         $phoneno= $_POST['phoneno'];
         $password= $_POST['password'];
         $confirmpassword= $_POST['confirmpassword'];
         
         $query= "INSERT INTO signupp values('$name','$username','$email','$phoneno','$password','$confirmpassword')";
         $data=mysqli_query($conn,$query);

         if($data)
         {
     
         }
         else{
          
         }
        }

?>