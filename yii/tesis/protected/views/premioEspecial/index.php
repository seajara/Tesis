<?php
/* @var $this PremioEspecialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Premio Especials',
);

$this->menu=array(
	array('label'=>'Create PremioEspecial', 'url'=>array('create')),
	array('label'=>'Manage PremioEspecial', 'url'=>array('admin')),
);
?>

<h1>Premio Especials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
