<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	//'Solicitudes Recibidas'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Listar de Solicitudes', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#solicitudrecibidas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Solicitudes</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'solicitud-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fecha',
		//'id_compania',
		//'id_comuna',
                //'id_usuario',
		'rut',
		'nombre',
		'ap_paterno',
                'patrocinador',
		/*
		'ap_materno',
		'fecha_nac',
		'estado_civil',
		'profesion',
		'direccion',
		'trabajo',
		'calidad',
		'patrocinador',
		'rut_pat',
		*/
		'estado',
		
		array(
			'class'=>'CButtonColumn',
			 'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
							'updateButtonUrl'=>'Yii::app()->createUrl("solicitud/revision", array("id"=>$data->id_solicitud))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Solicitud?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    
		),
	),
)); ?>
