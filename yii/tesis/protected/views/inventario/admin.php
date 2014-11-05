<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Agregar Elemento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div id="data">
  
</div>
 
<?php /*$form=$this->beginWidget('CActiveForm', array(
	'id'=>'filtro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); */?>
<div class="row">
    <?php
        //echo CHtml::ajaxButton("Update data", CController::createUrl('inventario/UpdateAjax'), array('update' => '#data'));
    ?>
</div>

<h1>Inventario</h1>
<div class="row" style="text-align: right">
<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
    echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/pdf.png","PDF",array("title"=>"Exportar a PDF", "width"=>"50px")),array("pdf"),array('target'=>'_blank'));                
?>
<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
    echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/grafico.png","PDF",array("title"=>"Generar Gráficos", "width"=>"50px")),array("graficos"));                
?>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php  
        $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_inventario',
                /*array(
                    'name'=>'id_subcategoria',
                    'header'=>'Categoría',
                    'value'=>'Inventario::getCategoria($data->id_subcategoria)',
                    'filter'=>Inventario::getListCategoria(),
                ),*/
                array(
                    'name'=>'id_subcategoria',
                    'header'=>'Subcategoría',
                    'value'=>'Inventario::getSubcategoria($data->id_subcategoria)',
                    'filter'=>Inventario::getListSubcategoria(),
                ),
		//'id_subcategoria',
		//'id_compania',
		'descripcion',
		//'proveedor',
		'fecha_in',
		/*
		'responsable',
		'movil',
		'observaciones',
		
		*/
		'cantidad',
		//'estado',
                array(
                    'name'=>'estado',
                    'header'=>'Estado',
                    'value'=>'Inventario::getEstado($data->id_inventario)',
                    'filter'=>Inventario::getListEstado(),
                    
                ),
		array(
			'class'=>'CButtonColumn',
                    'header'=>'Acciones',
		),
	),
)); ?>

<?php
/*		
$this->widget('ext.highcharts.highcharts.HighchartsWidget', array(
    'scripts' => array(
        'modules/exporting',
        'themes/grid-light',
    ),
	
    'options' => array(
        'title' => array(
            'text' => 'Inventario',
        ),
        'xAxis' => array(
            'categories' => $actions
        ),
        'labels' => array(
            'items' => array(
                array(
                    'html' => 'Total Inventario',
                    'style' => array(
                        'left' => '50px',
                        'top' => '18px',
                        'color' => 'js:(Highcharts.theme && Highcharts.theme.textColor) || \'white\'',
                    ),
                ),
            ),
        ),			
		//Gragico de Barra
        'series' => array(
            array(
                'type' => 'column',
                'name' => $actions,
               'data' => $cantidad,
            ),
            array(
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
            ),
           //Grafico Circular
		   /*array(
                'type' => 'pie',
                'name' => 'Total Inventario',
                'data' => array(
                    array(
                        'name' => 'Jane',
                        'y' => 13,
                        'color' => 'js:Highcharts.getOptions().colors[0]', // Jane's color
                    ),
                    array(
                        'name' => 'John',
                        'y' => 23,
                        'color' => 'js:Highcharts.getOptions().colors[1]', // John's color
                    ),
                    array(
                        'name' => 'Joe',
                        'y' => 19,
                        'color' => 'js:Highcharts.getOptions().colors[2]', // Joe's color
                    ),
                ),
                'center' => array(100, 80),
                'size' => 100,
                'showInLegend' => false,
                'dataLabels' => array(
                    'enabled' => false,
                ),
            ),
        ),
    )
));*/

?>