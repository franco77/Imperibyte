<?php 
include('conexion/db.php');
        
$id = $_SESSION['id'];


         $query_users = "SELECT * from $tb_users WHERE id = '$id'";
         $result_users = $mysqli->query($query_users);
         $rows_users=$result_users->num_rows;
      
 ?>

<?php 
if ($rows_users > 0) {
   foreach ($result_users as $profile) { ?>
     




          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Perfil De Usuario</div>
            <div class="card-body">



<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="uploads/users/<?php echo $profile['image']; ?>" class="img-thumbnail img-fluid" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $profile['first_name']. ' '.$profile['last_name']; ?>
                                    </h5>
                                    <h6>
                                       Administrador
                                    </h6>
                                    
                            <h3>Acerca De</h3>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="profile_edit.php" class="btn btn-primary">Editar Perfil</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile['first_name']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellido</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile['last_name']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile['email']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>IP</label>
                                            </div>
                                            <div class="col-md-6">

                                                <p><?php echo $_SERVER['REMOTE_ADDR']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Perfil</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile['profile']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>

              



            </div>
          </div>

          

        </div>

<?php   } }

 ?>
