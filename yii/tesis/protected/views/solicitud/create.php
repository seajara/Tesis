<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Crear Solicitud'=>array('index'),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);*/
?>

<h1>Crear Solicitud</h1>

<?php $this->renderPartial('form_create', array('model'=>$model)); ?>