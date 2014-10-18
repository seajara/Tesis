<?php
/* @var $this HojaPremioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoja Premios',
);

$this->menu=array(
	array('label'=>'Create HojaPremio', 'url'=>array('create')),
	array('label'=>'Manage HojaPremio', 'url'=>array('admin')),
);
?>

<h1>Hoja Premios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
