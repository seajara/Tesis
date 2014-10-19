<?php
/* @var $this RecomendacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recomendacions',
);

$this->menu=array(
	array('label'=>'Create Recomendacion', 'url'=>array('create')),
	array('label'=>'Manage Recomendacion', 'url'=>array('admin')),
);
?>

<h1>Recomendacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
