<?php
/* @var $this BajaController */
/* @var $model Baja */

$this->breadcrumbs=array(
	'Bajas'=>array('index'),
	$model->id_baja,
);

$this->menu=array(
	array('label'=>'List Baja', 'url'=>array('index')),
	array('label'=>'Create Baja', 'url'=>array('create')),
	array('label'=>'Update Baja', 'url'=>array('update', 'id'=>$model->id_baja)),
	array('label'=>'Delete Baja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_baja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Baja', 'url'=>array('admin')),
);
?>

<h1>View Baja #<?php echo $model->id_baja; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_baja',
		'id_hoja',
		'fecha',
		'procede',
		'sinopsis',
	),
)); ?>
