<h1>Estadísticas</h1><br/>

<?php
	$subcategoria = Subcategoria::model()->findAll();
        $totales = array();
	$nombres = array(); 
	//$cantidad = array();
	$i=0;	
        //$totales[$i]=0;
	foreach($subcategoria as $datos){ //ciclo foreach para llenar el arreglo
            $inventarios = Inventario::model()->findAllByAttributes(array('id_subcategoria'=>$datos->id_subcategoria));
            $totales[$i]=0;
            foreach($inventarios as $item){
		$totales[$i]=$totales[$i]+(int)$item->cantidad;
            }
            $nombres[$i]=$datos->nombre;
            $i++;
	}
		
$this->widget('ext.highcharts.highcharts.HighchartsWidget', array(
    'scripts' => array(
        'modules/exporting',
        'themes/grid-light',
    ),
	
    'options' => array(
        'title' => array(
            'text' => 'Subcategorías',
        ),
        'xAxis' => array(
            'categories' => $nombres,
        ),
        'labels' => array(
            'items' => array(
                array(
                    'html' => 'Total Inventario',
                    'style' => array(
                        'left' => '50px',
                        //'top' => '5px',
                        'color' => 'js:(Highcharts.theme && Highcharts.theme.textColor) || \'white\'',
                    ),
                ),
            ),
        ),
		
			
		//Gragico de Barra
        'series' => array(
            array(
                'type' => 'column',
                'name' => $nombres,
               'data' => $totales,
            ),
            /*array(
                'type' => 'column',
                'name' => 'John',
                'data' => array(2, 3, 5, 7, 6),
            ),
            array(
                'type' => 'column',
                'name' => 'Joe',
                'data' => array(4, 3, 3, 9, 0),
            ),
			// Grafico de lineas
            array(
                'type' => 'spline',
                'name' => 'Average',
                'data' => array(3, 2.67, 3, 6.33, 3.33),
                'marker' => array(
                    'lineWidth' => 2,
                    'lineColor' => 'js:Highcharts.getOptions().colors[3]',
                    'fillColor' => 'white',
                ),
            ),*/
           
        ),
    )
));

?>

<?php
	$subcategoria = Subcategoria::model()->findAll();
        $totales = array();
	$nombres = array(); 
	//$cantidad = array();
	$i=0;	
        //$totales[$i]=0;
	foreach($subcategoria as $datos){ //ciclo foreach para llenar el arreglo
            $inventarios = Inventario::model()->findAllByAttributes(array('id_subcategoria'=>$datos->id_subcategoria));
            $totales[$i]=0;
            foreach($inventarios as $item){
                if($item->estado=='Baja')
                    $totales[$i]=$totales[$i]+(int)$item->cantidad;
            }
            $nombres[$i]=$datos->nombre;
            $i++;
	}
		
$this->widget('ext.highcharts.highcharts.HighchartsWidget', array(
    'scripts' => array(
        'modules/exporting',
        'themes/grid-light',
    ),
	
    'options' => array(
        'title' => array(
            'text' => 'Cantidad de Bajas',
        ),
        'xAxis' => array(
            'categories' => $nombres,
        ),
        'labels' => array(
            'items' => array(
                array(
                    'html' => 'Total Inventario',
                    'style' => array(
                        'left' => '50px',
                        //'top' => '5px',
                        'color' => 'js:(Highcharts.theme && Highcharts.theme.textColor) || \'white\'',
                    ),
                ),
            ),
        ),
		
			
		//Gragico de Barra
        'series' => array(
            array(
                'type' => 'column',
                'name' => $nombres,
               'data' => $totales,
            ),
            /*array(
                'type' => 'column',
                'name' => 'John',
                'data' => array(2, 3, 5, 7, 6),
            ),
            array(
                'type' => 'column',
                'name' => 'Joe',
                'data' => array(4, 3, 3, 9, 0),
            ),
			// Grafico de lineas
            array(
                'type' => 'spline',
                'name' => 'Average',
                'data' => array(3, 2.67, 3, 6.33, 3.33),
                'marker' => array(
                    'lineWidth' => 2,
                    'lineColor' => 'js:Highcharts.getOptions().colors[3]',
                    'fillColor' => 'white',
                ),
            ),*/
           
        ),
    )
));

?>