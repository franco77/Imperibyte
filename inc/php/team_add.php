<div class="card mb-3">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">




<form method="POST" action="inc/php/php_add_team.php" enctype="multipart/form-data">
<div class="row">
	<div class="col-md-6">
		
 <div class="form-group">
    <label for="first_name">Nombre</label> 
    <input id="first_name" name="first_name" type="text" class="form-control here">
  </div>
  <div class="form-group">
    <label for="last_name">Apellido</label> 
    <input id="last_name" name="last_name" type="text" class="form-control here">
  </div>
  <div class="form-group">
    <label for="charge">Cargo</label> 
    <input id="charge" name="charge" type="text" class="form-control here">
  </div>

   <div class="form-group">
                  <div class="avatar-upload">
                     <div class="avatar-edit">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                     </div>
                     <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image);">
                        </div>
                     </div>
                  </div>
               </div>


	</div>

	<div class="col-md-6">

	<div class="form-group">
                  <label for="status">Estado</label> 
                  <div>
                     <select id="status" name="status" class="custom-select">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                     </select>
                  </div>
               </div>
               	
	<div class="form-group">
    <label for="facebook">Facebook</label> 
    <input id="facebook" name="facebook" type="text" class="form-control here">
  </div>
  <div class="form-group">
    <label for="instagram">Instagram</label> 
    <input id="instagram" name="instagram" type="text" class="form-control here">
  </div>
  <div class="form-group">
    <label for="linkedin">Linkedin</label> 
    <input id="linkedin" name="linkedin" type="text" class="form-control here">
  </div>
  <div class="form-group">
    <label for="twitter">Twitter</label> 
    <input id="twitter" name="twitter" type="text" class="form-control here">
  </div> 
  	
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
    <button name="btn_add_team" type="submit" class="btn btn-primary">Guardar</button>
  </div>
	</div>
</div>


 
  
</form>





   	</div>
</div>