<?php
/* @var $this PremioController */
/* @var $model Premio */

$this->breadcrumbs=array(
	'Premios'=>array('index'),
	$model->id_premio,
);

$this->menu=array(
	array('label'=>'List Premio', 'url'=>array('index')),
	array('label'=>'Create Premio', 'url'=>array('create')),
	array('label'=>'Update Premio', 'url'=>array('update', 'id'=>$model->id_premio)),
	array('label'=>'Delete Premio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_premio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Premio', 'url'=>array('admin')),
);
?>

<h1>View Premio #<?php echo $model->id_premio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_premio',
		'descripcion',
	),
)); ?>
