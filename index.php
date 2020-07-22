<!DOCTYPE html>
<html>
<head>
	<title>Proyecto_Final</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    .base{
        width: 400px;
        margin: 25px;
        height: 300px;
        padding-top: 100px;
        padding-left: 500px;
        align: center;
        align-content: center;
    }
   .boton{
   	padding-left: 820px;
  
   	padding-bottom: 300px;
   

   }
</style>

<script>
 $(document).ready(function(){
 	$(".base").accordion();
 });
</script>
</head>

<body>
<div class="base">
	<h3>Base de datos</h3>
<?php 
   	$conexion= new mysqli("localhost","root", "");

    $sql="SHOW DATABASES";
    $query= $conexion->query($sql);
    echo "<form action='' method='GET' >";
    echo "<select name='basedatos'>";
	while ($fila = mysqli_fetch_array($query)) {
		
		echo "<option value=".$fila['0'].">".$fila['0']."</option>";
    	
	}
	echo "</select>";
	echo "<input  type='submit' value='enviar' name='enviar' />";
	echo"</form>";

session_start();
	if(!empty($_GET['basedatos'])){
		$bd=$_GET['basedatos'];
		
		$_SESSION['basedatos']=$bd;
	}
	echo 	$_SESSION['basedatos'];
   	?>


	<h3>TABLA</h3>
	<ul>
		<?php 
$conexio= mysqli_connect("localhost","root","");

$_SESSION['basedatos'];
$b=$_SESSION['basedatos'];


echo $b;
$sq="SHOW FULL TABLES FROM $b";

    $quer= mysqli_query($conexio,$sq);
    echo "<form action='' method='GET' >";
    echo "<select name='tablas'>";
	while ($fil = mysqli_fetch_array($quer)) {
		
		echo "<option value=".$fil['0'].">".$fil['0']."</option>";
    	
	}
	echo "</select>";
	echo "<input type='submit' value='enviar' />";
	echo"</form>";


	if(!empty($_GET['tablas'])){
		$ta=$_GET['tablas'];
		
		echo $ta;

	}

	   	?>
	</ul>
	<h3>CAMPO</h3>
	<ul></ul>
</div>

    <form action="principal2.php">
      <div class='boton'>  <input type='submit' value='Siguiente'  style='width:100px; height:55px; border-radius: 3px;color: blue' / >
    </form></div>

</body>
</html>