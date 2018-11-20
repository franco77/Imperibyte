<?php 

 require '../../conexion/db.php';


$btn_edit_portfolio = $_POST['btn_edit_portfolio'];
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$customer = $_POST['customer'];
$status = $_POST['status'];
$featured = $_POST['featured'];
$url =  $_POST['url'];
$date = $_POST['date'];
$meta_description = $_POST['meta_description'];
$meta_keywords = $_POST['meta_keywords'];










if (isset($_POST['btn_edit_portfolio'])) {
	



			$sql = "UPDATE $tb_portfolio SET title = '$title', content = '$content', customer = '$customer', url = '$url', status = '$status', featured = '$featured', date_port = '$date', meta_description = '$meta_description', meta_keywords = '$meta_keywords' WHERE id = '$id'";
			$mysqli->query($sql);

        


            header('location: ../../portfolio.php');
}



if (isset($_POST['btn_edit_image'])) {
   

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
         move_uploaded_file($file_tmp,"../../uploads/portfolio/".$random.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }




$image_portfolio = $random.$file_name;


$sql = "UPDATE $tb_portfolio SET image = '$image_portfolio' WHERE id = '$id'";
         $mysqli->query($sql);

        


            header('location: ../../portfolio.php');

}

 ?>