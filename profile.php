<?php include 'header.php'; ?>

<style type="text/css">
#dogImg {
    margin-top: -40%;
    background: url("https://img5.goodfon.com/wallpaper/nbig/b/c5/sobaka-samoed-les-priroda-iazyk-boke.jpg") fixed;
    background-position: center;
    background-size: cover;
    height: 1100px;
    padding: 0%;
    width: 100%;
}

#login {
    padding-top: 65%;
    margin: auto;
}

#profile {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    color: white;
}

.tab-pane {
    padding: 20px;
    color: black;
}
</style>

<div class="container-fluid" id="dogImg">
    <div class="container">
        <div id="login">
            <div class="card mb-4 " id="profile">
                <div class="row no-gutters">
                    <div class="col-md-4">

                        <h5> Name : <span style="text-transform: uppercase;"> <?php echo $_SESSION['r_name'];?></span>
                        </h5>
                        <?php
    $select=mysqli_query($conn,"SELECT * FROM profile WHERE `id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
  ?>
                        <div><?php echo "<img src = 'uploads/".$fetch['image']."' height='200px' width='200px'>"; ?>
                        </div>

                        <p><b style="color: orange">Phone :</b> <?php echo $fetch['phone']; ?> </p>
                        <p><b style="color: orange">Email :</b> <?php echo $fetch['email']; ?> </p>
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="color: white; padding: 7%">
                            <p> Dogs make for the best friends, and it’s only right that we celebrate them for all the
                                joy and love they’ve given us. Whether labeled on a dog bandana or a paw print poster,
                                you’ll need the perfect dog quote to accompany your piece. That might be with a custom
                                photo book about your dog, a social media post for National Dog Day, or with a
                                personalized pet gift picked out just for your furry friend. Whatever you decideto do,
                                make sure you have funny dog captions or cute dog quotes to go with it. Find our
                                favorite dog quotes below.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: rgba(186,184,179,0.5)">

    <?php 
$conn=mysqli_connect('localhost','root','','dog'); 
	$sel = "SELECT * FROM `profile` WHERE `r_id` = '$_SESSION[r_id]'";
// echo $sel;
	$res = $conn->query($sel);
	$fetch = $res->fetch_assoc();
	if (empty($fetch['email'])) {
?>

    <!-- profile form -->
    <div class="container p-5">
        <div id="profile" style="padding: 30px">
            <h2>Personal Info</h2>
            <form action="profilePhp.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="r_id" value="<?php echo $_SESSION['r_id'];?>">
                        <input type="text" class="form-control" name="firstname" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lastname" placeholder="Last name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="state" placeholder="State">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Profile Image</label>
                        <input type="file" name="image">
                    </div>
                </div>
        </div>
        <br>

        <button class="btn btn-success" name="save1">Save</button>
        </form>
    </div>
</div>
<?php 
	}
	else
	{
?>
<div class="container" style="background-color: rgba(186,184,179,0.5); padding: 30px">
    <h2>Personal Info</h2>
    <h5 style="text-align: right;">Select to insert your <span style="color: orange">Plan</span></h5>

    <div style="float: left;">
        <a class="btn btn-primary" data-target="#editform" href="profile.php?edit=<?php echo $fetch['id']; ?>">Edit</a>
    </div>

    <div class="btn-group" style="float: right">
        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#sell">Sell</a>
        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#meet">MeetUp</a>
    </div>



    <!-- update form -->

    <?php
	if(isset($_GET['edit'])){
	$view=mysqli_query($conn, "SELECT * FROM `profile` WHERE `id` = '$_GET[edit]'");
	$fetch=mysqli_fetch_array($view);
?>
    <div class=" animated flipInX" id="editform">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h3>Profile Update Form</h3>
                    <button class="close" data-dismiss=""><i class="fa fa-times text-white"></i></button>
                </div>
                <div class="modal-body bg-light">

                    <form action="update.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="r_id" value="<?php echo $_SESSION['r_id'];?>">

                            <input type="text" class="form-control" placeholder="First Name" name="firstName"
                                value="<?php echo $fetch['firstname'];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastName"
                                value="<?php echo $fetch['lastname'];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="phone"
                                value="<?php echo $fetch['phone'];?>">
                        </div>
                        <div class="form-group">
                            <input type="Email" class="form-control" placeholder="Email" name="email"
                                value="<?php echo $fetch['email'];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                value="<?php echo $fetch['address'];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="State" name="state"
                                value="<?php echo $fetch['state'];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city"
                                value="<?php echo $fetch['city'];?>">
                        </div>
                        <!--  <div class="form-group">
			    	<?php
			    	if($fetch['image'] == 1){
			    		echo "<img src='uploads/.$fetch[image].'>";
			    	}else {
			    		echo "<input type='file' name='image'>";
			    	}
			    	?>	        
			    </div> -->
                        <div style="text-align: right;">
                            <input type="submit" value="Update" name="update" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- update form end-->


    <!-- profile fetch table -->
    <table class="table table-striped table-light mt-5">
        <tr>
            <td>First Name</td>
            <td style="text-transform: uppercase;">: <?php echo $fetch['firstname']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td style="text-transform: uppercase;">: <?php echo $fetch['lastname']; ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>: <?php echo $fetch['phone']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?php echo $fetch['email']; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td colspan="3">: <?php echo $fetch['address']; ?></td>
        </tr>
        <tr>
            <td>State</td>
            <td>: <?php echo $fetch['state']; ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td>: <?php echo $fetch['city']; ?></td>
        </tr>
    </table>
</div>

<!-- sell form -->
<div class="modal animated flipInX" id="sell">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3>Dog Selling Details</h3>
                <button class="close" data-dismiss="modal"><i class="fa fa-times text-white"></i></button>
            </div>
            <div class="modal-body bg-light">
                <!-- form -->
                <form action="profilePhp.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>">
                        <input type="text" class="form-control" placeholder="Breed" name="sBreed" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Price" name="sPrice" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Color" name="sColor" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Gender" name="sGender" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Age" name="sAge" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="location" name="sLocation" required>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <label>Dog Image </label>
                        <input type="file" name="image" required>
                    </div>
                    <div style="text-align: right;">
                        <input type="submit" value="Post" name="selling" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- sell form end -->

<!-- meet form -->
<div class="modal animated flipInX" id="meet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3>Send For MeetUp</h3>
                <button class="close" data-dismiss="modal">
                    <i class="fa fa-times text-white"></i>
                </button>
            </div>
            <div class="modal-body bg-light">
                <!-- form -->
                <form action="profilePhp.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>">
                        <input type="text" class="form-control" placeholder="Breed" name="mBreed" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="color" name="mColor" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Gender" name="mGender" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Age" name="mAge" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location" name="mLocation" required>
                    </div>
                    <div class="form-group">
                        <label>Dog Image </label>
                        <input type="file" name="file_name" required>
                    </div>
                    <!-- <a href="#" class="btn btn-dark" data-dismiss="modal">Close</a> -->
                    <div style="text-align: right;">
                        <input type="submit" value="Post" name="meetup" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- meet form end -->
<?php
} 
?>

<!-- profile1 -->
<?php include "profile1.php" ?>
<!-- profile1 -->


<div class="container mt-3">
    <div class="row" style="background-color: rgba(186,184,179,0.5); padding: 10px">
        <div class="col-md-6">
            <h4>Posted for Selling</h4>
            <div class="row">
                <?php
$select=mysqli_query($conn,"SELECT * FROM buyandsell WHERE `p_id` = '$_SESSION[r_id]' ORDER BY b_date desc");
while($fetch=mysqli_fetch_assoc($select)) {
  ?>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                    <div class="card">
                        <?php echo "<img src = 'sellimg/".$fetch['image']."' height='150px' >"; ?>
                        <div class="card-body">

                            <small style="text-align: right; color: red"><b><?php echo $fetch['sold'];?>
                                    <?php echo $fetch['s_date'];?></b></small>
                            
                            <h6 class="card-title"><?php echo $fetch['b_breed'];?>
                                <small style="float: right;"><i class="fas fa-rupee-sign"></i>
                                    <?php echo $fetch['b_price']; ?></small><br>
                            </h6>

                            <p>Color : <?php echo $fetch['b_color'];?><br>
                                Gender : <?php echo $fetch['b_gender'];?><br>
                                Age : <?php echo $fetch['b_age'];?></p>
                            <small>PostedOn : <b><?php echo $fetch['b_date']; ?></b></small>


                            <a class="nav-link" href="profile.php?rem=<?php echo $fetch['b_id']; ?>"><button
                                    class="btn btn-outline-danger btn-sm btn-block">Delete</button></a>
                            
    
                        <a class="nav-link" href="profile.php?sold=<?php echo $fetch['b_id'];?>"><button
                                    class="btn btn-outline-warning btn-sm btn-block">Sold Out</button></a>


                        </div>
                    </div>
                </div>
                <?php 
} 

if(isset($_GET['rem'])) {

		$delet1=mysqli_query($conn, "DELETE FROM `buyandsell`  WHERE b_id = '$_GET[rem]'");
			
		
		if($delet1==TRUE ) {
			echo "<script>alert('Selling Post Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something Wrong')</script>";
		}
	}
	?>
            </div>
        </div>

        <!-- meet up fetch -->

        <div class="col-md-6">
            <h4>Posted for MeetUp</h4>
            <div class="row">
                <?php
    $select=mysqli_query($conn,"SELECT * FROM meetup WHERE `p_id` = '$_SESSION[r_id]' ");
    while($fetch=mysqli_fetch_assoc($select)) {
?>

                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                    <div class="card">
                        <?php echo "<img src = 'meetimg/".$fetch['image']."' height='150px' >"; ?>
                        <div class="card-body">
                            <p>Breed : <?php echo $fetch['m_breed'];?><br>
                                Age : <?php echo $fetch['m_age'];?><br>
                                Geneder : <?php echo $fetch['m_gender'];?></p>

                            <a class="nav-link" href="meet-view.php?view=<?php echo $fetch['m_id'];?>"><button
                                    class="btn btn-outline-primary btn-sm btn-block">View</button></a>
                            <a class="nav-link" href="profile.php?del=<?php echo $fetch['m_id']?>"><button
                                    class="btn btn-outline-danger btn-sm btn-block">Delete</button></a>
                        </div>
                    </div>
                </div>
                <?php 
	}
     
     if(isset($_GET['del'])) {
     	
		$delete2=mysqli_query($conn,"DELETE FROM `meetup` WHERE m_id='$_GET[del]'");
		if($delete2==TRUE) {
			echo "<script>alert('MeetUp Post Deleted')</script>";
			echo "<script>window.location.href='profile.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong')</script>";
		}
	}
	 ?>
            </div>
        </div>
    </div>
</div>

<!-- profile2 -->
<?php include "profile2.php" ?>
<!-- profile2 -->


<!-- footer -->
<?php include 'footer.php'; ?>

<script type="text/javascript">
$(document).ready(function() {
    $(".close").click(function() {
        $("#editform").hide();
    });
});
</script>
<?php 

// <!-- sold -->
if (isset($_GET['sold'])) {
	$insert=mysqli_query($conn,	"UPDATE `buyandsell` SET sold='Sold Out', s_date = CURDATE() WHERE b_id = '$_GET[sold]'");
		if($insert==true){
	 		echo "<script>alert('Dog Sold Out')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}else{
	 		echo "<script>alert('Unable to Sold')</script>";
	 		 echo "<script>window.location.href='profile.php'</script>";
	 	}
}
?>