<?php 

 require '../../conexion/db.php';


$btn_add_post = $_POST['btn_add_post'];
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










if (isset($_POST['btn_add_post'])) {
	

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
         move_uploaded_file($file_tmp,"../../uploads/post/".$random.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }




$image_post = $random.$file_name;


			$sql = "INSERT INTO tb_posts (id_autor, category_id, title, excerpt, body, image, slug, status, featured, meta_description, meta_keywords, created_at) VALUES('$id_autor','$category_id', '$title', '$excerpt', '$body', '$image_post', '$slug', '$status', '$featured', '$meta_description', '$meta_keywords', now())";
			$mysqli->query($sql);

            



$post_id=$mysqli->insert_id;

             $tags_1 = $tags_2;
               $tags = trim($tags_1);
               $tags_array = explode(",", $tags);
                   if (!empty($tags_array)) {
               foreach ($tags_array as $tag) {
               $tag = trim($tag);
                   if (strlen($tag) > 1) {

                    
                       $tag_slug=preg_replace('/[^A-Za-z0-9-<>""!?,.]+/', '-', $tag);
                       
                    

           
           
           $insert_tag = "INSERT INTO tb_tags (post_id, tag, tag_slug, created_at) VALUES('$post_id', '$tag', '$tag_slug', now())";
           $mysqli->query($insert_tag);

     } 
   }
}









            header('location: ../../post.php');
}



 ?>