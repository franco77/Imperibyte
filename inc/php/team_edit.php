<?php 
include('conexion/db.php');

$id = $_GET['id'];

$query_teams = "SELECT * from $tb_teams WHERE id = '$id'";
         $result_teams = $mysqli->query($query_teams);
         $rows_teams=$result_teams->num_rows;

 ?>


<?php 
if ($rows_teams > 0) {
  foreach ($result_teams as $rt) { ?>
    
 


<div class="card mb-3">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">




<form method="POST" action="inc/php/php_edit_team.php">
<div class="row">
	<div class="col-md-6">
		
 <div class="form-group">
    <label for="first_name">Nombre</label> 
    <input id="first_name" name="first_name" type="text" class="form-control here" value="<?php echo $rt['first_name'] ?>">
  </div>
  <div class="form-group">
    <label for="last_name">Apellido</label> 
    <input id="last_name" name="last_name" type="text" class="form-control here" value="<?php echo $rt['last_name'] ?>">
  </div>
  <div class="form-group">
    <label for="charge">Cargo</label> 
    <input id="charge" name="charge" type="text" class="form-control here" value="<?php echo $rt['charge'] ?>">
  </div>

  <div class="form-group">
                  <label for="status">Estado</label> 
                  <div>
                     <select id="status" name="status" class="custom-select">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                     </select>
                  </div>
               </div>


	</div>

	<div class="col-md-6">
             	
	<div class="form-group">
    <label for="facebook">Facebook</label> 
    <input id="facebook" name="facebook" type="text" class="form-control here" value="<?php echo $rt['facebook'] ?>">
  </div>
  <div class="form-group">
    <label for="instagram">Instagram</label> 
    <input id="instagram" name="instagram" type="text" class="form-control here" value="<?php echo $rt['instagram'] ?>">
  </div>
  <div class="form-group">
    <label for="linkedin">Linkedin</label> 
    <input id="linkedin" name="linkedin" type="text" class="form-control here" value="<?php echo $rt['linkedin'] ?>">
  </div>
  <div class="form-group">
    <label for="twitter">Twitter</label> 
    <input id="twitter" name="twitter" type="text" class="form-control here" value="<?php echo $rt['twitter'] ?>">
  </div> 
  	
	</div>
</div>
<input type="hidden" name="id" value="<?php echo $rt['id'] ?>">
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
    <button name="btn_edit_team" type="submit" class="btn btn-primary">Editar</button>
  </div>
	</div>
</div>


 
  
</form>

<hr>


<form method="POST" action="inc/php/php_edit_team.php" enctype="multipart/form-data">
<div class="row">
  <div class="col-md-6">
<div class="form-group">
                  <div class="avatar-upload">
                     <div class="avatar-edit">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                     </div>
                     <?php if ($rt['image'] != '') { ?>
                     
                      <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(uploads/team/<?php echo $rt['image'] ?>);">
                        </div>
                     </div> 

                     <?php }else { ?>
                     <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image);">
                        </div>
                     </div>
                   <?php } ?>
                  </div>
               </div>
               <input type="hidden" name="id" value="<?php echo $rt['id'] ?>">
<div class="form-group">
    <button name="btn_edit_image" type="submit" class="btn btn-primary">Editar</button>
  </div>
</div>
</div>
</form>



   	</div>
</div>



<?php
  }}
 ?>