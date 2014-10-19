<?php
/* @var $this OtroController */
/* @var $model Otro */

$this->breadcrumbs=array(
	'Otros'=>array('index'),
	$model->id_otro,
);

$this->menu=array(
	array('label'=>'List Otro', 'url'=>array('index')),
	array('label'=>'Create Otro', 'url'=>array('create')),
	array('label'=>'Update Otro', 'url'=>array('update', 'id'=>$model->id_otro)),
	array('label'=>'Delete Otro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_otro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Otro', 'url'=>array('admin')),
);
?>

<h1>View Otro #<?php echo $model->id_otro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_otro',
		'id_hoja',
		'descripcion',
	),
)); ?>
