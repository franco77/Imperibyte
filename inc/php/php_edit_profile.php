<?php 
session_start();


include('../../conexion/db.php');

if(isset($_POST['btn_edit_image'])) {

      $id = $_SESSION['id'];
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
        move_uploaded_file($file_tmp,"../../uploads/users/".$random.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }

      $image_user = $random.$file_name;

      $sql = "UPDATE $tb_users SET  image ='$image_user' WHERE id = '$id'";
      $mysqli->query($sql);

       header('location: ../../profile.php');

       }


   if (isset($_POST['btn_edit_password'])) {
       $id = $_SESSION['id'];
       $password = $_POST['password'];
       $repeat_password = $_POST['repeat_password'];

       if ($password === $repeat_password ) {

        $sha1_pass = sha1($password);

        $sql = "UPDATE $tb_users SET  password = '$sha1_pass' WHERE id = '$id'";
      $mysqli->query($sql);

       header('location: ../../profile.php');
         
       }
     
   }

 ?>