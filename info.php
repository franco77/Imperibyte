<?php $titulo = 'Informacion Del Sistema'; ?>

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




        
          

          <?php include "inc/php/info.php"; ?>

        </div>
        <!-- /.container-fluid -->


      

      <?php
      include'inc/common/footer.php';
      ?>
