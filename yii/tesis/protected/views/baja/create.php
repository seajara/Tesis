<?php
/* @var $this BajaController */
/* @var $model Baja */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Bajas'=>array('index'),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Baja', 'url'=>array('index')),
	array('label'=>'Manage Baja', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Baja</h1>

<?php $this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); ?>