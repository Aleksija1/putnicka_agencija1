<?php 
   require_once("../php/baza.php");
   $data = $conn->query("SELECT * FROM raspolozivi_letovi");
   require_once '../php/env.php';

 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Letovi</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/letovi.css">
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-light navbar-light">
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
      <div class="container">
      <div class="card">
         <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #13296B; color:white;">
            <span>DOSTUPNI LETOVI:</span>
         </div>
         <div class="card-body" style="background-color:  #F4F6EF;">
            <div class="container">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th scope="col">Id leta</th>
                        <th scope="col">Polazište</th>
                        <th scope="col">Id destinacije</th>
                        <th scope="col">Datum polaska</th>
                        <th scope="col">Vreme polaska</th>
                        <th scope="col">Cena karte</th>
                        <?php 
                           if(isset($_SESSION["ime"])){
                             ?>
                        <th scope="col">Rezervacija</th>
                        <?php
                           }
                           ?>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        foreach ($data as $row) {
                          ?>
                     <tr>
                     <tr>
                        <td><?php 
                           echo $row["id_leta"];?></td>
                        <td><?php 
                           echo $row["polaziste"];?></td>
                        <td><?php    
                           echo $row["id_destinacije"];?></td>
                        <td><?php 
                           echo $row["datum_polaska"];?></td>
                        <td><?php 
                           echo $row["vreme_polaska"];?></td>
                        <td><?php 
                           echo $row["cena_karte"];?></td>
                        <?php 
                           if(isset($_SESSION["ime"])){
                             ?>
                        <td> 
                           <a href='<?php echo $base_url ?>stranice/rezervacije.php?let=<?php echo $row["id_leta"]?>'>
                           <button class="btn btn-primary" style="background-color: #327D81; border-color: #327D81;">Rezervisi</button>
                           </a>
                        </td>
                        <?php
                           }
                           ?>
                     </tr>
                     </tr>
                     <?php
                        }
                        ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- footer -->
      <footer class="bg-body-tertiary text-center fixed-bottom">
         <!-- Grid container -->
         <div class="container p-4"></div>
         <div class="text-center p-3" style="background-color:#FFFFFF;">
            © 2024 Copyright:
            <a class="text-body" href="<?php echo $base_url ?>stranice/stranica.php">Destinika.com</a>
         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 
   </body>
</html>