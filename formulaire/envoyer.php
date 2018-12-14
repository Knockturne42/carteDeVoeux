<?php
include "index.html";

$email = $_POST['email'];

$msg = 'Aformac vous souhaite de bonnes fetes http://sicca-area.com/Aformac-dev/carteDeVoeux/';

$from = "Dcl@Dcl.com";
 
$to = $email;
 
$subject = "Envoi formulaire";
 
$headers = "From:" . $from;
 
mail($to,$subject,$msg,$headers);
 
?>