<?php 
include('conexion/db.php');

         $query_portfolio = "SELECT * FROM $tb_portfolio";
         $result_portfolio = $mysqli->query($query_portfolio);
         $rows_portfolio=$result_portfolio->num_rows;

if ($rows_portfolio > 0) {
  foreach ($result_portfolio as $rvp) {
    

 ?>



<div class="modal fade" id="show_portfolio-<?php echo $rvp['id'];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


<table class="table table-bordered">
      <tbody>
      <tr>
      <th width="200">Titulo</th>
      <td><?php echo $rvp['title']; ?></td>
      </tr>
      <tr>
      <th>Contenido</th>
      <td><?php echo $rvp['content']; ?></td>
      </tr>
      <tr>
      <th>Imagen</th>
      <td><img src="uploads/portfolio/<?php echo $rvp['image']; ?>" class="img-fluid img-thumbnail" width="250"></td>
      </tr>
      <tr>
      <th>Cliente</th>
      <td><?php echo $rvp['customer']; ?></td>
      </tr>
      <tr>
      <th>Url</th>
      <td><?php echo $rvp['url']; ?></td>
      </tr>
      <tr>
      <th>Estado</th>
      <?php if ($rvp['status'] == 1) {
                        echo '<td><button type="button" class="btn btn-success">Activo</button></td>';
                      } else {
                         echo '<td><button type="button" class="btn btn-danger">Inactivo</button></td>';
                      } ?>
      </tr>
      <tr>
      <th>Destacado</th>
      <?php if ($rvp['featured'] == 1) {
                        echo '<td><button type="button" class="btn btn-info">SI</button></td>';
                     } else {
                       echo '<td><button type="button" class="btn btn-primary">NO</button></td>';
                     } ?>
      </tr>
       <tr>
      <th>Meta Keyword</th>
      <td><?php echo $rvp['meta_keywords']; ?></td>
      </tr>
       <tr>
      <th>Meta Description</th>
      <td><?php echo $rvp['meta_description']; ?></td>
      </tr>


      </tbody>
      </table>









      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php }} ?>