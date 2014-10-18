<?php
/* @var $this HojaCargoController */
/* @var $model HojaCargo */

$this->breadcrumbs=array(
	'Hoja Cargos'=>array('index'),
	$model->id_hoja_cargo,
);

$this->menu=array(
	array('label'=>'List HojaCargo', 'url'=>array('index')),
	array('label'=>'Create HojaCargo', 'url'=>array('create')),
	array('label'=>'Update HojaCargo', 'url'=>array('update', 'id'=>$model->id_hoja_cargo)),
	array('label'=>'Delete HojaCargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hoja_cargo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HojaCargo', 'url'=>array('admin')),
);
?>

<h1>View HojaCargo #<?php echo $model->id_hoja_cargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hoja_cargo',
		'id_hoja',
		'id_cargo',
		'fecha_ini',
		'fecha_fin',
	),
)); ?>
