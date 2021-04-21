<?php include "header.php" ?>

<style type="text/css">
	#dogImg{
    margin-top: -40%;
    background: url("https://www.empoweress.in/wp-content/uploads/2017/10/dog-racing-2878713_960_720.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1050px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 75%;
}
.events{
    margin: 4%;
}
.card{
    box-shadow: 0 0 8px black;
    padding: 20px;
    border-radius: 10px ;
}
.card:hover{
    background-color: rgba(22,22,22, 0.1);
    box-shadow: 0 0 15px black;
}
.card-body{
    margin-top: 25px;
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
        <h2 style="font-weight: bold; color: white;"><span style="color: orange;">DOG'S</span> EVENTS </h2>
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
    <br>  
    <h3 style=" text-align: center;">Events List</h3>

<!-- search form -->
    <div style="width: 600px; margin: auto; text-align: center;">
      <form action="" method="get">
      <div class="form-row" >
        <div class="col">
            <input type="text" class="form-control" name="location" placeholder="Location">
            <button class="btn btn-primary" name="search"><i class="fa fa-search"></i> Search</button>
        </div>
      </div>
    </form>
    </div>

    <br>
    <div class="events">
      <div class="container">

<?php 
          $conn=mysqli_connect('localhost','root','','dog');

          if(isset($_GET['search'])) {
              $location=$_GET['location'];

              $search_result = "SELECT * FROM events WHERE `e_location` = '$location' ";
              $result = $conn->query($search_result);
 
              if(mysqli_num_rows($result)){
              while($fetch = $result->fetch_assoc()){
?>

    <div class="card mb-4 ">
      <div class="row no-gutters">
        <div class="col-md-4">
           <?php echo "<img src = 'eventimg/".$fetch['e_image']."' height='150px'>"; ?>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title"><?php echo $fetch['e_name'];?></h3>
            <p class="card-text"><?php echo $fetch['e_desc'];?></p>
            <p>Location: <?php echo $fetch['e_location'];?></p>
            <a href="event-detail.php?view=<?php echo $fetch['e_id']; ?>" class="btn btn-primary" >Read more</a>      
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
  
   $select=mysqli_query($conn,"select * from events");
   while($fetch=mysqli_fetch_assoc($select)) {
?>
      <div class="card mb-4 ">
      <div class="row no-gutters">
        <div class="col-md-4">
          <?php echo "<img src = 'eventimg/".$fetch['e_image']."' height='150px'>"; ?>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title"><?php echo $fetch['e_name'];?></h3>
            <p class="card-text"><?php echo $fetch['e_desc'];?></p>
            <p>Location: <?php echo $fetch['e_location'];?></p>
            <a href="event-detail.php?view=<?php echo $fetch['e_id']; ?>" class="btn btn-primary" >Read more</a>      
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
    </div>

<?php include "footer.php" ?>
    