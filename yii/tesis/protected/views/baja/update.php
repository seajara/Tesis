<?php
/* @var $this BajaController */
/* @var $model Baja */

$this->breadcrumbs=array(
	//'Bajas'=>array('index'),
	//$model->id_baja=>array('view','id'=>$model->id_baja),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List Baja', 'url'=>array('index')),
	array('label'=>'Create Baja', 'url'=>array('create')),
	array('label'=>'View Baja', 'url'=>array('view', 'id'=>$model->id_baja)),
	array('label'=>'Manage Baja', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Baja <?php //echo $model->id_baja; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>