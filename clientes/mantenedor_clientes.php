<?php
	//Coneccion
	$mysqli = new MYSQLI('localhost','root','','baseclientes');
	
	//Agregar
	if(isset($_POST['cmdguardar']))
	{
		$sql = "INSERT INTO cliente VALUES ('".$_POST['txtrut']."','".$_POST['txtnom']."','".$_POST['txtdir']."','".$_POST['cbocom']."','".$_POST['opsex']."','".$_POST['txtfna']."','".$_POST['txtmov']."','".$_POST['txtema']."')"; 
		$agregar = $mysqli->query($sql);	
	}
	//eliminar
	// <!-- if(isset($_GET['id'])) -->
	// <!-- { -->
		// <!-- $sql = "delete from noticias where id = '".$_GET['id']."' "; -->
		// <!-- $eliminar = $mysqli->query($sql); -->
	// <!-- } -->

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Clientes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloformulario4.css">
	<script src="js/validacion.js"></script>
</head>
<body>
	<div id="contenedor">
		<header><h1>Registro de Clientes</h1></header>
		<form name="form1" id="form" method="get" action="mantenedor_clientes.php" enctype="multipart/form-data"">
			<div>
				<label for="txtrut" class="label">RUT: </label>
				<input type="text" size="30" name="txtrut" id="txtrut"/>
			</div>

			<div>
				<label for="txtnom" class="label">NOMBRE: </label>
				<input type="password" size="30" name="txtnom" id="txtnom">
			</div>

			<div>
				<label for="txtdir" class="label">DIRECCION: </label>
				<input type="password" size="30" name="txtdir" id="txtdir">
			</div>
			
			<div>
				<label for="cbocom" class="label">COMUNA: </label>
				<select name="cbocom" id="cbocom">
					<option>Seleccione comuna</option>
					<option value="1">Nacional</option>
					<option value="2">Internacional</option>
					<option value="3">Deporte</option>
				</select>
			</div>
		
			<div>
				<label class="label">SEXO: </label>
				<span>
					<input type="checkbox" value="m" name="opsex">
					<label for="">MASCULINO</label><br>
					<input type="checkbox" value="f" name="opsex">
					<label for="">FEMENINO</label>
				</span>
			</div>

		<div>
				<label for="txtfna" class="label">FECHA DE NACIMIENTO: </label>
				<input type="text" size="30" name="txtfna" id="txtfna">
			</div>

			<div>
				<label for="txtmov" class="label">MOVIL: </label>
				<input type="text" size="30" name="txtmov" id="txtmov">
			</div>

			<div>
				<label for="txtema" class="label">EMAIL: </label>
				<input type="text" size="4" name="txtema" id="txtema">
			</div>

			

			 <div class="centro">
          <input type="submit" name="cmdguardar" id="cmdguardar" value="Enviar" />
            </div>
			
		</form>
		
		
	<table border="1">
	  
	  <tr>
		<th>RUT</th>
		<th>NOMBRE</th>
		<th>DIRECCION</th>
		<th>COMUNA</th>
		<th>SEXO</th>
		<th>FECHA DE NACIMIENTO</th>
		<th>MOVIL</th>
		<th>EMAIL</th>
	  </tr>
		<?php
			$listar = $mysqli->query("select * from clientes");
			while($fila = $listar->fetch_array()){
		?>
	  <tr>
		<td><?php echo $fila['txtrut']; ?></td>
		<td><?php echo $fila['txtnom']; ?></td>
		<td><?php echo $fila['txtdir']; ?></td>
		<td><?php echo $fila['cbocom']; ?></td>
		<td><?php echo $fila['opsex']; ?></td>
		<td><?php echo $fila['txtfna']; ?></td>
		<td><?php echo $fila['txtmov']; ?></td>
		<td><?php echo $fila['txtema']; ?></td>
	  </tr>
		<?php }  ?>
	</table>
		
		
</body>
</html>