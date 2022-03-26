<?php
	//Coneccion
	$mysqli = new MYSQLI('localhost','root','','base_usuarios');
	
	//Agregar
	if(isset($_POST['cmdguardar']))
	{
		$sql = "INSERT INTO usuarios VALUES ('".$_POST['usuario']."','".$_POST['clave']."')"; 
		$agregar = $mysqli->query($sql);	
			
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Clientes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloformulario4.css">
	</head>
<body>
	<div id="contenedor">
		<header><h1>Registro de Clientes</h1></header>
		<form name="form1" id="form" method="post" action="index.php"">
			<div>
				<label for="usuario" class="label">USUARIO: </label>
				<input type="text" size="30" name="usuario" id="usuario"/>
			</div>

			<div>
				<label for="clave" class="label">CLAVE: </label>
				<input type="password" size="30" name="clave" id="clave">
			</div>

			 <div class="centro">
          <input type="submit" name="cmdguardar" id="cmdguardar" value="Enviar" />
            </div>
			
		</form>
		<?php
		$mi web="<a href=\"/registro.php">http://www.miweb.es</a>";
		?>
</div>
</body>
</html>