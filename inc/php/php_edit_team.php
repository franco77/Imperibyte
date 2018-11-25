<?php 
require '../../conexion/db.php';

$id = $_POST['id'];
$btn_edit_team = $_POST['btn_edit_team'];
$btn_edit_image = $_POST['btn_edit_image'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$charge = $_POST['charge'];
$status = $_POST['status'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];




if (isset($btn_edit_team)) {
	

    $sql = "UPDATE $tb_teams SET first_name = '$first_name', last_name = '$last_name', charge = '$charge', status = '$status', facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', twitter = '$twitter'  WHERE id = '$id'";
         $mysqli->query($sql);

    header('location: ../../team.php');



} 




if (isset($btn_edit_image)) {


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



         $image_team = $random.$file_name;

         $sql = "UPDATE $tb_teams SET image='$image_team' WHERE id='$id'";
         $mysqli->query($sql);

         header('location: ../../team.php');

   
}



 ?>