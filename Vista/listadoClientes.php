
<h4> Listado Clientes </h4>
<?php
	include_once ('../Logica/Controlador.php');
	include_once ('../Logica/Persona.php');
	
	$instancia = Controlador::getInstancia();
	
	
	if(!isset($_GET['pag'])){
		$pag = 1;
	}else{
		$pag = $_GET['pag'];
	}
	$limit = 2;
	$offset = ($pag-1) * $limit;

	
	if(!isset($_GET['seleccion'])){
		$seleccion = null;
	}else{
		$seleccion = $_GET['seleccion'];
		session_start();
		$_SESSION['select'] = $seleccion;
	}
	$listado = $instancia->listarPersonasPorSeleccion($seleccion, $limit, $offset);
	
	
	
?>
	
	<table width="100%" border="1" cellpadding="0" cellspacing="2" bordercolor="#000000" style="border-collapse:collapse;">
		<th>
			Rut
		</th>
		<th>
			Nombre
		</th>
		<th>
			Apellido
		</th>
		<th>
			Dirección
		</th>
		<th>
			Ciudad
		</th>
		<th id="accion">
			Acción
		</th>
		
		<?php
			$bandera = 0;
			
			while($fila = mysql_fetch_array($listado)){
			
			if($bandera%2 == 0)
				echo "<tr id='fila_listado' bgcolor='#CCFFB9'>";
			else
				echo "<tr id='fila_listado' bgcolor='#FFFFFF'>";
					echo "<td>";
						echo "".$fila['rut'];
					echo "</td>";
					echo "<td>";
						echo "".$fila['nombre'];
					echo "</td>";
					echo "<td>";
						echo "".$fila['apellido'];
					echo "</td>";
					echo "<td>";
						echo "".$fila['direccion'];
					echo "</td>";
					echo "<td>";
						echo "".$fila['ciudad'];
					echo "</td>";
					echo "<td bgcolor='#FFFFFF'>";
						
							echo "<a id='eliminar' href='recibeBorrar.php?rut=".$fila['rut']."' onclick='return confirm(\"Seguro que desea eliminar?\");' title='Eliminar'><img src='icon/delete.png'  ></a>";
							$rut = $fila['rut'];
							$numero_rut = substr($rut,0,-2);
							$milesima_parte_numero_rut = substr($numero_rut,-3);
							$centesima_parte_numero_rut = substr($numero_rut,-7,-4);
							$millonesima_parte_numero_rut = substr($numero_rut,0,-8);
							$digito = substr($rut,-1);
							if(is_numeric($digito)){
							
								echo "<a id='modificar' href='javascript:modificarCliente(".$millonesima_parte_numero_rut.",".$centesima_parte_numero_rut.",".$milesima_parte_numero_rut.",".$digito.");' title='Modificar'><img src='icon/edit.png' width='16px' ></a>";
							}else{
								$digito_k = -1;
								echo "<a id='modificar' href='javascript:modificarCliente(".$millonesima_parte_numero_rut.",".$centesima_parte_numero_rut.",".$milesima_parte_numero_rut.",".$digito_k.");' title='Modificar'><img src='icon/edit.png' width='16px' ></a>";
							
							}
								
					echo "</td>";
					
				echo "</tr>";
				
				$bandera++;
			}
		
		?>
	</table>
	<?php
								
								
								$listado = $instancia->listarPersonasPorSeleccion($seleccion, $limit, $offset);
								
								$cantidad_resultados = $instancia->listarPersonas();
								$total = mysql_num_rows($cantidad_resultados);
								
								$totalPag = ceil($total/$limit);
                                
                                if($totalPag>1){
									$siguiente = $pag + 1;
									if($pag > 1){
										$anterior = $pag - 1;
									}else{
										$anterior = $pag;
									}	
									$primera_pag = 1;
									for( $i = 1; $i <= $totalPag ; $i++){
									
										if($pag == 1){
											print( "<button onClick='javascript:cargarPaginacion(".$i.",".$limit.",".$offset.");' >$i</button>");
											if($i == $totalPag){
												print( "<button onClick='javascript:cargarPaginacion(".$siguiente.",".$limit.",".$offset.");' >></button>");
												print( "<button onClick='javascript:cargarPaginacion(".$totalPag.",".$limit.",".$offset.");' >>></button>");
											}
											
										}else{
											if($pag > 1 && $pag < $totalPag){
												if($i == 1){
													print( "<button onClick='javascript:cargarPaginacion(".$primera_pag.",".$limit.",".$offset.");' ><<</button>");
													print( "<button onClick='javascript:cargarPaginacion(".$anterior.",".$limit.",".$offset.");' ><</button>");
												
												}
												print( "<button onClick='javascript:cargarPaginacion(".$i.",".$limit.",".$offset.");' >$i</button>");
												if($i == $totalPag){
													print( "<button onClick='javascript:cargarPaginacion(".$siguiente.",".$limit.",".$offset.");' >></button>");
													print( "<button onClick='javascript:cargarPaginacion(".$totalPag.",".$limit.",".$offset.");' >>></button>");
												}
												
											}else{
												if($pag == $totalPag){
													
													if($i == 1){
														print( "<button onClick='javascript:cargarPaginacion(".$primera_pag.",".$limit.",".$offset.");' ><<</button>");
														print( "<button onClick='javascript:cargarPaginacion(".$anterior.",".$limit.",".$offset.");' ><</button>");
													
													}
													print( "<button onClick='javascript:cargarPaginacion(".$i.",".$limit.",".$offset.");' >$i</button>");
												}
												
												
												
												
											}
											
										
										}
										
										
										
												
										
                                    }
									echo "<p>Página seleccionada: ".$pag."</p>";
                             	}
								
                                
?>
