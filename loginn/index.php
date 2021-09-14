<?php 
$login=False; 
$show_error=False;
if($_SERVER['REQUEST_METHOD'] == "POST" ) {
        
        include 'partials/dbconn.php';
        $email=$_POST['email'];
        $password=$_POST['password'];
    

            $sql= "Select * from user where  user_name = '$email' AND password = '$password'";

            $result = mysqli_query($conn, $sql);
            $num= mysqli_num_rows($result);
              if ($num == 1) {
                $login=True;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $email;
                header("location: welcome3.php");
                
           } 
           else{
            $show_error ='Invalid Credentials';
           }
        }
           
     


        ?>
      





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="h3.php"/>
  </head>
  <body>
  <?php require 'partials/nav.php' 
  ?>

    <?php  
     if($login)
      {    
              
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are now logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';  

      }
      if($show_error)
      {    
              
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error</strong> '.$show_error.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';  

      }
    ?>
  <div class="container">
  <h1 class="text-center">Login  to continue</h1>
  </div>

    <div class="container">
      <form action="/loginn/login.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
                <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1"><br>
         <div class="container">
        <button type="submit" class="btn btn-primary">LOG-IN</button>
        </div>
      </form>
      </div>



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

