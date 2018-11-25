<?php 
require '../../conexion/db.php';

$id = $_GET['id'];


if (isset($id)) {
	



$query_post = "SELECT * FROM $tb_posts WHERE id = '$id'";
$result_post = $mysqli->query($query_post);
$rows_post=$result_post->num_rows;

if ($rows_post > 0) {
	foreach ($result_post as $qp) {


     
     unlink("../../uploads/post/".$qp['image']); 

		
	}
	
}





$sql = "DELETE FROM $tb_posts WHERE id = '$id'";
$delete = $mysqli->query($sql);

header('location: ../../post.php');


}



 ?>