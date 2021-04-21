<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />

</head>

 <style>

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
</style>

<body>

<footer class="page-footer font-small mdb-color pt-4 ">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 font-weight-bold">Tinder For Dogs<i class="fa fa-dog" aria-hidden="true" style="color:orange;font-size:20px;padding-left:6px; "></i></h4>
        <p>Mauna Loa the biggest volcano on Earth and one of the most active covers half the Island of Hawaii.Mauna Loa the biggest volcano on Earth and one.</p>
      </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Services link</h6>
        <p>
          <a href="buyandsell.php">BuyandSell</a>
        </p>
        <p>
          <a href="care.php">Doctor Care</a>
        </p>
        <p>
          <a href="train.php">Trainees</a>
        </p>
        <p>
          <a href="acc.php">Accesories</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="home.php">Home</a>
        </p>
        <p>
          <a href="">About</a>
        </p>
        <p>
          <a href="meet.php">MeetUp</a>
        </p>
        <p>
          <a href="event.php">Events</a>
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
        <p class="text-center text-md-left">© 2020 Copyright :
          <a href="">
            <strong> XuntoxSoftTech.com</strong>
          </a>
        </p>

      </div>
    
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".collapse").toggle(1000);
  });

  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
  });

  $('#navbarDrop').click(function(){
    $('.dropdown-menu').toggle();
  });

});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

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





