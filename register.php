<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dogs Tender</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- bootstrap style link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
      body{
        padding: 0;
        margin: 0
      }
      .navbar a{
        font-size: 13px;
        color: white !important
      }
      .navbar
      {
         z-index: 1;
          padding: 20px !important;
          font-size: 15px;
          font-weight: 700;
          text-transform: uppercase;
          background-color: rgba(255,255,255,0.2);
          border-bottom: 2px solid orange;
          box-shadow: 0 0 5px orange;
      }
      .navbar li a:hover{
          color: orange !important;
      }

      @media (max-width: 1000px){
        #navbarSupportedContent {
          text-align: center;
        }
      }

/*mobile side nav*/
      .offcanvas-header{ display:none; }

@media (max-width: 500px) {
  .offcanvas-header{ display:block; }
  .nav-link{
    color: white !important;  
  }
  .navbar-collapse {
    text-align: left !important;
     height: 100%;
    z-index: 1;
    position: fixed;
    top:0; 
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: black;
    transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
  }
  .navbar-collapse.show {
    visibility: visible;
    transform: translateX(-100%);
  }
}


#dogImg{
    margin-top: -39.3%;
    background: url("https://img5.goodfon.com/wallpaper/nbig/b/c5/sobaka-samoed-les-priroda-iazyk-boke.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1250px;
    padding: 0%;
    width: 100%;
}
#login{  
    padding-top: 65%;
    margin: auto;
   
}

.card{
    color: white;
    border: 2px solid black;
    background-color: rgba(0, 0, 0, 0.5);
}
/*@media (max-width: 1000px){
  #dogImg{
    height: 900px;
  }
}
*/
</style>

</head>
<body>


</nav>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
    <!-- <img src="assets/brand logo.png" width="40" height="50" style="margin-bottom: -15px"> -->
    <span style="font-size: 20px;" >Tender For Dogs</span>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <div class="offcanvas-header mt-3">  
      <!-- <button class="btn btn-outline-light btn-close float-right" id="close"> &times  </button> -->
      <h5 class="py-2 text-white">LOGO</h5>
    </div>

      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="register.php">Buy/Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Meet UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Pet Care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Accessories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Traineers</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LogIn</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- register -->
<div class="container-fluid" id="dogImg">
  <div class="container">
    <div class="col-md-6" id="login">
      <div class="card">
        <div class="card-header">
          <h3 class="">Register here</h3>
        </div>
        <div class="card-body">
          <div class="form">
            <!-- form -->
            <form action="" method="post">
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control" required name="username">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" required name="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" required name="password">
              </div>
              <button class="btn btn-success float-right"  name="submit">Register</button>
              <!-- <button type="button" class="btn btn-primary float-right" onclick="window.location.href='login.php'">Login</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>


   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>
</html>

<?php 
$conn=mysqli_connect('localhost','root','','dog') ;

  if (isset($_POST['submit'])) {
  
  $insert=mysqli_query($conn, "INSERT INTO `register`(`name`,`email`,`password`) VALUES 
  ('$_POST[username]','$_POST[email]','$_POST[password]')");
  
  if ($insert===TRUE) {
    echo "<script>alert('Registered Successfully')</script>";
    echo "<script>window.location.href='login.php'</script>";
  }else{
    echo "<script>alert('Something Wrong')</script>";
  }
 }
?>