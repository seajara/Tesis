<?php
/* @var $this SubcategoriaController */
/* @var $model Subcategoria */

$this->breadcrumbs=array(
	'Subcategorias'=>array('index'),
	$model->id_subcategoria=>array('view','id'=>$model->id_subcategoria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Subcategoria', 'url'=>array('index')),
	array('label'=>'Create Subcategoria', 'url'=>array('create')),
	array('label'=>'View Subcategoria', 'url'=>array('view', 'id'=>$model->id_subcategoria)),
	array('label'=>'Manage Subcategoria', 'url'=>array('admin')),
);
?>

<h1>Actualizar Subcategoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>