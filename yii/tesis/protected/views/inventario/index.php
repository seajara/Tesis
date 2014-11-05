<?php
/* @var $this InventarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventarios',
);

$this->menu=array(
	array('label'=>'Agregar Elemento', 'url'=>array('create')),
	array('label'=>'Buscar Elemento', 'url'=>array('admin')),
);
?>

<h1>Inventarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

 