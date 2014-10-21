<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inventario', 'url'=>array('index')),
	array('label'=>'Manage Inventario', 'url'=>array('admin')),
);
?>

<h1>Create Inventario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>