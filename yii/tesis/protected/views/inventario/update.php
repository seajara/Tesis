<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	$model->id_inventario=>array('view','id'=>$model->id_inventario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inventario', 'url'=>array('index')),
	array('label'=>'Create Inventario', 'url'=>array('create')),
	array('label'=>'View Inventario', 'url'=>array('view', 'id'=>$model->id_inventario)),
	array('label'=>'Manage Inventario', 'url'=>array('admin')),
);
?>

<h1>Update Inventario <?php echo $model->id_inventario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>