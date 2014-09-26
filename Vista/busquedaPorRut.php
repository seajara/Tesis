<?php

	include_once ('../Logica/Controlador.php');
	
	$rut = $_GET['rut'];
	
	
	$instancia = Controlador::getInstancia();
	
	
	
	$existe = $instancia->existePersona($rut);
	
	
	if($existe){
		$persona = $instancia->obtenerPersonaPorRut($rut);
		while($fila = mysql_fetch_array($persona)){
			$rut = $fila['rut'];
			$nombre = $fila['nombre'];
			$apellido = $fila['apellido'];
			$direccion = $fila['direccion'];
			$ciudad = $fila['ciudad'];
		}
		?>
		<form name="form2" method="POST" action="recibeModificar.php">
			<fieldset >
			<legend><h4> Info Cliente </h4></legend>
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
							<?php
								
								$numero_rut = substr($rut,0,-2);
								$milesima_parte_numero_rut = substr($numero_rut,-3);
								$centesima_parte_numero_rut = substr($numero_rut,-7,-4);
								$millonesima_parte_numero_rut = substr($numero_rut,0,-8);
								$digito = substr($rut,-1)
							
							?>
							<input name="btnGuardar" type="button" value="Borrar" onclick="javascript: recibeEliminar(<?php echo $millonesima_parte_numero_rut.",".$centesima_parte_numero_rut.",".$milesima_parte_numero_rut.",".$digito;?>)">
						</td>
						<td>
							<input name="btnGuardar" type="button" value="Modificar" onclick="validacionModificar()">
						</td>
					</tr>
				</table>
				</fieldset>
			</form>
		
		<?php
	}else{
		$digito = substr($rut,-1);
		$numero_rut = substr($rut,0,-2);
		$milesima_parte_numero_rut = substr($numero_rut,-3);
		
		$centesima_parte_numero_rut = substr($numero_rut,-7,-4);
		$millonesima_parte_numero_rut = substr($numero_rut,0,-8);
		
		echo "
			<script>
				alert('No se encuentra registrada la persona con rut '+$millonesima_parte_numero_rut+'.'+$centesima_parte_numero_rut+'.'+$milesima_parte_numero_rut+'-'+$digito);
			</script>";
	}
	
	
	
?>


				
			
		
		