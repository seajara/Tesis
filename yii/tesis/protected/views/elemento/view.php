<?php
/* @var $this ElementoController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	$model->id_elemento,
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Update Elemento', 'url'=>array('update', 'id'=>$model->id_elemento)),
	array('label'=>'Delete Elemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_elemento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1>View Elemento #<?php echo $model->id_elemento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_elemento',
		'id_inventario',
		'id_dependencia',
		'fecha_in',
		'estado',
	),
)); ?>
