<h1>Estadísticas</h1><br/>

<?php
	$dependencia = Dependencia::model()->findAll();
        $totales = array();
	$nombres = array(); 
	//$cantidad = array();
	$i=0;	
        //$totales[$i]=0;
	foreach($dependencia as $datos){ //ciclo foreach para llenar el arreglo
            $inventarios = Inventario::model()->findAllByAttributes(array('id_dependencia'=>$datos->id_dependencia));
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
            'text' => 'Dependencias',
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
                'name' => "Cantidad  por Dependencia",
               'data' => $totales,
            ),          
        ),
    )
));

?>

<?php
	$dependencia = Dependencia::model()->findAll();
        $totales = array();
	$nombres = array(); 
	//$cantidad = array();
	$i=0;	
        //$totales[$i]=0;
	foreach($dependencia as $datos){ //ciclo foreach para llenar el arreglo
            $elementos = Elemento::model()->findAllByAttributes(array('id_dependencia'=>$datos->id_dependencia));
            $totales[$i]=0;
            foreach($elementos as $item){
                if($item->estado=='Baja')
                    $totales[$i]=$totales[$i]+(int)$item->cantidad;
            }
            $nombres[$i]=$datos->idInventario->nombre;
            $i++;
	}
		
$this->widget('ext.highcharts.highcharts.HighchartsWidget', array(
    'scripts' => array(
        'modules/exporting',
        'themes/grid-light',
    ),
	
    'options' => array(
        'title' => array(
            'text' => 'Cantidad de Bajas por Dependencia',
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
                'name' => "Cantidad Total",
               'data' => $totales,
            ),          
        ),
    )
));

?>