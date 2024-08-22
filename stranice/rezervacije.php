<?php 
   require_once("../php/baza.php");
   session_start();
   if(isset($_POST["nacin"] )){
      $nacin=$_POST["nacin"];
      $klasa=$_POST["klasa"];
      $broj_sedista=$_POST["broj_sedista"];
      $id_leta=$_GET["let"];
      $id_putnika=$_SESSION["id"];
      
      $statement = $conn-> prepare("INSERT INTO rezervacija (nacin_placanja, id_leta, broj_sedista, klasa, id_putnika) VALUES (?, ?, ?, ?, ?)" );
      
      $statement -> bind_param('siiii', $nacin, $id_leta , $broj_sedista, $klasa, $id_putnika); 
      
      if($statement-> execute()){
      header("Location: ../stranice/rezervacije.php?let=".$id_leta);
      }else{
      die('Error: ('.$conn->errno . ')' . $conn->error);
      }
   }
   else if(isset($_REQUEST["brisanje"])){
      $statement = $conn-> prepare("DELETE FROM rezervacija WHERE id_rezervacije=?" );
      
      $statement -> bind_param('i', $_REQUEST["brisanje"]); 
      
      if($statement-> execute()){
      header("Location: ../stranice/rezervacije.php?let=".$_REQUEST["let"]);
      }else{
      die('Error: ('.$conn->errno . ')' . $conn->error);
      }
   }
   else if(isset($_REQUEST["azuriranje"]) && isset($_REQUEST["klasa"])){
      $statement = $conn-> prepare("UPDATE rezervacija SET klasa=? WHERE id_rezervacije=?" );
      
      $statement -> bind_param('ii',$_REQUEST["klasa"] ,$_REQUEST["azuriranje"]); 
      
      if($statement-> execute()){
      header("Location: ../stranice/rezervacije.php?let=".$_REQUEST["let"]);
      }else{
      die('Error: ('.$conn->errno . ')' . $conn->error);
      }
   }
   $data = $conn->query("SELECT * FROM rezervacija");
   require_once '../php/env.php';

 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Rezervacije</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/rezervacije.css">
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
      <br></br>
      <!-- Navbar -->
      <div class="container-fluid">
         <div class=" row  align-items-center">
            <div class="col-6 ">
               <form class="card p-3" method="POST" action="./rezervacije.php?let=<?php echo $_GET["let"];?>">
                  <fieldset class="form-group">
                     <div class="row justify-content-center">
                        <legend class="centered-legend pt-2"><b>Način plaćanja</b></legend>
                        <div class="col">
                           <div class="form-check ">
                              <input class="form-check-input" type="radio" name="nacin" id="paymentMethod1" value="racun" checked>
                              <label class="form-check-label" for="paymentMethod1">
                              Plaćanje preko računa
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="nacin" id="paymentMethod2" value="kartica">
                              <label class="form-check-label" for="paymentMethod2">
                              Plaćanje platnim karticama
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="nacin" id="paymentMethod3" value="kredit">
                              <label class="form-check-label" for="paymentMethod3">
                              Web kredit
                              </label>
                           </div>
                        </div>
                     </div>
                  </fieldset>
                  <div class="form-group row">
                     <label for="seatNumber" class="col-form-label"></label>
                     <div class="col">
                        <input type="number" min="1" class="form-control" name="broj_sedista" id="seatNumber" placeholder="Broj sedišta">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="classSelect" class="col-form-label"></label>
                     <div class="col">
                        <select class="custom-select" id="classSelect" name="klasa">
                           <option value="1">1.Prva klasa</option>
                           <option value="2">2.Biznis klasa</option>
                           <option value="3">3.Ekonomska klasa</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">
                        <button type="submit" class="btn btn-primary"style="background-color:#327D81">Rezerviši</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-6">
               <!-- Your second column here -->
               <div class="card-body" style="background-color:  #F4F6EF;">
                  <div class="container">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th scope="col">Način plaćanja</th>
                              <th scope="col">Id leta</th>
                              <th scope="col">Broj sedišta</th>
                              <th scope="col">Klasa</th>
                              <th scope="col">Ime putnika</th>
                              <th scope="col">Akcije</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              foreach ($data as $row) {
                                ?>
                           <tr>
                           <tr>
                              <td><?php    
                                 echo $row["nacin_placanja"];?></td>
                              <td><?php 
                                 echo $row["id_leta"];?></td>
                              <td><?php 
                                 echo $row["broj_sedista"];?></td>
                              <td>
                                 <?php 
                                 if(isset($_REQUEST["azuriranje"]) && $_REQUEST["azuriranje"]==$row["id_rezervacije"]){
                                 ?>
                                    <form method="POST" action="<?php echo $base_url ?>stranice/rezervacije.php?let=<?php echo $_GET["let"].'&azuriranje='.$row['id_rezervacije']?>">
                                       <select class="custom-select" id="classSelect" name="klasa">
                                          <option value="" selected disabled hidden>Odaberite klasu</option>
                                          <option value="1">1.Prva klasa</option>
                                          <option value="2">2.Biznis klasa</option>
                                          <option value="3">3.Ekonomska klasa</option>
                                       </select>
                                       <button>Potvrda</button>
                                    </form>
                                 <?php
                                 }
                                 else
                                    echo $row["klasa"];
                                 ?>
                                 
                                 </td>
                                 <td>
                                    <?php 
                                       $q = $conn->query("SELECT * FROM putnici where id_putnika=".$row['id_putnika']);
                                       $data=$q->fetch_object();
                                       echo $data->ime . " " . $data->prezime;
                                    ?>
                                 </td>
                              <td>
                                 <?php 
                                    if($row['id_putnika'] == $_SESSION['id']){
                                       ?>
                                             <button>
                                                <a href="<?php echo $base_url ?>stranice/rezervacije.php?let=<?php echo $_GET["let"].'&brisanje='.$row['id_rezervacije']?>">
                                                   Brisanje
                                                </a>
                                             </button>
                                             <button >
                                                <a href="<?php echo $base_url ?>stranice/rezervacije.php?let=<?php echo $_GET["let"].'&azuriranje='.$row['id_rezervacije']?>">
                                                   Azuriranje
                                                </a>
                                             </button>
                                       <?php
                                    }
                                 ?>
                              </td>
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
         </div>
      </div>
   </body>
</html>