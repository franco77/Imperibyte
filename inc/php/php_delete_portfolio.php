<?php 
require '../../conexion/db.php';

$id = $_GET['id'];


if (isset($id)) {
	



$query_portfolio = "SELECT * FROM $tb_portfolio WHERE id = '$id'";
$result_portfolio = $mysqli->query($query_portfolio);
$rows_portfolio=$result_portfolio->num_rows;

if ($rows_portfolio > 0) {
	foreach ($result_portfolio as $qp) {


     
     unlink("../../uploads/portfolio/".$qp['image']); 

		
	}
	
}





$sql = "DELETE FROM $tb_portfolio WHERE id = '$id'";
$delete = $mysqli->query($sql);

header('location: ../../portfolio.php');


}



 ?>