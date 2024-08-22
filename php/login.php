<?php
require_once '../php/env.php';
session_start();
if(isset($_POST["email"])&& isset($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sifrovana_lozinka=md5($password);  
    require_once("baza.php");
    $query = $conn->query("SELECT * FROM putnici WHERE mejl ='$email' AND lozinka='$sifrovana_lozinka'");

    if ($query -> num_rows == 1) {
        $data = $query->fetch_object();
    
        $_SESSION["ime"] = $data->ime;
    
        $_SESSION["prezime"] = $data->prezime;
    
        $_SESSION["email"] = $data->mejl;

        $_SESSION["id"] = $data->id_putnika;
    
        header("Location:".$base_url."stranice/stranica.php");
    
    }else{
        die(header("Location:".$base_url."prijava/login.php?error=1"));
    }

}
?>