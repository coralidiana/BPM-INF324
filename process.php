<?php 

session_start();

$para=json_decode($_POST['id']);
$nom=$_POST["nom"];
$dos=json_decode($_POST['el']);

echo $nom;
$_SESSION['nom']=$nom;
foreach ($para as $key=>$val) {
echo $val;
 
$_SESSION['sesion_']=$para;
 }



foreach ($dos as $key=>$val) {
echo $val;
 
$_SESSION['dos']=$dos;
 }


 ?>