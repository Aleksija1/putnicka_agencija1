<?php
require_once '../php/env.php';
require_once("baza.php");

session_start();

$ime = $_REQUEST["ime"];
$prezime = $_REQUEST["prezime"];
$email = $_REQUEST["email"];
$broj_telefona = $_REQUEST["broj_telefona"];
$password = $_REQUEST["password"];

$query = $conn -> query ("SELECT * FROM putnici WHERE mejl = '$email'" );
$num = $query-> num_rows;

if ($num > 0) {
    die(header("Location: ../prijava/signin.php?error=1"));
}

$statement = $conn-> prepare("INSERT INTO putnici (ime, prezime, mejl, lozinka, broj_telefona) VALUES (?, ?, ?, ?, ?)" );

$statement -> bind_param('sssss', $ime, $prezime, $email, md5($password), $broj_telefona); 

if($statement-> execute()){
    header("Location:".$base_url."prijava/login.php?success=1");
}else{
    die('Error: ('.$conn->errno . ')' . $conn->error);
}

?>