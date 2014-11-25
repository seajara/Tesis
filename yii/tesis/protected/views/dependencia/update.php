<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->id_dependencia=>array('view','id'=>$model->id_dependencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dependencia', 'url'=>array('index')),
	array('label'=>'Create Dependencia', 'url'=>array('create')),
	array('label'=>'View Dependencia', 'url'=>array('view', 'id'=>$model->id_dependencia)),
	array('label'=>'Manage Dependencia', 'url'=>array('admin')),
);
?>

<h1>Modificar Dependencia <?php //echo $model->id_dependencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>