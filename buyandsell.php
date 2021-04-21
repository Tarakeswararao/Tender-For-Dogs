<?php include "header.php" ?>

<style type="text/css">
#dogImg {
    margin-top: -40%;
    background: url("https://scriptshadow.net/wp-content/uploads/2018/06/siberian-husky_72093760.jpg__1170x0_q90_subsampling-2_upscale.jpg") fixed;
    background-size: cover;
    background-position: center;
    height: 1000px;
    padding: 0%;
    width: 100%;
}

#main {
    padding-top: 70%;
}

.card:hover {
    box-shadow: 0 0 3px black
}

#cards {
    margin-top: 30px;
    margin-bottom: 40px;
    padding: 10px;
    background-color: white;
    border-radius: 5px;
    /* padding: 10px; */
}

#search {
    padding: 15px;
    border-radius: 10px;
}

@media (max-width: 1000px) {
    #dogImg {
        height: 700px;
    }
}

@media(max-width: 500px) {
    #main {
        padding-top: 150%;
    }
}
</style>
<div class="container-fluid" id="dogImg">
    <div class="container">
        <div class="fh5co-banner-text-box">
            <div class="quote-box pl-5 pr-5 wow bounceInRight" id="main">
                <h2 style="font-weight: bold; color: white;"><span style="color: orange;">DOG'S</span> BUY/SELL </h2>
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
</div>
<div class="container" id="cards">
    <div class="row">
        <div class="col-md-3">
                
                    <div class="btn-group">   
                          <a href="available.php">
                              <button class="btn btn-primary">Available Dogs</button>
                          </a> 
                    </div>
               
                <!-- <br>     -->
            <div class="card" id="search">
                <h3 style="color: orange">Search Here</h3>
                <br>

                <!-- search    -->
                <form action="" method="get">
                    <input type="text" class="form-control" placeholder="Location" name="location"><br>
                    <input type="text" class="form-control" placeholder="Breed" name="breed"><br>
                    <input type="text" class="form-control" placeholder="Gender" name="gender"><br>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block" name="search">Search</button>
                </form>
            </div>
            <br>
                
        </div>

        <div class="col-md-9">
            <div class="row">
                <!-- search code -->
                
<?php
    

    if (isset($_GET['search'])) {
    $location = $_GET['location'];
    $breed = $_GET['breed'];
    $gender = $_GET['gender'];
    // $available = $_GET['available'];

    $search_result = "SELECT * FROM buyandsell WHERE `b_location` = '$location' OR `b_breed` = '$breed' OR `b_gender`='$gender' ";
    $result = $conn->query($search_result);

    if (mysqli_num_rows($result)) {
    while ($fetch = $result->fetch_assoc()) {
?>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <?php echo "<img src = 'sellimg/" . $fetch['image'] . "' height='150px'>"; ?>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['b_breed']; ?>
                                <small style="float: right;"><i class="fas fa-rupee-sign"></i>
                                    <?php echo $fetch['b_price']; ?></small> </h5>

                            <p>Color : <?php echo $fetch['b_color']; ?><br>
                                Gender : <?php echo $fetch['b_gender']; ?><br>
                                Age : <?php echo $fetch['b_age']; ?><br>
                                Location : <?php echo $fetch['b_location']; ?></p>

                            <a class="" href="buyandsell-view.php?view=<?php echo $fetch['id'] ?>"><button
                                    class="btn btn-primary btn-md btn-block">View</button></a>
                            <small style="float: right;">Posted On :<b> <?php echo $fetch['b_date']; ?></b></small><br>
      
            <small style="float: right; color: red"><b><?php echo $fetch['sold'] ;
            echo $fetch['s_date'];?></b></small>
      
                        </div>
                    </div>
                </div>
<?php
 }
    } else {
            echo "Not Found";
          }
    } 

 else {

// main fetch  
    

    $select = mysqli_query($conn, "select * from buyandsell order by b_date desc");
    while ($fetch = mysqli_fetch_assoc($select)) {
?>

                <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <?php echo "<img src = 'sellimg/" . $fetch['image'] . "' height='150px' >"; ?>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['b_breed']; ?>
                                <small style="float: right;"><i class="fas fa-rupee-sign"></i>
                                    <?php echo $fetch['b_price']; ?></small>
                            </h5>
                            <p>
                                Color : <?php echo $fetch['b_color']; ?><br>
                                Gender : <?php echo $fetch['b_gender']; ?><br>
                                Age : <?php echo $fetch['b_age']; ?><br>
                                Location : <?php echo $fetch['b_location']; ?><br>
                            </p>

                        <a class="nav-link" href="buyandsell-view.php?view=<?php echo $fetch['b_id']; ?>">    <button class="btn btn-primary btn-md btn-block">View</button></a>

                        <small style="float: right;">Posted On :<b> <?php echo $fetch['b_date']; ?></b></small><br>
        
            <small style="float: right; color: red"><b><?php echo $fetch['sold']; echo  $fetch['s_date'];?></b></small>

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
</div>

<?php include "footer.php" ?>


