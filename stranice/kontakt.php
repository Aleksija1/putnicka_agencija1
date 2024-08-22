<?php
require_once '../php/env.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kontakt</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/kontakt.css">
      <script src="java/script.js"></script>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
         <div class="container">
            <a class="navbar-brand" href=" <?php echo $base_url ?>stranice/stranica.php"
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
      <br></br>
      <div class="about-section">
         <h3>Kontakt podaci agencije Jumbo Travel su dostupni na ovoj stranici</h3>
         <h5>Dobrodošli na Destinika Travel. Uvek smo Vam na raspolaganju. Slobodno se obratite našem timu. </h5>
         <p>Jedan telefon za sva Vaša putovanja: ☎  011 303 88 77
            <br></br>
            DESTINIKA TRAVEL d.o.o.Beogradska 30
         </p>
      </div>
      <div class="row">
         <div class="column">
            <div class="card">
               <img src="../images/co.jpg" alt="Miloš" style="width:100%">
               <div class="container">
                  <h2>Milos Sevanović</h2>
                  <p class="title">CEO & Founder</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>milos34@example.com</p>
                  <p>064578738</p>
               </div>
            </div>
         </div>
         <div class="column">
            <div class="card">
               <img src="../images/co2.jpg" alt="Sara" style="width:100%">
               <div class="container">
                  <h2>Sara Miletić</h2>
                  <p class="title">Menadzer</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>saram@example.com</p>
                  <p>066237840</p>
               </div>
            </div>
         </div>
         <div class="column">
            <div class="card">
               <img src="../images/co3.jpg" alt="John" style="width:100%">
               <div class="container">
                  <h2>Dimitrije Jovanović</h2>
                  <p class="title">Korisnička podrška</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>dimitrije54@example.com</p>
                  <p>062117634</p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer -->
      <footer class="bg-body-tertiary text-center">
         <!-- Grid container -->
         <div class="container p-4"></div>
         <div class="text-center p-3" style="background-color:#F4F6EF;">
            © 2024 Copyright:
            <a class="text-body" href="<?php echo $base_url ?>stranice/stranica.php">Destinika.com</a>
         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>