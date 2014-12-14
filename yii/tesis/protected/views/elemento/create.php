<?php
/* @var $this ElementoController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1>Agregar <?php echo Inventario::model()->findByPk($id_inventario)->nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'id_inventario'=>$id_inventario)); ?>