<?php
require_once '../php/env.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>O nama</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/O_nama.css">
      <script src="java/script.js"></script>
   </head>
   <body>
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
      <br> 
      </br>
      <!-- About 1 - Bootstrap Brain Component -->
      <section class="py-3 py-md-5 section-bg">
         <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
               <div class="col-12 col-lg-6 col-xl-5">
                  <img class="img-fluid " loading="lazy" src="../images/11.jpg" alt="">
               </div>
               <div class="col-12 col-lg-6 col-xl-7">
                  <div class="row justify-content-xl-center">
                     <div class="col-12 col-xl-11">
                        <h2 class="mb-3 heading-color">Ko smo mi?</h2>
                        <p class="lead fs-4 text-secondary mb-3">Pomažemo putnicima da kreiraju nezaboravna putovanja i izuzetna iskustva. Naš cilj je da pružimo izvanredne i očaravajuće usluge, osiguravajući da svako putovanje bude pažljivo isplanirano i jedinstveno nezaboravno.</p>
                        <p class="mb-5">Kao dinamična turistička kompanija, nikada ne gubimo iz vida naše osnovne vrednosti. Verujemo u saradnju, inovacije i zadovoljstvo korisnika, stalno tražeći nove načine da unapredimo naše turističke usluge i iskustva.</p>
                        <div class="row gy-4 gy-md-0 gx-xxl-5X">
                           <div class="col-12 col-md-6">
                              <div class="d-flex">
                                 <div class="me-4 text-primary">
                                 </div>
                                 <div>
                                    <h2 class="h4 mb-3 heading-color">Izuzetna usluga</h2>
                                    <p class="text-secondary mb-0">Pružanje personalizovane pomoći, brzo reagovanje na upite i osiguranje glatke putničke avanture od suštinskog su značaja.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6">
                              <div class="d-flex">
                                 <div class="me-4 text-primary">
                                 </div>
                                 <div>
                                    <h2 class="h4 mb-3 heading-color">Poverenje</h2>
                                    <p class="text-secondary mb-0">Verujemo u poverenje kao temelj svake uspešne veze. Zbog toga se trudimo da budemo potpuno transparentni u svemu što radimo. </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- footer -->
      <footer class="bg-body-tertiary text-center ">
         <!-- Grid container -->
         <div class="text-center p-3" style="background-color:#FFFFFF;">
            © 2024 Copyright:
            <a class="text-body" href="<?php echo $base_url ?>stranice/stranica.php">Destinika.com</a>
         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>