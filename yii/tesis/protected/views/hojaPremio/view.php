<?php
/* @var $this HojaPremioController */
/* @var $model HojaPremio */

$this->breadcrumbs=array(
	'Hoja Premios'=>array('index'),
	$model->id_hoja_premio,
);

$this->menu=array(
	array('label'=>'List HojaPremio', 'url'=>array('index')),
	array('label'=>'Create HojaPremio', 'url'=>array('create')),
	array('label'=>'Update HojaPremio', 'url'=>array('update', 'id'=>$model->id_hoja_premio)),
	array('label'=>'Delete HojaPremio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hoja_premio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HojaPremio', 'url'=>array('admin')),
);
?>

<h1>View HojaPremio #<?php echo $model->id_hoja_premio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hoja_premio',
		'id_hoja',
		'id_premio',
		'fecha',
	),
)); ?>
