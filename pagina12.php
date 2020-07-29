<!DOCTYPE html>
<html>

<head>
	<title>Proyecto_Final</title>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<style>
		.for {
			width: 400px;
			float: left;
			margin: 25px;
		}

		.proc {
			width: 200px;
			float: left;
			margin: 1px;
		}

		.segunda {
			width: 600px;
			height: 400px;
			border: 2px solid black;
			float: left;
		}

		.base {
			width: 400px;
			float: left;
			margin: 25px;
			height: 300px;
		}

		.guardar {
			padding-top: 450px;
			padding-left: 700px;
		}
	</style>

	<script>
		var cont = 0;
		$(document).ready(function() {

			$(".base select").accordion();
			$(".proc").accordion();
			$(".for").accordion();
			$(".ul li").draggable({
				helper: "clone"
			});
           var textohtml= new Array();
 	      $("select").on('change',function(){
           
          

          textohtml.push(this.value);
          console.log(textohtml);
          });
          $("#get").click(function() {
				var nombre = $("#f").val();

				var env = {
					nom: nombre
				};

				$.get('cambio.php', env, function(data) {
					$("#cam").text(data);

				})
			});

			var array = new Array();
			$(".segunda").droppable({
				drop: function(event, ui) {

					var id = ($(ui.draggable).attr("id"));

					console.log('var id:');
					console.log(id);

					array.push(id);

					$("#items").append($("<li></li>").text(ui, draggable.text()));
				}
			});

			$("#enviar").click(function() {
				var nom =$("#cam").text();
				
				var par = JSON.stringify(array);
				var elem=JSON.stringify( textohtml);
				$.ajax({
					url: "process.php",
					method: "POST",
					data: {
						id: par, el:elem,nom:nom
					},

					success: function(resp) {
						window.location.href='ver.php'
						console.log('resp:');
						console.log(resp);
					}
				});
			});
		});
	</script>


</head>

<body>
	<form method="GET">
		<h1 align="center" id="cam" name="cam"></h1>
		<div class="for">
			<h3>Inputs</h3>
			<ul class="ul">
				<li id="usuario"> Usuario: <input type="text" name="usuario"></li>
				<br>
				<li id="Contraseña">Contraseña<input type="password" name="clave"></li>
				<br>
				<li id="nombre">Nombres: <input type="text" name="nombres"></li>
				<br>
				<li id="apellido">Apellidos :<input type="text" name="apellido"></li>
				<br>
				<li id="Departamento">Departamento<input type="text" name="ddep"></li>
				<br>
				<li id="correo"> Correo <input type="text" name="correo"></li>
				<br>

			</ul>
		</div>
	</form>

	<div class="segunda">
		<h2> </h2>
		<ol id="items">


		</ol>
	</div>

	<div class="proc">
		<h3>flujos</h3>
		<select>
			<option>flujo1</option>
			<option>flujo2</option>
		</select>


		<h3>procesos</h3>
		<select>
			<option>proceso1</option>
			<option>proceso2</option>
			<option>proceso3</option>
			<option>proceso4</option>
		</select>

		<h3>tipos</h3>
		<select>
			<option>Inicio</option>
			<option>Proceso</option>
			<option>Pregunta</option>
		</select>
		<h3>nombre del formulario</h3>

		<ul>
			<input id="f" type="text" name="nombre" placeholder="nombredelformulario">
			<button id="get">cambiar</button>
		</ul>

	</div>

	<div class="guardar">
		<input id="enviar" type="submit" name="guardar" value=".Guardar" style='width:100px; height:55px; border-radius: 3px;color: blue' />
	</div>

</body>

</html>