<?php 
$conn=mysqli_connect('localhost','root','','dog');

$r_id = $_POST['r_id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
		
// function upload_image($a,$b){
// 	$file_target = "uploads/";

// $fileType = pathinfo($a,PATHINFO_EXTENSION);
// $targetFilePath = $file_target .mt_rand(10,1000000000000000000).'.'.$fileType;
// $allowTypes = array('jpg','png','jpeg','JPG','JPEG','PNG');

// if(in_array($fileType, $allowTypes)){
// 		move_uploaded_file($b, $targetFilePath);
// 		$fnm=explode("/", $targetFilePath);
// 		return $fnm['1'];
// }else{
//  	echo "<script>('Only JPG, JPEG, PNG files are allowed')</script>";
// }
// }

// $image = upload_image($_FILES["image"]["name"],$_FILES["image"]["tmp_name"]);
	 	
$update= mysqli_query($conn, "UPDATE `profile` SET `r_id`='$r_id', `firstname`='$firstName',`lastname`='$lastName',`phone`='$phone',`email`='$email',`address`='$address',`state`='$state',`city`='$city' WHERE `r_id` = '$_POST[r_id]'");

		if($update===true){
			echo "<script>alert('updated succesfully')</script>";
			echo "<script>window.location.href='profile.php'</script>";

	 	}else{
	 		echo "<script>alert('Error')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
 ?>