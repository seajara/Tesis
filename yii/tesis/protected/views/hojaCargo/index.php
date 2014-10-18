<?php
/* @var $this HojaCargoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoja Cargos',
);

$this->menu=array(
	array('label'=>'Create HojaCargo', 'url'=>array('create')),
	array('label'=>'Manage HojaCargo', 'url'=>array('admin')),
);
?>

<h1>Hoja Cargos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
