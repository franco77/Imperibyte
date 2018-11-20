<?php 
   include('conexion/db.php');
   $query_categories="SELECT * FROM $tb_categories";
   $result_categories=$mysqli->query($query_categories);
   $rows=$result_categories->num_rows;
   ?>
<div class="card mb-3">
   <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example
   </div>
   <div class="card-body">
      <form method="POST" action="inc/php/php_add_post.php" enctype="multipart/form-data">
         <div class="row">
            <div class="col-md-8">
               <div class="form-group">
                  <label for="title">Titulo</label> 
                  <input id="title" name="title" type="text" class="form-control title">
               </div>
               <div class="form-group">
                  <label for="body">Contenido</label> 
                  <textarea id="body" name="body" cols="40" rows="15" class="form-control"></textarea>
               </div>
               <div class="form-group">
                  <label for="excerpt">Extracto</label> 
                  <textarea id="excerpt" name="excerpt" cols="40" rows="7" class="form-control"></textarea>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="category_id">Categorias</label> 
                  <div>
                     <select id="category_id" name="category_id" required="required" class="custom-select">
                        <?php if ($rows > 0) {
                           foreach ($result_categories as $rc) { ?>
                        <option value="<?php echo $rc['id']; ?>"><?php echo $rc['title']; ?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="tags">Etiquetas</label>
                  <input id="tags" name="tags" type="text">
               </div>
               <div class="form-group">
                  <label for="slug">Slug</label> 
                  <input id="permalink" name="slug" type="text" class="form-control here">
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
               <div class="form-group">
                  <label for="featured">Destacado</label> 
                  <div>
                     <select id="featured" name="featured" class="custom-select">
                        <option value="0">No</option>
                        <option value="1">SI</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="meta_description">Meta Description</label> 
                  <textarea id="meta_description" name="meta_description" cols="40" rows="4" class="form-control"></textarea>
               </div>
               <div class="form-group">
                  <label for="meta_keyword">Meta Keyword</label> 
                  <textarea id="meta_keyword" name="meta_keywords" cols="40" rows="4" class="form-control"></textarea>
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
               <input type="hidden" name="id_autor" value="<?php echo $_SESSION['id']; ?>">
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <button name="btn_add_post" type="submit" class="btn btn-primary">Guardar</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
