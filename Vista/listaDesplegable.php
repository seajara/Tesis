<?php

	

?>




<form name="formulario_select">
	<select name="id_select" id="id_select" onchange="javascript:cargarListaSegunSeleccion(this.value, <?php echo $limit.",".$offset ?>);" style="float: right;">
				<option value="0">Ordenar por...</option>
				<option value="1">Nombre</option>
				<option value="2">Apellido</option>
				<option value="3">Rut</option>
				<option value="4">Direccion</option>
				<option value="5">Ciudad</option>
			
        </select>
</form>