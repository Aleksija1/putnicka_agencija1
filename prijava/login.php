<?php
require_once '../php/env.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log in</title>
      <link rel="stylesheet" href="../styles/login.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </head>
   <body>
      <form action="../php/login.php" method="POST">
         <section class="py-3 py-md-5 py-xl-8" style="background-color: #F4F6EF;">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="mb-5">
                        <h2 class="display-5 fw-bold text-center">Log in</h2>
                        <p class="text-center m-0">Nemate nalog? <a href="<?php echo $base_url ?>prijava/signin.php">Sign up</a></p>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 col-xl-8">
                     <div class="row gy-5 justify-content-center">
                        <div class="col-12 col-lg-5">
      <form action="#!">
      <div class="row gy-3 overflow-hidden">
      <div class="col-12">
      <div class="form-floating mb-3">
      <input type="email" class="form-control border-0 border-bottom rounded-0" name="email" id="email" placeholder="name@example.com" required>
      <label for="email" class="form-label">Email</label>
      </div>
      </div>
      <div class="col-12">
      <div class="form-floating mb-3">
      <input type="password" class="form-control border-0 border-bottom rounded-0" name="password" id="password" value="" placeholder="Password" required>
      <label for="password" class="form-label">Password</label>
      </div>
      </div>
      <div class="col-12">
      <div class="row justify-content-between">
      <div class="col-6">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
      <label class="form-check-label text-secondary" for="remember_me">
      Zapamti me
      </label>
      </div>
      </div>
      </div>
      </div>
      </div>
      <?php
         if(isset($_REQUEST["error"])){
           if($_REQUEST["error"]==1){
             echo " <p>Doslo je do greske priliko prijave.</p> ";
           }
         }
         ?>
      <div class="col-12">
      <div class="d-grid">
      <button class="btn btn-lg btn-dark rounded-0 fs-6" type="submit">Log in</button>
      </div>
      </div>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <!-- footer -->
      <footer class="bg-body-tertiary text-center fixed-bottom">
         <!-- Grid container -->
         <div class="container p-4"></div>
         <div class="text-center p-3" style="background-color:  #F4F6EF;">
            © 2024 Copyright:
            <a class="text-body" href="<?php echo $base_url ?>stranice/stranica.php">Destinika.com</a>
         </div>
      </footer>
   </body>
</html>