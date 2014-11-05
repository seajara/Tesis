<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Agregar Categoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>