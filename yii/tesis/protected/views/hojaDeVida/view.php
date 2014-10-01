<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vidas'=>array('index'),
	$model->id_hoja,
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Crear Hoja de vida', 'url'=>array('create')),
	array('label'=>'Modificar Hoja de vida', 'url'=>array('update', 'id'=>$model->id_hoja)),
	array('label'=>'Eliminar Hoja de vida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hoja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Hojas de vida', 'url'=>array('admin')),
);
?>

<!--<h1>Ver HojaDeVida <?php //echo $model->id_hoja; ?></h1>-->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hoja',
		'id_solicitud',
		'id_compania',
		'id_comuna',
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
		'direccion',
		'email',
		'estado_civil',
		'profesion',
		'g_sanguineo',
		's_militar',
		'fono_fijo',
		'celular',
		'patrocinador',
		'fecha_in',
		'fecha_r_in',
	),
)); ?>
