<?php
/* @var $this SancionController */
/* @var $model Sancion */

$this->breadcrumbs=array(
	'Sanciones'=>array('index'),
	$model->id_sancion,
);

$this->menu=array(
	//array('label'=>'List Sancion', 'url'=>array('index')),
	array('label'=>'Crear Sancion', 'url'=>array('create')),
	array('label'=>'Modificar Sancion', 'url'=>array('update', 'id'=>$model->id_sancion)),
	array('label'=>'Eliminar Sancion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sancion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sanciones', 'url'=>array('admin')),
);
?>

<h1>Sancion #<?php echo $model->id_sancion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sancion',
		'id_hoja',
		'fecha',
		'procede',
		'sinopsis',
	),
)); ?>
