<?php 
   include('conexion/db.php');

   $query_categories="SELECT * FROM $tb_categories";
   $result_categories=$mysqli->query($query_categories);
   $rows=$result_categories->num_rows;


$id = $_GET['id'];
         $query_posts = "SELECT * FROM $tb_posts WHERE id = '$id' ";
         $result_posts = $mysqli->query($query_posts);
         $rows_posts=$result_posts->num_rows;


         $query_tags = "SELECT * FROM tags WHERE post_id = '$id' ";
         $result_tags = $mysqli->query($query_tags);
         $rows_tags=$result_tags->num_rows;

         


             


?>

<?php 

if ($rows_posts > 0) {
   foreach ($result_posts as $rp) {
   ?>   




<div class="card mb-3">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">
      <form method="POST" action="inc/php/php_edit_post.php">
         <div class="row">
            <div class="col-md-8">
               <div class="form-group">
                  <label for="title">Titulo</label> 
                  <input id="title" name="title" type="text" class="form-control title" value="<?php echo $rp['title']; ?>">
               </div>
               <div class="form-group">
                  <label for="body">Contenido</label> 
                  <textarea id="body" name="body" cols="40" rows="15" class="form-control"><?php echo $rp['body']; ?></textarea>
               </div>
               <div class="form-group">
                  <label for="excerpt">Extracto</label> 
                  <textarea id="excerpt" name="excerpt" cols="40" rows="7" class="form-control"><?php echo $rp['excerpt']; ?></textarea>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="category_id">Categorias</label> 
                  <div>
                     <select id="category_id" name="category_id" required="required" class="custom-select">
                        <?php if ($rows > 0) {
                           foreach ($result_categories as $rc) { ?>
                        <option <?php if ($rp['category_id'] ==  $rc['id'] ) echo 'selected' ; ?> value="<?php echo $rc['id']; ?>"><?php echo $rc['title']; ?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="tags">Etiquetas</label>
                  <input id="tags" name="tags" type="text" value="<?php if ($rows_tags > 0) { foreach ($result_tags as $rt) { $tags_2 = $rt['tag'].',';
                           echo $tags_2;
                                          }
                                       }
                            ?>">
               </div>
               <div class="form-group">
                  <label for="slug">Slug</label> 
                  <input id="permalink" name="slug" type="text" class="form-control here" value="<?php echo $rp['slug']; ?>">
               </div>
               <div class="form-group">
                  <label for="status">Estado</label> 
                  <div>
                     <select id="status" name="status" class="custom-select">
                        <option <?php if ($rp['status'] == 1 ) echo 'selected' ; ?> value="1">Activo</option>
                        <option <?php if ($rp['status'] == 0 ) echo 'selected' ; ?> value="0">Inactivo</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="featured">Destacado</label> 
                  <div>
                     <select id="featured" name="featured" class="custom-select">
                        <option <?php if ($rp['featured'] == 1 ) echo 'selected' ; ?> value="1">Destacado</option>
                        <option <?php if ($rp['featured'] == 0 ) echo 'selected' ; ?> value="0">No Destacado</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="meta_description">Meta Description</label> 
                  <textarea id="meta_description" name="meta_description" cols="40" rows="2" class="form-control"><?php echo $rp['meta_description']; ?></textarea>
               </div>
               <div class="form-group">
                  <label for="meta_keyword">Meta Keyword</label> 
                  <textarea id="meta_keyword" name="meta_keywords" cols="40" rows="2" class="form-control"><?php echo $rp['meta_keywords']; ?></textarea>
               </div>


                
        





               <input type="hidden" name="id_autor" value="<?php echo $_SESSION['id']; ?>">
               <input type="hidden" name="id" value="<?php echo $rp['id']; ?>">
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <button name="btn_edit_post" type="submit" class="btn btn-primary">Guardar</button>
               </div>
            </div>
         </div>










      </form>



 <form method="POST" name="edit_image" action="inc/php/php_edit_post.php" enctype="multipart/form-data">

       <div class="row">
          <div class="col-md-12">
                       <div class="form-group">
<div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>

      <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(uploads/<?php echo $rp['image']; ?>);">
            </div>
        </div>
</div>
</div>
<input type="hidden" name="id" value="<?php echo $rp['id']; ?>">

<div class="form-group">
                  <button name="btn_edit_image" type="submit" class="btn btn-primary">Editar Imagen</button>
               </div>

          </div>
       </div>

</form>




   </div>
</div>

<?php 
   }
   
}

 ?>