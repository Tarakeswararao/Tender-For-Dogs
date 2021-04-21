<?php include "header.php" ?>

<style type="text/css">
  #dogImg{
    margin-top: -50%;
    background: url("https://images.hdqwalls.com/wallpapers/cute-girl-with-dog-25.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1000px;
    padding: 0%;
    width: 100%;
}

img{
    width: 350px;
     height:310px;
     margin-left: 10%;
}
.viewPage{
   
    padding: 50px;
    
}

@media (max-width: 1000px){
  #dogImg{
    height: 700px;
  }
}

</style>


<div class="container-fluid" id="dogImg">
</div>
<div class="container" style="padding:20px ; margin: auto;">

<?php
  $conn = mysqli_connect('localhost','root','','dog');

    if(isset($_GET['view'])){
    $view=mysqli_query($conn, "select * from buyandsell where b_id = '$_GET[view]'");
    $fetch=mysqli_fetch_array($view);

    $pro=mysqli_query($conn, "select * from profile where id = '$fetch[p_id]'");
    $det=mysqli_fetch_array($pro);
?>

        <div class="card" style="max-width: 940px; margin: auto;" >
          <div class="row no-gutters">
     
            <div class="col-md-6" style="overflow: hidden; margin: auto;" >
              <?php echo "<img src = 'sellimg/".$fetch['image']."'  >"; ?>
            </div>
            <div class="col-md-6" >
              <div class="card-body" style="padding: 30px">
                <small style="float: right;">Posted On <br> <?php echo $fetch['b_date']; ?></small>
                  <h4 style="color: orange;">Owner Details</h4>
                  <p>Name : <?php echo $det['firstname'];?></p>
                  <p>Phone : <?php echo $det['phone'];?></p>
                  <p>Email : <?php echo $det['email'];?></p>
                  <p>location : <?php echo $det['city'];?></p>
                  <h4 class="card-title" style="color: orange;">Dog Details</h4>

                  <p>Breed : <b><?php echo $fetch['b_breed'];?></b> <span style="float: right;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch['b_price'];?></span></p>
                  <p>Color : <b><?php echo $fetch['b_color'];?></b></p>
  
 
      
<small style="float: right; color: red"><b><?php echo $fetch['sold'];  echo $fetch['s_date'];?></b></small>

              </div>
            </div>
          </div>
        </div>
<?php
 } 
 ?>
      </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>
