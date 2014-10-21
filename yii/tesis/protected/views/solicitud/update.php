<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Crear Solicitud'=>array('index'),
	$model->id_solicitud=>array('view','id'=>$model->id_solicitud),
	'Modificar Solicitud',
);

/*$this->menu=array(
	array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Create Solicitud', 'url'=>array('create')),
	array('label'=>'View Solicitud', 'url'=>array('view', 'id'=>$model->id_solicitud)),
	array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);*/
?>

<h1> Modificar Solicitud  </h1>

<?php $this->renderPartial('form_create', array('model'=>$model)); ?>