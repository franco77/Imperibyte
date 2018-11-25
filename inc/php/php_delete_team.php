<?php 
require '../../conexion/db.php';

$id = $_GET['id'];


if (isset($id)) {
	



$query_teams = "SELECT * FROM $tb_teams WHERE id = '$id'";
$result_teams = $mysqli->query($query_teams);
$rows_teams=$result_teams->num_rows;

if ($rows_teams > 0) {
	foreach ($result_teams as $qt) {


     
     unlink("../../uploads/team/".$qt['image']); 

		
	}
	
}





$sql = "DELETE FROM $tb_teams WHERE id = '$id'";
$delete = $mysqli->query($sql);

header('location: ../../team.php');


}



 ?>