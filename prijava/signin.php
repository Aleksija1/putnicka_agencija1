<?php
require_once '../php/env.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign in</title>
      <link rel="stylesheet" href="../styles/signin.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </head>
   <body>
      <section class="vh-100" style="background-color: #F4F6EF;">
         <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
               <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                     <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4 pb-2 pb-md-0 mb-md-5">
                           <h3 style="font-weight: bold; color: #327D81;">Sign in</h3>
                        </div>
                        <form action="../php/signin.php" method="POST">
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <div data-mdb-input-init class="form-outline">
                                    <input type="text" name="ime" id="firstName" class="form-control form-control-lg" />
                                    <label class="form-label" for="firstName">Ime</label>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div data-mdb-input-init class="form-outline">
                                    <input type="text"  name="prezime"id="lastName" class="form-control form-control-lg" />
                                    <label class="form-label" for="lastName">Prezime</label>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 mb-4 d-flex align-items-center">
                                 <div data-mdb-input-init class="form-outline datepicker w-100">
                                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                    <label for="birthdayDate" class="form-label">Rođendan</label>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4 d-flex align-items-center">
                                 <div data-mdb-input-init class="form-outline datepicker w-100">
                                    <input type="password" name="password"class="form-control form-control-lg" id="birthdayDate" />
                                    <label for="birthdayDate" class="form-label">Lozinka</label>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 mb-4 pb-2">
                                 <div data-mdb-input-init class="form-outline">
                                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                                    <label class="form-label" for="emailAddress">Email</label>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4 pb-2">
                                 <div data-mdb-input-init class="form-outline">
                                    <input type="tel" name="broj_telefona" id="phoneNumber" class="form-control form-control-lg" />
                                    <label class="form-label" for="phoneNumber">Broj telefona</label>
                                 </div>
                              </div>
                           </div>
                           <?php
                              if(isset($_REQUEST["error"])){
                                if($_REQUEST["error"]==1){
                                  echo " <p>Vec postoji korisnik sa istim mejlom. </p> ";
                                }
                              }
                              ?>
                           <div class="row">
                              <div class="col-12 text-center">
                                 <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Predaj" style="background-color: #327D81; width: 150px;" />
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>