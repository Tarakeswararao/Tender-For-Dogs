<?php include "header.php" ?>

<style type="text/css">
    #dogImg{
    margin-top: -50%;
    background: url("https://images.hdqwalls.com/wallpapers/cute-girl-with-dog-25.jpg") fixed ;
    background-position: center; 
    background-size: cover;
    height: 900px;
    padding: 0%;
    width: 100%;
}
img{
    height:95%;
    width: 95%;
}
h3{
    font-size: 30px;
    font-weight: bold;
}

#edetail a:hover {
    color: orange;

}
#edetail a{
  text-decoration: none;
  color: black;
  padding: 20px;
  font-size: 30px;
}


@media (max-width: 1000px){
  #dogImg{
    height: 700px;
  }
}
@media(max-width: 500px){
  #dogImg{
    height: 500px;
  }
} 

</style>

<div class="container-fluid" id="dogImg">
</div>

<div style="padding: 5%;">
  <div class="container" style="padding: 10px">


<?php
  $conn = mysqli_connect('localhost','root','','dog');

    if(isset($_GET['view'])){
    $view=mysqli_query($conn, "select * from events where e_id = '$_GET[view]'");
    $fetch=mysqli_fetch_array($view);

    $pro=mysqli_query($conn, "select * from profile where id = '$fetch[p_id]'");
    $det=mysqli_fetch_array($pro);
?>
    <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-6" style="padding: 10px">
                   <?php echo "<img src = 'eventimg/".$fetch['e_image']."' height='150px'>"; ?>

                </div>
                <div class="col-md-6" style="padding: 10px">
                 
               <h3 style="color: orange;"><?php echo $fetch['e_name']; ?></h3>
               <p><?php echo $fetch['e_desc']; ?></p>
            </div>
          </div>
        </div>

<?php 
}
 ?>
  </div>

  <div class="container" id="edetail">
    <div class="row">
        <div class="col-sm-8">
            <h2 style="color: orange;">Event Information</h2>
            <p><b>Event Name :</b> <?php echo $fetch['e_name']; ?></p>
            <p><b>Mobile:</b> <?php echo $det['phone']; ?></p>
            <!-- <?php echo $det['']; ?> -->
            <p><b>Email:</b> <?php echo $det['email']; ?></p>
            <p><b>Location :</b> <?php echo $fetch['e_location']; ?></p>
        </div>
        <div class="col-sm-4">
            <div >

                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a> 
                <a href=""><i class="fab fa-instagram"></i></a> 
                <a href="#"><i class="fab fa-google"></i></a> 
             
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>
