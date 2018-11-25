<?php 
include('conexion/db.php');

         $query_team = "SELECT * FROM $tb_teams";
         $result_team = $mysqli->query($query_team);
         $rows_team=$result_team->num_rows;


 ?>
 <?php 
 if ($rows_team > 0) {
 	foreach ($result_team as $rt) { ?>



<div class="modal fade" id="show_post-<?php echo $rt['id'];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Info Del Miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 


 <table class="table table-bordered">
 	<tbody>
 		
  
  <tr>
  	<th>Nombre</th>
  	<td><?php echo $rt['first_name']; ?></td>
  </tr>
  <tr>
  	<th>Apellido</th>
  	<td><?php echo $rt['last_name']; ?></td>
  </tr>
  <tr>
  	<th>Cargo</th>
  	<td><?php echo $rt['charge']; ?></td>
  </tr>
  <tr>
      <th>Estado</th>
      <?php if ($rt['status'] == 1) {
                        echo '<td><button type="button" class="btn btn-success">Activo</button></td>';
                      } else {
                         echo '<td><button type="button" class="btn btn-danger">Inactivo</button></td>';
                      } ?>
      </tr>
  <tr>
  	<th>Imagen</th>
  	<td><img src="uploads/team/<?php echo $rt['image']; ?>" class="img-fluid img-thumbnail" width="80"></td>
  </tr>
  <tr>
  	<th>Facebook</th>
  	<td><?php echo $rt['facebook']; ?></td>
  </tr>
  <tr>
  	<th>Instagram</th>
  	<td><?php echo $rt['instagram']; ?></td>
  </tr>
  <tr>
  	<th>Linkedin</th>
  	<td><?php echo $rt['linkedin']; ?></td>
  </tr>
  <tr>
  	<th>Twitter</th>
  	<td><?php echo $rt['twitter']; ?></td>
  </tr>


 	</tbody>
 </table>




</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




 		
 <?php	}} ?>