<?php
/* @var $this SolicitudrecibidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudes Recibidas',
);

$this->menu=array(
	array('label'=>'Buscar Solicitud', 'url'=>array('admin')),
);
?>

<h1>Lista de Solicitudes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
