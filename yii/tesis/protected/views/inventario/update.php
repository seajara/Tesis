<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	$model->id_inventario=>array('view','id'=>$model->id_inventario),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Agregar Elemento', 'url'=>array('create')),
	array('label'=>'Ver Elemento', 'url'=>array('view', 'id'=>$model->id_inventario)),
	array('label'=>'Buscar Elemento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Datos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>