<!DOCTYPE html>
<html>
<head>
	<title>Proyecto_Final</title>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
  	.for{
  		width: 400px;
  		float: left;
  		margin: 25px;
  	}
.segunda{
		width: 700px;
		height: 500px;
		border: 2px solid black;
		float: left;
}
.base{
	width: 400px;
  		float: left;
  		margin: 25px;
  		height: 300px;
	}
	
  </style>

<script >
	
 $(document).ready(function(){
 	$(".base").accordion();
 
 	$(".for").accordion();
    $(".ul li").draggable({helper:"clone"});
   
    $(".segunda").droppable({drop:function(event,ui){


    	$("#items").append($("<li></li>").text(ui,draggable.text()));

    }});

 })

</script>

</head>
<body>

<h1 align="center">Formulario Arrastrable</h1>	
<div class="for">
	<h3>Inputs</h3>
	<ul class="ul">
		<li> Usuario: <input type="text" name="usuario" ></li>
		<br>
		<li>Contraseña<input type="password" name="clave"></li>
			<br>
		<li>Nombres: <input type="text" name="nombres" ></li>
			<br>
		<li>Apellidos :<input type="text" name="apellido"></li>
			<br>
		<li>Departamento<input type="text" name="ddep" ></li>
			<br>
		<li> Correo <input type="text" name="correo"></li>
		<br>
		 <li><input type="submit" name="enviar" value="Enviar"></li>
	</ul>
	

</div>

<div class="segunda">
	<h2> </h2>
<ol id="items">
	<form>
		
	</form>

</ol>
</div>




</body>
</html>