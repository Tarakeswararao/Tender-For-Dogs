<?php include "header.php" ?>

<style type="text/css">
#dogImg {
    margin-top: -50%;
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
                <h2 style="font-weight: bold; color: white;">Avaliable <span style="color: orange;">DOG'S</span> </h2>
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

<div class="container p-5">
    <div class="row">
        <?php
    

    
        $select = mysqli_query($conn, "select * from buyandsell where sold=''");

    if($select==TRUE){
        
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