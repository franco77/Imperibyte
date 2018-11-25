<?php 
include('conexion/db.php');
        
$query_posts = "SELECT COUNT(*) cpost FROM $tb_posts";
         $result_posts = $mysqli->query($query_posts);
         $rows_posts=$result_posts->num_rows;

 foreach ($result_posts as $count_posts) {
  
        $count_post = $count_posts['cpost'];
           
         }        


$query_portfolio = "SELECT COUNT(*) cport FROM $tb_portfolio";
         $result_portfolio = $mysqli->query($query_portfolio);
         $rows_portfolio=$result_portfolio->num_rows; 

         foreach ($result_portfolio as $count_portfolio) {

          $count_port = $count_portfolio['cport'];
                   
                 }    

 $query_teaam = "SELECT COUNT(*) cteam FROM $tb_teams";
           $result_team = $mysqli->query($query_teaam);
           $rows_team = $result_team->num_rows;

           foreach ($result_team as $count_team) {
                                 
                          $count_team = $count_team['cteam'];

                          }                    


 ?>


<div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5"><?php echo $count_post; ?> Publicaciones</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="post.php">
                  <span class="float-left">Ver Portafolio</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo $count_port; ?> Portafolio</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="portfolio.php">
                  <span class="float-left">Ver Publicaciones</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo $count_team; ?> Miembros</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="team.php">
                  <span class="float-left">Ver Miembros</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
</div>