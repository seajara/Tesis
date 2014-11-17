<?php
/* @var $this CompaniaController */
/* @var $model Compania */

$this->breadcrumbs=array(
	'Companias'=>array('index'),
	$model->id_compania=>array('view','id'=>$model->id_compania),
	'Update',
);

$this->menu=array(
	array('label'=>'List Compania', 'url'=>array('index')),
	array('label'=>'Create Compania', 'url'=>array('create')),
	array('label'=>'View Compania', 'url'=>array('view', 'id'=>$model->id_compania)),
	array('label'=>'Manage Compania', 'url'=>array('admin')),
);
?>

<h1>Configuración de la Página</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>