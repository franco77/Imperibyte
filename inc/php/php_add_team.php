<?php 
require '../../conexion/db.php';


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$charge = $_POST['charge'];
$status = $_POST['status'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];
$btn_add_team = $_POST['btn_add_team'];



if (isset($_POST['btn_add_team'])) {
	

if(isset($_FILES['image'])){
      $errors= array();
      $random = md5(uniqid("") . time());
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../../uploads/team/".$random.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }




$image_team = $random.$file_name;

			$sql = "INSERT INTO $tb_teams (first_name, last_name, charge, status, image, facebook, instagram, linkedin, twitter) VALUES('$first_name','$last_name', '$charge', '$status', '$image_team', '$facebook', '$instagram', '$linkedin', '$twitter')";
			$mysqli->query($sql);


header('location: ../../team.php');

}



 ?>