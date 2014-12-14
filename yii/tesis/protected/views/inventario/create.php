<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Buscar Elemento', 'url'=>array('admin')),
);
?>

<h1>Agregar Inventario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>