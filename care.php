<?php include "header.php" ?>

<style type="text/css">
	#dogImg{
    margin-top: -40%;
    background:url("https://img.grouponcdn.com/deal/3FKFbYUZMDuco6ZCjB76/cu-960x576/v1/c700x420.jpg")fixed ;
    background-position: center;
    background-size: cover;
    height: 1050px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 75%;
}
#bg{
    padding:  40px;
}
.card:hover{
  box-shadow: 0 0 9px black;
  background-color: rgb(229,241,243);
  /*color: white*/
}

.icons i{
    padding: 5px;
    font-size: 20px;
}

@media (max-width: 1000px){
  #dogImg{
    height: 700px;
  }
}
@media (max-width: 500px){
  #main{
    padding-top:  150%;
  }
}

</style>

<div class="container-fluid" id="dogImg">
  <div class="container">
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight" id="main">
        <h2 style="font-weight: bold;"><span style="color: orange;">DOG'S</span> CARE </h2>
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
      <h3 style="text-align: center;">Doctor's List</h3>

 
<!-- search -->
    <div class="container" style=" margin: auto;">
      <form action="" method="get">
        <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" name="docName" placeholder="Doctor Name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="clinic" placeholder="Clinic Name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="location" placeholder="Location">
            </div>
            <div class="col">
              <button class="btn btn-primary form-control" name="search"><i class="fa fa-search"></i> Search</button>
            </div>
          </div>
      </form>
    </div>
    <br>
    <div class="container" id="bg">
        <div class="row"> 
<!-- search php -->

<?php 
          $conn=mysqli_connect('localhost','root','','dog');

          if(isset($_GET['search'])) {
              $docName=$_GET['docName'];
              $clinic=$_GET['clinic'];
              $location=$_GET['location'];

              $search_result = "SELECT * FROM care WHERE `c_docName` = '$docName' OR `c_clinicName` = '$clinic' OR `c_location` = '$location' ";
              $result = $conn->query($search_result);

              
              if(mysqli_num_rows($result)){
              while($fetch = $result->fetch_assoc()){
          ?>
          <div class="col-lg-3 col-md-3 col-sm-6 mb-3" >
            <div class="card h-100">
              
                  <div class="card-body">
                    <div>
                  <h5 class="head">Dr.<?php echo $fetch['c_docName'];?></h5>
                    <p>Clinic: <?php echo $fetch['c_clinicName'];?></p>
                    <!-- <div style="text-align: left !important;"> -->
                    <p>Phone : <?php echo $fetch['c_phone'];?></p>
                    <p>Email : <?php echo $fetch['c_mail'];?></p>
                    <p>Location : <?php echo $fetch['c_location'];?></p>
                  </div>
                  <div class="icons" style="">
                    <a href=""></a><i class="fab fa-twitter"></i>
                    <a href=""></a> <i class="fab fa-facebook-f"></i>
                    <a href=""></a><i class="fab fa-instagram"></i>
                  </div>
                </div>
              </div>
            </div>
          
  <?php 
  }
  }
   else { 
    echo "Not Found";
   }
  }else{
  
  
?>
<!-- search php end -->
<!-- php -->
<?php
 $select=mysqli_query($conn,"select * from care");
 while($fetch=mysqli_fetch_assoc($select)) {
?>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3" >
              <div class="card h-100">
              <?php echo "<img src = 'doctimg/".$fetch['c_image']."' height='200px'>"; ?>
                  <div class="card-body">
                  <div>
                  <h5 style="text-align: center">Dr.<?php echo $fetch['c_docName'];?></h5>
                  <p>Clinic Name : <?php echo $fetch['c_clinicName'];?></p>
                  <p>Phone : <?php echo $fetch['c_phone'];?><br>
                    Email : <?php echo $fetch['c_mail'];?><br>
                    Location : <?php echo $fetch['c_location'];?></p>

                  <div class="icons" style="text-align: center;">
                    <a href=""></a><i class="fab fa-twitter"></i>
                    <a href=""></a> <i class="fab fa-facebook-f"></i>
                    <a href=""></a><i class="fab fa-instagram"></i>
                  </div>
                </div>
              </div>
            </div>
           </div>
<?php 
  }
}
?>  
    
  </div>
</div>

<?php include "footer.php" ?>

