<?php
$mysqli=new mysqli("localhost","root","15925621","imperibyte"); 

$tb_users = 'users';
$tb_posts = 'posts';
$tb_categories = 'categories';
$tb_portfolio = 'portfolio';


	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>