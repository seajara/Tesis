<?php
/* @var $this SolicitudrecibidasController */
/* @var $model Solicitudrecibidas */

$this->breadcrumbs=array(
	'Crear Solicitud'=>array('index'),
	'Crear',
);

?>


<h1>Crear Solicitud</h1>

<?php $this->renderPartial('formulario_crear', array('model'=>$model)); ?>