<?php
/* @var $this PremioController */
/* @var $model Premio */

$this->breadcrumbs=array(
	'Premios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Premio', 'url'=>array('index')),
	array('label'=>'Manage Premio', 'url'=>array('admin')),
);
?>

<h1>Agregar Premio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>