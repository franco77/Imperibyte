<?php $titulo = 'Equipo De Trabajo'; ?>

<?php include 'inc/common/head.php';?>
<body id="page-top">
   <?php include'inc/common/menu.php'; ?>
   <div id="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="index.php">Inicio</a>
         </li>
         <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
      </ol>




         
          <h1><?php echo $titulo; ?></h1>
          <hr>
          <p><a href="team_add.php" class="btn btn-primary">Nuevo Miembro</a></p>
          
          

          <?php include'inc/php/team_list.php'; ?>
        


        </div>

        

      

      <?php
      include'inc/common/footer.php';
      ?>