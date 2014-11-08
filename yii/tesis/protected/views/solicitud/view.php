<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitud Enviada'=>array('index'),
	$model->id_solicitud,
);

$this->menu=array(
	array('label'=>'Buscar  Solicitud', 'url'=>array('admin')),
	array('label'=>'Imprimir', 'url'=>array('index')),

);
?>

<h1>Solicitud</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_solicitud',
		'id_compania',
		'id_comuna',
                'id_usuario',
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
		'fecha_nac',
		'estado_civil',
		'profesion',
		'direccion',
		'trabajo',
		'calidad',
		'patrocinador',
		'rut_pat',
		'estado',
	),
)); ?>
