<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vidas'=>array('index'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Administrar Hojas de Vida', 'url'=>array('admin')),
);
?>

<h1>Crear Hoja de Vida</h1>

<?php $this->renderPartial('form_create', array('model'=>$model)); ?>