<?php 
require_once '../php/env.php';
session_start();
session_destroy();
header("Location:".$base_url."stranice/stranica.php");

?>