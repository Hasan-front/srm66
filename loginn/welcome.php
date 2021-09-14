<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=True){
  header("location: login.php");
  exit;
   // code...
 } 
 ?>


 <?php 

      $servername = "localhost";
      $username = "root";
      $password ="";
      $database = "Result";

          $conn = mysqli_connect($servername, $username, $password, $database);
          if (!$conn) 
          {



                die("sorry we failed to connect: " .mysqli_connect_error());

          }
          

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<title>roll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="h3.php"/>
</head>
<body >
  <?php require 'partials/nav.php' ?>
<form>
  <div class="mb-3">
    <label for="text" class="form-label">enter</label>
    <input type="number" class="form-control" id="name"  name="name" aria-describedby="emailHelp">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   <?php

 $res1 = $_GET['name'];


   ?>
</div>
<div class="container ">
<table class="imagetable"> >
  <thead>
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">maths</th>
      <th scope="col">python</th>
      <th scope="col">Web-Development</th>
    </tr>
  </thead>

  <tbody>

<?php
  $sql = "SELECT * FROM `enroll` WHERE `Roll no` = $res1 ";
  $result = mysqli_query($conn, $sql);
  if ($result>0) 
  {
  
   while ($row = mysqli_fetch_assoc($result)) {

     echo "<tr>
      <th scope='row'>". $row['Roll no'] ."</th>
      <td>". $row['Maths'] ."</td>
      <td>". $row['Python'] ."</td>
      <td>". $row['Web-Development'] ."</td>
    </tr>";
   

  }
}
else
{
  echo "no row found";
}
 ?>

    
  </tbody>
</table>
</div>
<div > 
<a href="/loginn/logout.php" class="myButton">logout</a>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>