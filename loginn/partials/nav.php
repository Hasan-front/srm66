<?php  
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
  $loggedin =true;
  // code...
}
else{
  $loggedin = false;
}


    echo ';<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=https://images-platform.99static.com/lOHAQGRYxW3pnRmJZEAfmTB_vKM=/500x500/top/smart/99designs-contests-attachments/22/22176/attachment_22176409 height="50" width="110"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/loginn/welcome3.php">Home</a>
        </li>';
        if(!$loggedin){

        echo'<li class="nav-item">
          <a class="nav-link" href="/loginn/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginn/signup.php">Sign-up</a>
        </li>';
      }
      if($loggedin){
       echo' <li class="nav-item">
          <a class="nav-link" href="/loginn/logout.php">Logout</a>
        </li>';
      }
        
        
       echo' </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>';
?>