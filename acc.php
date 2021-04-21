<?php include "header.php" ?>

<style type="text/css">
	#dogImg{
    margin-top: -40%;
    background: url("assets/dog.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1050px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 75%;
}
img{
    height:290px;
    border-radius: 8px;
}
.card:hover{
    background-color: rgba(22,22,22, 0.1);
    box-shadow: 0 0 5px black;
}
.card:hover h2{
  color: orange
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

<div class="container-fluid" id="dogImg">
  <div class="container">
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight" id="main">
        <h2 style="font-weight: bold; "><span style="color: orange;">DOG'S</span><span> ACCESSORIES </span> </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. </p>
      </div>
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mr-3 mb-3 wow bounceInUp"> What's new</a> -->
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mb-3 wow bounceInDown"> Courses</a> -->
    </div>
  </div>
</div>
    <br>  

    <h3 style="text-align: center;">Accessories</h3>
<!-- search form -->
    <form action="" method="get">
      <div class="btn-group" style="float: right;">
        <input type="text" name="location" class="form-control" placeholder="Location">
      <button class="btn btn-primary" name="search"><i class="fa fa-search"></i> Search</button>
      </div>
    </form>
    <br>


  <div class="container" style="padding: 20px; margin: 50px auto;">

         <?php 
          $conn=mysqli_connect('localhost','root','','dog');

          if(isset($_GET['search'])) {
              $location=$_GET['location'];

              $search_result = "SELECT * FROM accr WHERE `a_location` = '$location' ";
              $result = $conn->query($search_result);

              
              if(mysqli_num_rows($result)){
              while($fetch = $result->fetch_assoc()){
          ?>
          <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4" style="padding: 10px">
                   <?php echo "<img src = 'acctimg/".$fetch['a_image']."' height='200px' >"; ?>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h2><?php echo $fetch['a_name'];?></h2>
                      <p><?php echo $fetch['a_desc'];?></p>

                      <p><b>Contact No:</b> <?php echo $fetch['a_phone'];?></p>
                      <p><b>Address:</b> <?php echo $fetch['a_address'];?></p>
                      <p><b>Location:</b> <?php echo $fetch['a_location'];?></p>
                  </div>
                </div>
              </div>
            </div>
        <?php 
              }
            } else {
              echo "Not Found";
            }
         } else {
         ?>

<!-- php -->
<?php

 $select=mysqli_query($conn,"select * from accr");
 while($fetch=mysqli_fetch_assoc($select)) {
?>
      <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4" style="padding: 10px">
           <?php echo "<img src = 'accimg/".$fetch['a_image']."' height='200px' >"; ?>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2><?php echo $fetch['a_name'];?></h2>
              <p><?php echo $fetch['a_desc'];?></p>

              <p><b>Contact No:</b> <?php echo $fetch['a_phone'];?></p>
              <p><b>Address:</b> <?php echo $fetch['a_address'];?></p>
              <p><b>Location:</b> <?php echo $fetch['a_location'];?></p>
          </div>
        </div>
      </div>
    </div>
<?php 
}
}
 ?>
  </div>

<?php include "footer.php" ?>
