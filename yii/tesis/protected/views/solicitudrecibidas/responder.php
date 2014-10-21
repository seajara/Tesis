<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitud Enviada'=>array('index'),
	$model->id_solicitud=>array('view','id'=>$model->id_solicitud),
	'Responder Solicitud',
);

?>

<h1> Responder Solicitud  </h1>

<?php $this->renderPartial('formulario_responder', array('model'=>$model)); ?>