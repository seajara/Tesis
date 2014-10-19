<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */

$this->breadcrumbs=array(
	'Recomendacions'=>array('index'),
	$model->id_recomendacion,
);

$this->menu=array(
	array('label'=>'List Recomendacion', 'url'=>array('index')),
	array('label'=>'Create Recomendacion', 'url'=>array('create')),
	array('label'=>'Update Recomendacion', 'url'=>array('update', 'id'=>$model->id_recomendacion)),
	array('label'=>'Delete Recomendacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_recomendacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recomendacion', 'url'=>array('admin')),
);
?>

<h1>View Recomendacion #<?php echo $model->id_recomendacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_recomendacion',
		'id_hoja',
		'fecha',
		'procede',
		'sinopsis',
	),
)); ?>
