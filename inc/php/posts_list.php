<?php 
         include('conexion/db.php');
         $posts = "SELECT * from $tb_posts";
         $results = $mysqli->query($posts);
         $rows=$results->num_rows;
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
                      <th>Titulo</th>
                      <th>Extracto</th>
                      <th>Imagen</th>
                      <th>Estado</th>
                      <th>Destacado</th>
                      <th>Creado El</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Titulo</th>
                      <th width="700">Extracto</th>
                      <th>Imagen</th>
                      <th>Estado</th>
                      <th>Destacado</th>
                      <th>Creado El</th>
                      <th width="120">Accion</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     

         <?php 
               if ($rows > 0) {
               foreach ($results as $p) { 
            ?>
                    
                    <tr>
                      <td><?php echo $p['title']; ?></td>
                      <td><?php echo substr($p['excerpt'],0,150); ?></td>
                      <td><img src="uploads/post/<?php echo $p['image']; ?>" class="img-fluid img-thumbnail" width="70"></td>
                      <?php if ($p['status'] == 1) {
                        echo '<td><button type="button" class="btn btn-success">Activo</button></td>';
                      } else {
                         echo '<td><button type="button" class="btn btn-danger">Inactivo</button></td>';
                      } ?>
                     
                     <?php if ($p['featured'] == 1) {
                        echo '<td><button type="button" class="btn btn-info">SI</button></td>';
                     } else {
                       echo '<td><button type="button" class="btn btn-primary">NO</button></td>';
                     } ?>

                     <?php $date=date_create($p['created_at']); ?>
                      <td><?php echo date_format($date,"Y/m/d"); ?></td>
                      <td>  
                      <a href="#" data-toggle="modal" data-target="#show_post-<?php echo $p['id']; ?>"><i class="fas fa-eye action"></i></a>
                      <a href="post_edit.php?id=<?php echo $p['id']; ?>"><i class="fas fa-edit action"></i></a>
                      <a href="inc/php/php_delete_post.php?id=<?php echo $p['id']; ?>" class="delete"><i class="fas fa-trash-alt action"></i></a>
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
