<?php
	include_once ('../Logica/Controlador.php');
	include_once ('../Logica/Persona.php');
	
	
	$rut = $_GET['rut'];
	
	$instancia = Controlador::getInstancia();
	
	$persona = $instancia->obtenerPersonaPorRut($rut);
	
	while($fila = mysql_fetch_array($persona)){
		$rut = $fila['rut'];
		$nombre = $fila['nombre'];
		$apellido = $fila['apellido'];
		$direccion = $fila['direccion'];
		$ciudad = $fila['ciudad'];
	}
?>

<form name="form1" method="POST" action="recibeModificar.php" >
			<fieldset >
				<legend><h4> Edición Cliente </h4></legend>
				<table>
				<tr>
					<td>
						Rut
					</td>
					<td>
						<input type="text" id="rut" name= "rut" value= <?php echo "".$rut;?> readonly>
					</td>
				</tr>
				<tr>
					<td>
						Nombre
					</td>
					<td>
						<input type="text"id="nombre" name= "nombre" value= <?php echo "".$nombre;?>>
					</td>
				</tr>
				<tr>
					<td>
						Apellido
					</td>
					<td>
						<input type="text" id="apellido" name= "apellido" 	value= <?php echo "".$apellido;?>>
					</td>
				</tr>
				<tr>
					<td>
						Dirección
					</td>
					<td>
						<input type="text" id="direccion" name= "direccion" 	value= "<?php echo $direccion;?>">
					</td>
				</tr>
				<tr>
					<td>
						Ciudad
					</td>
					<td>
						<input type="text" id="ciudad" name= "ciudad" 	value= <?php echo "".$ciudad;?>>
					</td>
				</tr>
				<tr>
					<td>
						 
					</td>
					<td>
						<input name="btnGuardar" type="button" value="Modificar" onclick="validacion()">
					</td>
					
				</tr>
				
			
			</table>
			</fieldset>
		</form>
		
	