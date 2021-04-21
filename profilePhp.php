
<?php
$conn=mysqli_connect('localhost','root','','dog');

if (isset($_POST['save1'])) {

$r_id = $_POST['r_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
		
function upload_image($a,$b){
	$file_target = "uploads/";

$fileType = pathinfo($a,PATHINFO_EXTENSION);
$targetFilePath = $file_target .mt_rand(10,1000000000000000000).'.'.$fileType;
$allowTypes = array('jpg','png','jpeg','JPG','JPEG','PNG');

if(in_array($fileType, $allowTypes)){
		move_uploaded_file($b, $targetFilePath);
		$fnm=explode("/", $targetFilePath);
		return $fnm['1'];
}else{
 	echo "<script>('Only JPG, JPEG, PNG files are allowed')</script>";
}
}

$image = upload_image($_FILES["image"]["name"],$_FILES["image"]["tmp_name"]);

	 	$insert=mysqli_query($conn,"INSERT INTO `profile`(`r_id`, `firstname`, `lastname`, `phone`, `email`, `address`, `state`, `city`, `image`) VALUES ('$r_id','$firstname','$lastname','$phone','$email','$address','$state','$city','$image')");
	 	if($insert==true){
	 		echo "<script>alert('Saved')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Error')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
	
}

// selling insert

if (isset($_POST['selling'])) {

$sBreed = $_POST['sBreed'];
$sPrice = $_POST['sPrice'];
$sColor = $_POST['sColor'];
$sGender = $_POST['sGender'];
$sAge = $_POST['sAge'];
$sLocation = $_POST['sLocation'];
$p_id = $_POST['p_id'];
// $date = date("d-m-y");

function upload_sell($a,$b){
	$file_target = "sellimg/";

$fileType = pathinfo($a,PATHINFO_EXTENSION);
$targetFilePath = $file_target .mt_rand(10,1000000000000000000).'.'.$fileType;
$allowTypes = array('jpg','png','jpeg','JPG','JPEG','PNG');

if(in_array($fileType, $allowTypes)){
		move_uploaded_file($b, $targetFilePath);
		$fnm=explode("/", $targetFilePath);
		return $fnm['1'];
}else{
 	echo "<script>('Only JPG, JPEG, PNG files are allowed')</script>";
}
}
$image = upload_sell($_FILES["image"]["name"],$_FILES["image"]["tmp_name"]);

$insert=mysqli_query($conn, "INSERT INTO `buyandsell`(`b_breed`, `b_price`, `b_color`, `b_gender`, `b_age`, `b_location`, `image`, `p_id`, `b_date` ) VALUES ('$sBreed','$sPrice','$sColor','$sGender','$sAge','$sLocation','$image','$p_id', CURDATE() )");
	  
	 	if($insert==true){
	 		echo "<script>alert('Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Unable To post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}

// meetup insert

if (isset($_POST['meetup'])) {

$mBreed = $_POST['mBreed'];
$mColor = $_POST['mColor'];
$mGender = $_POST['mGender'];
$mAge = $_POST['mAge'];
$mLocation = $_POST['mLocation'];
$p_id = $_POST['p_id'];

function upload_sell($a,$b){
	$file_target = "meetimg/";

$fileType = pathinfo($a,PATHINFO_EXTENSION);
$targetFilePath = $file_target .mt_rand(10,1000000000000000000).'.'.$fileType;
$allowTypes = array('jpg','png','jpeg','JPG','JPEG','PNG');

if(in_array($fileType, $allowTypes)){
		move_uploaded_file($b, $targetFilePath);
		$fnm=explode("/", $targetFilePath);
		return $fnm['1'];
}else{
 	echo "<script>('Only JPG, JPEG, PNG files are allowed')</script>";
}
}
$file_name = upload_sell($_FILES["file_name"]["name"],$_FILES["file_name"]["tmp_name"]);

$insert=mysqli_query($conn, "INSERT INTO `meetup`(`m_breed`, `m_color`, `m_gender`, `m_age`, `m_location`, `image`,`p_id`) VALUES ('$mBreed','$mColor','$mGender','$mAge','$mLocation','$file_name','$p_id')");
	  
	 	if($insert==true){
	 		echo "<script>alert('Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}else{
	 		echo "<script>alert('Unable to post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}


// <!-- sold -->
if (isset($_POST['sold'])) {
	$b_id=$_POST['b_id'];
	$st_id=$_POST['st_id'];

	$insert=mysqli_query($conn,	"INSERT INTO `sold`(`b_id`, `st_id`, `s_date`) VALUES('$b_id','$st_id',CURDATE())");
		if($insert==true){
	 		echo "<script>alert('Dog Sold Out')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}else{
	 		echo "<script>alert('Unable to Sold')</script>";
	 		 echo "<script>window.location.href='profile.php'</script>";
	 	}
}


?>
