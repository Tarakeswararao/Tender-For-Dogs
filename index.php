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
 /*navbar*/
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

/*@media (max-width: 600px) {
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
}*/
/*navbar end*/

@media(max-width: 500px){
  .navbar{
    background-color:rgb(97,88,30);
    color: black
  }
}
 

/*footer*/
footer{
  border-top:5px solid orange;
  width:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: #343a40;
  color:white;
}
footer p a{
  color:white;

}
.fab{
  font-size: 20px;
}
footer a:hover{
  color: orange;
  text-decoration: none;
}
/*footer end*/
/*index*/
 #dogImg{
    margin-top: -50%;
    background: url("https://img5.goodfon.com/wallpaper/nbig/b/c5/sobaka-samoed-les-priroda-iazyk-boke.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1200px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 80%;
}
/* about */
#about{
    background :url("assets/about-bg.jpg") ;
    background-size: cover;
    padding: 5%;
}

img {
    margin-left: 20%;
    margin-top: -18%;
}

/* about-us*/
#about-us{
    padding: 20px;
}

/* history */
#history{
  height: 350px;
    background-image: url('https://i2.wp.com/www.sporcle.com/blog/wp-content/uploads/2018/03/1-56.jpg?resize=1280%2C720&ssl=1');
    background-size: cover;
    
}

i{
  color: orange;
  font-size: 20px !important;
  padding-right: 10px;
}
@media(max-width: 500px){
  #abtImg img {
    margin-left: 10%;
    margin-top: -2%;
}
  }
}

@media (max-width: 1000px){
  #dogImg{
    height: 700px;
  }
}

@media(max-width: 500px){
  #main{
    padding-top: 150%;
}
}

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
      <!-- <button class="btn btn-outline-danger btn-close float-right"> &times Close </button> -->
      <h5 class="py-2 text-white">Tender For Dogs</h5>
    </div>

      <li class="nav-item">
        <a class="nav-link" href="register.php">Home</a>
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
<!-- navbar -->
<!-- index -->
<div class="container-fluid" id="dogImg">
  <div class="container" >
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight" id="main">
        <h2 style="font-weight: bold; color: white;"> CARE FOR <span style="color: orange;">DOG'S</span> </h2>
      </div>
      <!-- <a href="register.php" class="btn text-uppercase btn-outline-light btn-lg mr-3 mb-3 wow bounceInUp"> What's new</a>  -->
      <!-- <a href="register.php" class="btn text-uppercase btn-outline-light btn-lg mb-3 wow bounceInDown"> Courses</a> -->
    </div>
  </div>

</div>
<!-- About -->
<div class="container-fluid fh5co-network" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 class="wow bounceInUp" style="font-weight: bold;">ABOUT US</h4>

<hr />
        <h5 class="wow bounceInLeft">NETWORK SUMMER 2017</h5>
        <p class="wow bounceInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
          Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
          of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
          leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
          release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-md-6" id="abtImg">
         <img src="assets/dog1.jpg" alt="gym" /> 
      </div>
    </div>
  </div>
</div>

<!-- About Us -->

<div id="about-us" class="container-fluid fh5co-about-us pl-0 pr-0 parallax-window" data-parallax="scroll">
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6">
        <figure class="wow bounceInDown"> <img src="assets/dog2.jpeg" alt="gym" width="350px" style="margin: 25% 0% 0% 0%;" /> </figure>
      </div>
      <div class="col-md-6">
        <h2 style="font-weight: bold; color: orange">WHAT WE PROVIDE</h2>
        <br>
        <p style="color:black" class="wow bounceInRight" data-wow-delay=".25s">Lorem Ipsum is simply dummy text of the
          printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
          only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
          with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>
</div>



<div id="about-us" class="container-fluid fh5co-about-us pl-0 pr-0 parallax-window" data-parallax="scroll">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <h2 style="font-weight: bold; color: orange">WHAT WE PROVIDE</h2>
        <br>
        <p style="color:black" class="wow bounceInRight" data-wow-delay=".25s">Lorem Ipsum is simply dummy text of the
          printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
          only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
          with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-md-6">
        <figure class="wow bounceInDown" style="float: right;"> <img src="https://www.omilights.com/wp-content/uploads/2016/11/dog-care-omilights.jpg" alt="gym" width="450px" style=""> </figure>
      </div>
    </div>
  </div>
</div>

<!-- Histry -->

<div id="history">
  <div style="background-color: rgba(255,255,255,0.5); height: 350px; padding: 6%">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3 style="text-align:center; ">HISTORY OF DOGS</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <h5 style="text-align:center; margin-top: 4%;">Dogs were probably the first tame animals. They have accompanied humans for at least
        20,000 years and possibly as many as 40,000. Scientists generally agree that all dogs, domestic and wild, share
        a common wolf ancestor; at some point grey wolves and dogs went on their separate evolutionary ways.</h5>
    </div>
  </div>
</div>
  </div>
</div>  

<div style="background-image: url('https://www.thepetshotel.com.au/images/ddc%20banner.jpg'); height: 400px; width: 100%;  background-position: center;
    background-size: cover; ">
</div>
<!-- footer -->
<footer class="page-footer font-small mdb-color pt-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Tender For Dogs<i class="fa fa-dog" aria-hidden="true" style="color:orange;font-size:20px;padding-left:6px; "></i></h6>
        <p>Mauna Loa the biggest volcano on Earth and one of the most active covers half the Island of Hawaii.Mauna Loa the biggest volcano on Earth and one.</p>
      </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Services link</h6>
        <p>
          <a href="#!">BuyandSell</a>
        </p>
        <p>
          <a href="#!">Doctor Care</a>
        </p>
        <p>
          <a href="#!">Trainees</a>
        </p>
        <p>
          <a href="#!">Accesories</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Home</a>
        </p>
        <p>
          <a href="#!">About</a>
        </p>
        <p>
          <a href="#!">MeetUp</a>
        </p>
        <p>
          <a href="#!">Events</a>
        </p>
      </div>

      
      <hr class="w-100 clearfix d-md-none">

      
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      

    </div>
    <!-- Footer links -->

    <hr style="border: 1px solid orange;" >
      
    <div class="row d-flex align-items-center">
      <div class="col-md-7 col-lg-8">
        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            <strong> Xuntox.SoftTech.com</strong>
          </a>
        </p>
      </div>
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
<!-- footer -->
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