<?php

$username =  $_GET["username"];

$email = $_GET["email"];
$pw = $_GET["passw"];
$job = $_GET["jobs"];
$male = $_GET["male"];
$female = $_GET["female"];
$term = $_GET["terms"];


echo "Username: ".$username.'<br>'. "Email: ".$email. '<br>'. "Password: ".$pw. '<br>'. "Job: ".$job. '<br>';
if (isset($_GET['radio']))   
  echo "Gender: ".$_GET['radio'].'<br>';   

if (isset($_GET['terms']))   
  echo "Terms Agreed: ".$_GET['terms']; 


  