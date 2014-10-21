<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Crear Solicitud'=>array('index'),
	'Buscar',
);
$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
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

<h1>Solicitud</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
echo Yii::app()->user->name;
$idCuenta = CuentaPostulante::model()->findByAttributes(array('email'=>Yii::app()->user->name))->id_cuenta_postulante;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'solicitud-grid',
	'dataProvider'=>$model->searchBy($idCuenta),

	'columns'=>array(
		//'id_solicitud',
		//'id_compania',
		//'id_comuna',
                //'id_cuenta_postulante',
		'rut',
		'nombre',
		'ap_paterno',
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
                            'template'=>'{view}{update}{delete}', // botones a mostrar
				
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Solicitud?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
		),
	),
)); ?>
