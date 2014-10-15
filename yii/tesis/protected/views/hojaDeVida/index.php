<?php
/* @var $this HojaDeVidaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hojas De Vida',
);

$this->menu=array(
	array('label'=>'Crear Nueva Hoja de Vida', 'url'=>array('create')),
	array('label'=>'Administrar Hojas de Vida', 'url'=>array('admin')),
);
?>

<h1>Hojas de Vida</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
