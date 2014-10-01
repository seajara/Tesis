<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vidas'=>array('index'),
	$model->id_hoja=>array('view','id'=>$model->id_hoja),
	'Update',
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Crear Hoja de Vida', 'url'=>array('create')),
	array('label'=>'Ver Hoja de Vida', 'url'=>array('view', 'id'=>$model->id_hoja)),
	array('label'=>'Administrar Hoja de Vida', 'url'=>array('admin')),
);
?>

<h1>Modificar Hoja de Vida <?php //echo $model->id_hoja; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>