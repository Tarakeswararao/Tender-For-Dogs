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
	    width: 400px;
	    height:300px;
	}

	h3{
	    background-color: gray;
	    padding:5px ;
	    color: white;
	}
	td{
	    padding-right: 40px;
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

<?php
  $conn = mysqli_connect('localhost','root','','dog');

    if(isset($_GET['view'])){
    $view=mysqli_query($conn, "select * from meetup where m_id = '$_GET[view]'");
    $fetch=mysqli_fetch_array($view);

    $pro=mysqli_query($conn, "select * from profile where id = '$fetch[p_id]'");
    $det=mysqli_fetch_array($pro);
?>

      <div class="container" style="padding: 30px; ">
        <div class="card" style="max-width: 940px; margin: auto;" >
          <div class="row no-gutters">
            <div class="col-md-6" style="overflow: hidden; padding: 10px" >
              <?php echo "<img src = 'meetimg/".$fetch['image']."'  >"; ?>
            </div>
          

      <div class="col-md-6" style="padding: 10px">
      <div>
        <h3 style="color: orange;">Details</h3>
      </div>
      <div>
     <table>
          <tr>
            <td>Breed</td>
            <td>:<b> <?php echo $fetch['m_breed'];?></b></td>
          </tr>
          <tr>
            <td>Color</td>
            <td>: <?php echo $fetch['m_color']; ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td>: <?php echo $fetch['m_age'];?></td>
          </tr>
          <tr>
            <td>Owner Name</td>
            <td>: <b><?php echo $det['firstname']; ?></b></td>
          </tr>
          <tr>
            <td>Number</td>
            <td>: <?php echo $det['phone'];?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>: <?php echo $det['email'];?></td>
          </tr>
          <tr>
            <td>Location</td>
            <td>: <?php echo $det['city'];?></td>
          </tr>
        </table>
<?php 
} 
?>
      </div>
    </div>
          </div>
        </div>
      </div>

<?php include "footer.php" ?>
