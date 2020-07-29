<?php 
session_start();

echo "el codigo que se genero es ";
 echo "<br>";
foreach( $_SESSION['sesion_'] as $val){
   echo $val."<input type=.".$val." name=".$val.">";
   echo "<br>";
   echo "<br>";

	
}

 echo "<br>";
echo "los datos de los procesos son";

 echo "<br>";
foreach( $_SESSION['dos'] as $vale){

   echo  $vale;
   echo "<br>";
   echo "<br>";

	
}

echo "nombre del formulario es ".$_SESSION['nom'];



 ?>