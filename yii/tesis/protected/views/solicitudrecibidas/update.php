<?php
/* @var $this SolicitudrecibidasController */
/* @var $model Solicitudrecibidas */

$this->breadcrumbs=array(
	'Crear Solicitud'=>array('index'),
	$model->id_solicitud=>array('view','id'=>$model->id_solicitud),
	'Modificar Solicitud',
);

?>

<h1> Modificar Solicitud  </h1>

<?php $this->renderPartial('formulario_crear', array('model'=>$model)); ?>