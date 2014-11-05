<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vidas'=>array('admin'),
	//$model->id_hoja=>array('view','id'=>$model->id_hoja),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Crear Nueva Hoja de Vida', 'url'=>array('create')),
	array('label'=>'Ver Hoja de Vida', 'url'=>array('view', 'id'=>$model->id_hoja)),
	array('label'=>'Administrar Hojas de Vida', 'url'=>array('admin')),
);
?>

<!--<h1>Actualizar Hoja de Vida <?php //echo $model->id_hoja; ?></h1>-->

<?php $this->renderPartial('hojaDeVida', array('model'=>$model)); ?>