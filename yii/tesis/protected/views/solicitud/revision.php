<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitudes Recibidas'=>array('index'),
	//$model->id_solicitud=>array('view','id'=>$model->id_solicitud),
	'Responder Solicitud',
);

?>

<h1> Responder Solicitud  </h1>

<?php $this->renderPartial('form_revision', array('model'=>$model)); ?>