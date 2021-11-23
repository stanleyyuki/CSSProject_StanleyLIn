<?php

$username =  $_POST["username"];

$email = $_POST["email"];
$pw = $_POST["passw"];
$job = $_POST["jobs"];
$male = $_POST["male"];
$female = $_POST["female"];
$term = $_POST["terms"];


echo "Username: ".$username.'<br>'. "Email: ".$email. '<br>'. "Password: ".$pw. '<br>'. "Job: ".$job. '<br>';
if (isset($_POST['radio']))   
  echo "Gender: ".$_POST['radio'].'<br>';   

if (isset($_POST['terms']))   
  echo "Terms Agreed: ".$_POST['terms']; 
 