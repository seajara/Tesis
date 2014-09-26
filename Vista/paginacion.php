<?php
								
								if(isset($_GET['pag'])){
									$pag = $_GET['pag'];
								}else{
									$pag = 1;
								}
								
								echo "Número Página: ".$pag;
								
								
								include_once ('../Logica/Controlador.php');
								
								$instancia = Controlador::getInstancia();
								
								$limit = 10;
								$offset = ($pag-1) * $limit;
								
								session_start();
								if(!isset($_SESSION['select'])){
									$seleccion  = null;
								}else{
								
									$seleccion = $_SESSION['select'];
								}
								
								
								$listado = $instancia->listarPersonasPorSeleccion($seleccion, $limit, $offset);
								
								$cantidad_resultados = $instancia->listarPersonas();
								$total = mysql_num_rows($cantidad_resultados);


							   $totalPag = ceil($total/$limit);
                                
                                if($totalPag>1){
									for( $i=1; $i<=$totalPag ; $i++){
                                        print( "<a id='btn_paginacion' onClick='javascript:cargarPaginacion(".$i.",".$limit.",".$offset.");' >$i</a>");
                                    }
                             	 
                                  
                                 
                                }
								
                                
?>