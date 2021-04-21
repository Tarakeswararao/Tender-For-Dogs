<?php session_start(); 
$conn=mysqli_connect('localhost','root','','dog') ;

if($_SESSION['type'] =='reg'){
  $sel="SELECT * FROM `profile` WHERE `id`='$_SESSION[r_id]'";
  // echo $sel;
  $result = $conn->query($sel);
  $com = $result->fetch_assoc();

}
else
{
  header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tinder for Dogs</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- bootstrap style link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
      body{
        padding: 0;
        margin: 0;
        background-color: rgba(221,223,222,0.4) !important
      }
    
      .navbar a{
        font-size: 13px;
        color: white !important
      }
      .navbar{
          z-index: 1;
          padding: 20px !important;
          font-size: 15px;
          font-weight: 700;
          text-transform: uppercase;
          background-color: rgba(0,0,0,0.2);
          border-bottom: 2px solid orange;
          box-shadow: 0 0 5px orange;
          
      }
 
      .active{
        background-color: orange !important;
        color: white
      }

      @media (max-width: 1000px){
        #navbarSupportedContent {
          text-align: center;
        }
      }

@media(max-width: 500px){
  .navbar{
    background-color:rgb(97,88,30);
    color: black
  }
}
    </style>

</head>
<body>

	
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand" href="home.php"><span style="font-size: 20px;" >Tinder For Dogs</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul  class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link " href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buyandsell.php">Buy/Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="meet.php">Meet UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="care.php">Pet Care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="train.php">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acc.php">Accessories</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['r_name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDrop" style="background-color: rgba(0,0,0,0.5) ; text-align: center;">
          <a class="nav-link" href="profile.php">PROFILE</a>
          <a class="nav-link" href="index.php">LOGOUT</a>  
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
