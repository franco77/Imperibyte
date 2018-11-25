<?php 

 require '../../conexion/db.php';





if (isset($_POST['btn_edit_post'])) {

$btn_add_post = $_POST['btn_edit_post'];
$id = $_POST['id'];
$title = $_POST['title'];
$id_autor = $_POST['id_autor'];
$body = $_POST['body'];
$excerpt = $_POST['excerpt'];
$category_id = $_POST['category_id'];
$tags_2 = $_POST['tags'];
$slug = $_POST['slug'];
$status = $_POST['status'];
$featured = $_POST['featured'];
$meta_description = $_POST['meta_description'];
$meta_keywords = $_POST['meta_keywords'];

	


			$sql = "UPDATE $tb_posts SET id_autor = '$id_autor', category_id = '$category_id', title = '$title', excerpt = '$excerpt', body = '$body', slug = '$slug', status = '$status', featured = '$featured', meta_description = '$meta_description', meta_keywords = '$meta_keywords' WHERE id = '$id'";
			$mysqli->query($sql);

            


 header('location: ../../post.php');
}



if(isset($_POST['btn_edit_image'])){
      $id = $_POST['id'];
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
        move_uploaded_file($file_tmp,"../../uploads/post/".$random.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }

      $image_post = $random.$file_name;

      $sql = "UPDATE $tb_posts SET  image ='$image_post' WHERE id = '$id'";
      $mysqli->query($sql);

       header('location: ../../post.php');

   }


 ?>