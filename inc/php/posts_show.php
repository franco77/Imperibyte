<?php 
include('conexion/db.php');

         $query_posts = "SELECT * FROM $tb_posts";
         $result_posts = $mysqli->query($query_posts);
         $rows_posts=$result_posts->num_rows;


 ?>

<?php 
if ($rows_posts > 0) {
  foreach ($result_posts as $rvp) {
 $id_post = $rvp['id'];


 $id_cat = $rvp['category_id'];
 $id_autor = $rvp['id_autor'];

 $query_cat = "SELECT * FROM $tb_categories WHERE id = '$id_cat'";
         $result_cat = $mysqli->query($query_cat);
         $rows_cat=$result_cat->num_rows;


         if ($rows_cat > 0) {
          foreach ($result_cat as $rvc) {


            $rvc['title'];
            
          }
           
         }


     $query_autor = "SELECT * FROM $tb_users WHERE id = '$id_autor'";
         $result_autor = $mysqli->query($query_autor);
         $rows_autor=$result_autor->num_rows;

         if ($rows_autor > 0) {
          foreach ($result_autor as $rva) {

            $rva['first_name'];
            $rva['last_name'];
            
          }
           
         }




 ?>

<div class="modal fade" id="show_post-<?php echo $rvp['id'];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Info Dela Publicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


<table class="table table-bordered">
      <tbody>
      <tr>
      <th width="150">Autor</th>
      <td><?php echo $rva['first_name'].' '.$rva['last_name']; ?></td>
      </tr>
      <tr>
      <th>Categoria</th>
      <td><?php echo $rvc['title']; ?></td>
      </tr>
      <tr>
      <th>Titulo</th>
      <td><?php echo $rvp['title']; ?></td>
      </tr>
      <tr>
      <th>Contenido</th>
      <td><?php echo $rvp['body']; ?></td>
      </tr>
      <tr>
      <th>Imagen</th>
      <td><img src="uploads/post/<?php echo $rvp['image']; ?>" class="img-fluid img-thumbnail" width="250"></td>
      </tr>
      <tr>
      <th>Slug</th>
      <td><?php echo $rvp['slug']; ?></td>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php }} ?>