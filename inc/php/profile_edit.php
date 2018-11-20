<?php 
include('conexion/db.php');
        
$id = $_SESSION['id'];


         $query_users = "SELECT * from $tb_users WHERE id = '$id'";
         $result_users = $mysqli->query($query_users);
         $rows_users=$result_users->num_rows;
      
 ?>


<?php 
if ($rows_users > 0) {
   foreach ($result_users as $ep) { ?>


<div class="row">




	<div class="col-md-7">

<div class="card mb-3">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">


<form method="POST" action="php/inc/php_edit_profile.php">
  <div class="form-group">
    <label for="first_name">Nombre</label> 
    <input id="first_name" name="first_name" type="text" class="form-control here" value="<?php echo $ep['first_name']; ?>">
  </div>
  <div class="form-group">
    <label for="last_name">Apellido</label> 
    <input id="last_name" name="last_name" type="text" class="form-control here" value="<?php echo $ep['last_name']; ?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label> 
    <input id="email" name="email" type="text" class="form-control here" value="<?php echo $ep['email']; ?>">
  </div>
  <div class="form-group">
    <label for="profile">Perfil</label> 
    <textarea id="profile" name="profile" cols="40" rows="5" class="form-control"><?php echo $ep['profile']; ?></textarea>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>



   </div>
</div>

</div>








<div class="col-md-5">
<div class="card mb-2">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">



<form method="POST" action="inc/php/php_edit_profile.php">
  <div class="form-group">
    <label for="password">Password</label> 
    <input id="password" name="password" type="password" class="form-control here">
  </div>
  <div class="form-group">
    <label for="repeat_password">Repetir Password</label> 
    <input id="repeat_password" name="repeat_password" type="password" class="form-control here">
  </div> 
  <div class="form-group">
    <button name="btn_edit_password" type="submit" class="btn btn-primary">Cambiar Contraseña</button>
  </div>
</form>
	</div>

</div>






<form method="POST" action="inc/php/php_edit_profile.php" enctype="multipart/form-data">
 <div class="form-group">
                  <div class="avatar-upload">
                     <div class="avatar-edit">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                     </div>

  <?php if ($ep['image'] == '') { ?>
  	

                     <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image);">
                        </div>
                     </div>
     <?php } else { ?>

    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(uploads/users/<?php echo $ep['image']; ?>);">
                        </div>
                     </div>

    <?php } ?>                 


                  </div>
               </div>
  <div class="form-group">
  	<input type="hidden" name="id" value="">
    <button name="btn_edit_image" type="submit" class="btn btn-primary">Editar Imagen</button>
  </div>
</form>
	</div>

</div>





</div>


</div>


<?php }} ?>
