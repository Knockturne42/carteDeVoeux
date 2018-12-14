<?php


include "index.html";

$email = $_POST['email'];

$msg = 'test';

$from = "CarteDeVoeux@Dcl.com";
 
$to = $email;
 
$subject = "Envoi formulaire";
 
$headers = "From:" . $from;
 
mail($to,$subject,$msg,$headers);

 
?>