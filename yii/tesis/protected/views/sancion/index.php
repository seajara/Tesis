<?php
/* @var $this SancionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sanciones',
);

$this->menu=array(
	array('label'=>'Crear Sancion', 'url'=>array('create')),
	array('label'=>'Administar Sanciones', 'url'=>array('admin')),
);
?>

<h1>Sanciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
