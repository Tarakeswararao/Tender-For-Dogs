<?php 
$conn=mysqli_connect('localhost','root','','dog');

// doctor insert

if(isset($_POST['doctor'])){
$name = $_POST['name'];
$clinic = $_POST['clinic'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];
$p_id = $_POST['p_id'];

function upload_sell($a,$b){
	$file_target = "doctimg/";

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

$insert=mysqli_query($conn, "INSERT INTO `care`(`c_image`, `c_docName`, `c_clinicName`, `c_phone`, `c_mail`, `c_location`, `p_id`) VALUES ('$image','$name','$clinic','$phone','$email','$location','$p_id')");
	  
	 	if($insert==true){
	 		echo "<script>alert('Doctor Card Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Unable To post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}


// event insert

if(isset($_POST['event'])){
$event = $_POST['event'];
$eventdesc = $_POST['eventdesc'];
$location = $_POST['location'];
$p_id = $_POST['p_id'];

function upload_sell($a,$b){
	$file_target = "eventimg/";

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

$insert=mysqli_query($conn, "INSERT INTO `events`(`e_image`, `e_name`, `e_desc`, `e_location`, `p_id`) VALUES ('$image','$event','$eventdesc','$location','$p_id')");
	  
	 	if($insert==true){
	 		echo "<script>alert('Event Card Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Unable To post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}

// trainer insert

if(isset($_POST['train'])){

$name = $_POST['name'];
$desc = $_POST['desc'];
$exprence = $_POST['exprence'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$p_id = $_POST['p_id'];

function upload_sell($a,$b){
	$file_target = "trainimg/";

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

	$insert=mysqli_query($conn, "INSERT INTO `train`(`t_name`, `t_desc`, `t_exp`, `t_phone`, `t_location`, `t_image`, `p_id`) VALUES ('$name','$desc','$exprence','$phone','$location','$image','$p_id')");
	  
	 	if($insert==true){
	 		echo "<script>alert('Trainer Card Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Unable To post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}

// acc insert

if(isset($_POST['acc'])){
$shop = $_POST['shop'];
$desc = $_POST['desc'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$p_id = $_POST['p_id'];

function upload_sell($a,$b){
	$file_target = "accimg/";

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

	$insert=mysqli_query($conn, "INSERT INTO `accr`(`a_image`, `a_name`, `a_desc`, `a_phone`, `a_address`, `a_location`, `p_id`) VALUES ('$image','$shop','$desc','$phone','$address','$location','$p_id')");
	  
	 	if($insert==true){
	 		echo "<script>alert('Store Card Posted')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	
	 	}else{
	 		echo "<script>alert('Unable To post')</script>";
	 		echo "<script>window.location.href='profile.php'</script>";
	 	}
}

 ?>