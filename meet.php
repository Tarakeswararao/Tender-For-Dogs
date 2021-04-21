<?php include "header.php" ?>

<style type="text/css">
	#dogImg{
    margin-top: -40%;
    background: url("https://images.hdqwalls.com/wallpapers/cute-girl-with-dog-25.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1000px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 70%;
}


#cont{
    box-shadow: 0 0 4px black;
    padding: 40px;
    background-color: white
}
table td{
    color: white;
    border: none;
}
#search{
    padding: 10px;
    box-shadow: 0 0 4px black;
    border-radius: 10px; 
}

.card:hover{
  
   box-shadow: 0 0 3px black

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
        <h2 style="font-weight: bold; color: white;"><span style="color: orange;">DOG'S</span> MEET-UP </h2>
        <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. </p>
      </div>
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mr-3 mb-3 wow bounceInUp"> What's new</a> -->
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mb-3 wow bounceInDown"> Courses</a> -->
    </div>
  </div>
</div>
<div>

  <div class="container" id="cont">
    <h3 style="text-align: center">Select Match</h3>
    <br>
    <div class="row">

      <div class="col-md-8 " id="result">
        <h4 style="color:orange"><b>Pet Search Results</b></h4>
          <div class="row row-cols-1 row-cols-md-2">
            <!-- search code -->
    <?php 
          $conn=mysqli_connect('localhost','root','','dog');

          if(isset($_GET['search'])) {
              $location=$_GET['location'];
              $breed=$_GET['breed'];
              $gender=$_GET['gender'];
              $age=$_GET['age'];

              $search_result = "SELECT * FROM meetup WHERE `m_location` = '$location' OR `m_breed` = '$breed' OR `m_gender`='$gender' OR `m_age`='$age' ";
              $result = $conn->query($search_result);

              if(mysqli_num_rows($result)){
              while($fetch = $result->fetch_assoc()){
          ?>
          <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
              <a href="meet-view.php?view=<?php echo $fetch['m_id']; ?>" style="text-decoration: none; color: black">
                <div class="card">
                <?php echo "<img src = 'meetimg/".$fetch['image']."' height='200px'>"; ?>
                <div class="card-body">
                  <p>Breed :  <?php echo $fetch['m_breed'];?></p>
                  <p>Geneder : <?php echo $fetch['m_gender'];?></p>
                  <p>Age : <?php echo $fetch['m_age'];?></p>
                  <p>Location : <?php echo $fetch['m_location']; ?></p>
                </div>
              </div>
              </a>
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

     $select=mysqli_query($conn,"select * from meetup");
     while($fetch=mysqli_fetch_assoc($select)) {
?>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
              <a href="meet-view.php?view=<?php echo $fetch['m_id']; ?>" style="text-decoration: none; color: black">
                <div class="card">
                <?php echo "<img src = 'meetimg/".$fetch['image']."' height='200px' >"; ?>
                <div class="card-body">
                  <p>Breed :  <?php echo $fetch['m_breed'];?></p>
                  <p>Geneder : <?php echo $fetch['m_gender'];?></p>
                  <p>Age : <?php echo $fetch['m_age'];?></p>
                  <p>Location : <?php echo $fetch['m_location']; ?></p>
                </div>
              </div>
              </a>
            </div>
<?php 
}
}
?>            
          </div>
        </div>
      <div class="col-md-4" style="padding: 30px">
<!-- search form -->

          <form action="" method="get" style="box-shadow: 0 0 5px black; padding:20px; border-radius: 10px">
            <h4 style="text-align: center; color: orange; padding: 10px;"><b>Find Match</b></h4>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Location" name="location">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Breed" name="breed">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Gender" name="gender">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Age" name="age">
            </div>
           
            <button type="submit" class="btn btn-primary form-control" name="search">Search</button>
          </form>
<!-- search end -->
      </div>
    </div>
  </div>


<?php include "footer.php" ?>
