<?php
/* @var $this HojaDeVidaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoja De Vidas',
);

$this->menu=array(
	array('label'=>'Create HojaDeVida', 'url'=>array('create')),
	array('label'=>'Manage HojaDeVida', 'url'=>array('admin')),
);
?>

<h1>Hoja De Vidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
