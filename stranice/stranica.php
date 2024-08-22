<?php
require_once '../php/env.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Destinika</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/stranica.css">
      <script src="java/script.js"></script>
   </head>
   <body>
      <?php 
         require_once("../php/baza.php");
         $data = $conn->query("SELECT * FROM destinacije");
         ?>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
         <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url ?>stranice/stranica.php"
               id="logo">DESTINIKA
            </a>
            <button
               class="navbar-toggler"
               type="button"
               data-mdb-toggle="collapse"
               data-mdb-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent"
               aria-expanded="false"
               aria-label="Toggle navigation"
               >
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="<?php echo $base_url ?>stranice/letovi.php"><i class="fas fa-bell pe-2"></i>Letovi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="<?php echo $base_url ?>stranice/O_nama.php"><i class="fas fa-heart pe-2"></i>O nama</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="<?php echo $base_url ?>stranice/kontakt.php"><i class="fas fa-bell pe-2"></i>Kontakt</a>
                  </li>
                  <li class="nav-item ms-3">
                     <?php 
                        session_start();
                        if(isset($_SESSION["ime"])){
                          echo $_SESSION["ime"] . " " . $_SESSION["prezime"];
                        
                        }
                        else{
                          ?>
                     <a class="btn btn-black btn-rounded"href="<?php echo $base_url ?>prijava/login.php#!" >Log in</a>
                     <?php
                        }
                        ?>
                  </li>
                  <?php 
                     if(isset($_SESSION["ime"])){
                       ?>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="<?php echo $base_url ?>php/odjava.php"><i class="fas fa-bell pe-2"></i>Odjava</a>
                  </li>
                  <?php
                     }
                     ?>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar -->
      <!-- corosal -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="../images/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="../images/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="../images/5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="../images/6.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
      <!-- corosal -->
      <div class="card border-light mb-3 w-100 text-center" >
         <div class="card-body">
            <h5 class="card-title">Putovanja se pamte i o njima se priča celoga života.</h5>
            <p class="card-text">
               Poverite nam vaše putovanje i mi ćemo se potruditi da vaša priča bude što lepša.
            </p>
         </div>
      </div>
      <!-- kartice -->
      <div class="container">
         <div class="row">
            <?php
               foreach ($data as $row) {
                 ?>
            <div class="col-3">
               <div class="card h-100">
                  <img class="card-img-top h-100" src="../images/card<?php echo $row['id_destinacije'];?>.jpeg" alt="">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $row["drzava"]?></h5>
                     <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["drzava"]?></h6>
                  </div>
               </div>
            </div>
            <?php
               }
               ?>
         </div>
      </div>
      <!-- footer -->
      <footer class="bg-body-tertiary text-center">
         <!-- Grid container -->
         <div class="container p-4"></div>
         <div class="text-center p-3" style="background-color:  #F4F6EF;">
            © 2024 Copyright:
            <a class="text-body" href="<?php echo $base_url ?>stranice/stranica.php">Destinika.com</a>
         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>