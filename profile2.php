
<!-- doctor fetch -->

<?php
    $select=mysqli_query($conn,"SELECT * FROM care WHERE `p_id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
  ?>  
		
		<div class="container mt-3">
			<h3>Doctor Card</h3>
			<div class="row" style="background-color: white;padding: 25px 50px 25px 50px">
		        <div class="col-md-3" style="padding: 10px; overflow: hidden">
                <?php echo "<img src = 'doctimg/".$fetch['c_image']."' height='200px',width='200px' >"; ?>
		          
		        </div>
		        <div class="col-md-9">
		          <div class="card-body" >
		            <h3>Dr.<?php echo $fetch['c_docName'];?></h3>  
					<p>Clinic Name : <?php echo $fetch['c_clinicName'];?></p>
		            <div>
		              <p>Phone : <?php echo $fetch['c_phone'];?><br>
	                    Email : <?php echo $fetch['c_mail'];?><br>
	                    Location : <?php echo $fetch['c_location'];?></p>
		             <div style="float: right;">
		            	<a class="nav-link" href="profile.php?delcare=<?php echo $fetch['c_id']; ?>"><button class="btn btn-danger btn-sm btn-block">Delete</button></a>
		            </div>
		            </div>
		          </div>
		    	</div>
		    </div>
		</div>
<?php }
 if(isset($_GET['delcare'])) {
     	
		$delete=mysqli_query($conn,"DELETE FROM `care` WHERE c_id='$_GET[delcare]'");
		if($delete==TRUE) {
			echo "<script>alert('Doctor Card Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong')</script>";
		}
	}
?>

<!-- event insert -->
<?php
    $select=mysqli_query($conn,"SELECT * FROM events WHERE `p_id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
  ?>  
		
		<div class="container mt-3">
			<h3>Event Card</h3>
			<div class="row" style="background-color: white;padding: 25px 50px 25px 50px">
		        <div class="col-md-3" style="padding: 10px;  overflow: hidden">
                <?php echo "<img src = 'eventimg/".$fetch['e_image']."' height='200px',width='200px' >"; ?>
		          
		        </div>
		        <div class="col-md-9">
		          <div class="card-body" >
		            <h3><?php echo $fetch['e_name'];?></h3>  
		            <div>
		              <p>Description : <?php echo $fetch['e_desc'];?><br><br>
	                    
	                    Location : <?php echo $fetch['e_location'];?></p>
		              <div style="float: right;">
		            	<a class="nav-link" href="profile.php?evedel=<?php echo $fetch['e_id']; ?>"><button class="btn btn-danger btn-sm btn-block">Delete</button></a>
		            </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
<?php }
 if(isset($_GET['evedel'])) {
     	
		$delete=mysqli_query($conn,"DELETE FROM `events` WHERE e_id='$_GET[evedel]'");
		if($delete==TRUE) {
			echo "<script>alert('Event Card Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong')</script>";
		}
	}
?>

<!-- trainer fetch -->
<?php
    $select=mysqli_query($conn,"SELECT * FROM train WHERE `p_id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
  ?>  
		<div class="container mt-3">
			<h3>Trainer Card</h3>
			<div class="row" style="background-color: white;padding: 25px 50px 25px 50px">
				
		        <div class="col-md-3" style="padding: 10px;">
                <?php echo "<img src = 'trainimg/".$fetch['t_image']."' height='200px',width='200px' >"; ?>
		          
		        </div>
		        <div class="col-md-9">
		          <div class="card-body" >
		            <h3 class="card-title">Name: <?php echo $fetch['t_name'];?></h3> 
		            <p class="card-text"><?php echo $fetch['t_desc'];?></p>
		            <div>
		              <p><b>Expreance :</b>  <?php echo $fetch['t_exp'];?> <br>
		              <b>Contact :</b>  <?php echo $fetch['t_phone'];?> <br>
		              <b>Location :</b>  <?php echo $fetch['t_location'];?></p>
		              <div style="float: right;">
		            	<a class="nav-link" href="profile.php?traindel=<?php echo $fetch['t_id']; ?>"><button class="btn btn-danger btn-sm btn-block">Delete</button></a>
		            </div>
		            </div>
		          </div>
		        </div>
		    </div>
		</div>
<?php }
 if(isset($_GET['traindel'])) {
     	
		$delete=mysqli_query($conn,"DELETE FROM `train` WHERE t_id='$_GET[traindel]'");
		if($delete==TRUE) {
			echo "<script>alert('Trainer Card Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong')</script>";
		}
	}
	 ?>

<!-- Accc fetch -->
<?php
    $select=mysqli_query($conn,"SELECT * FROM accr WHERE `p_id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
  ?>  
		<div class="container mt-3">
			<h3>Shop Card</h3>
			<div class="row" style="background-color: white;padding: 25px 50px 25px 50px">

		        <div class="col-md-3" style="padding: 10px">
                <?php echo "<img src = 'accimg/".$fetch['a_image']."' height='200px',width='200px' >"; ?>
		          
		        </div>
		        <div class="col-md-9">
		          <div class="card-body" >
		            <h3 class="card-title">Name: <?php echo $fetch['a_name'];?></h3> 
		            <p class="card-text"><?php echo $fetch['a_desc'];?></p>
		            <div>
		              <p><b>Contact :</b>  <?php echo $fetch['a_phone'];?> <br>
		              	<b>Address :</b>	<?php echo $fetch['a_address']; ?><br>
		              <b>Location :</b>  <?php echo $fetch['a_location'];?></p>
		              <div style="float: right;">
		            	<a class="nav-link" href="profile.php?delacc=<?php echo $fetch['a_id']; ?>"><button class="btn btn-danger btn-sm btn-block">Delete</button></a>
		            </div>
		            </div>
		          </div>
		        </div>
		    </div>
		</div>
<?php }
 if(isset($_GET['delacc'])) {
     	
		$delete=mysqli_query($conn,"DELETE FROM `accr` WHERE a_id='$_GET[delacc]'");
		if($delete==TRUE) {
			echo "<script>alert('Store Card Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong')</script>";
		}
	}
	 ?>
