<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vidas'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Administrar Hojas De Vida', 'url'=>array('admin')),
);
?>

<h1>Create HojaDeVida</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>