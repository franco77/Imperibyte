<?php 
include('conexion/db.php');
        
$query_teams = "SELECT * from $tb_teams";
         $result_teams = $mysqli->query($query_teams);
         $rows_teams=$result_teams->num_rows;
 ?>



  <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cargo</th>
                      <th>Foto</th>
                      <th>Estado</th>
                      <th>Creado El</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cargo</th>
                      <th>Foto</th>
                      <th>Estado</th>
                      <th>Creado El</th>
                      <th>Accion</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     

         <?php 
               if ($rows_teams > 0) {
               foreach ($result_teams as $t) { 
            ?>
                    
                    <tr>
                      <td><?php echo $t['first_name']; ?></td>
                      <td><?php echo $t['last_name']; ?></td>
                      <td><?php echo $t['charge']; ?></td>
                      <td><img src="uploads/team/<?php echo $t['image']; ?>" class="img-fluid img-thumbnail" width="70"></td>
                      <?php if ($t['status'] == 1) {
                        echo '<td><button type="button" class="btn btn-success">Activo</button></td>';
                      } else {
                         echo '<td><button type="button" class="btn btn-danger">Inactivo</button></td>';
                      } ?>

                     <?php $date=date_create($t['created_at']); ?>
                      <td><?php echo date_format($date,"Y/m/d"); ?></td>
                      <td>  
                      <a href="#" data-toggle="modal" data-target="#show_post-<?php echo $t['id']; ?>"><i class="fas fa-eye action"></i></a>
                      <a href="team_edit.php?id=<?php echo $t['id']; ?>"><i class="fas fa-edit action"></i></a>
                      <a href="inc/php/php_delete_team.php?id=<?php echo $t['id']; ?>" class="delete"><i class="fas fa-trash-alt action"></i></a>
                      </td>
                    </tr>

                    <?php }} ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->
