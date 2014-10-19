<?php
/* @var $this PremioEspecialController */
/* @var $model PremioEspecial */

$this->breadcrumbs=array(
	'Premio Especials'=>array('index'),
	$model->id_premio_esp,
);

$this->menu=array(
	array('label'=>'List PremioEspecial', 'url'=>array('index')),
	array('label'=>'Create PremioEspecial', 'url'=>array('create')),
	array('label'=>'Update PremioEspecial', 'url'=>array('update', 'id'=>$model->id_premio_esp)),
	array('label'=>'Delete PremioEspecial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_premio_esp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PremioEspecial', 'url'=>array('admin')),
);
?>

<h1>View PremioEspecial #<?php echo $model->id_premio_esp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_premio_esp',
		'id_hoja',
		'clase',
		'procede',
		'fecha',
	),
)); ?>
