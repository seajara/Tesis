<?php
/* @var $this OtroController */
/* @var $model Otro */

$this->breadcrumbs=array(
	//'Otros'=>array('index'),
	//$model->id_otro=>array('view','id'=>$model->id_otro),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List Otro', 'url'=>array('index')),
	array('label'=>'Create Otro', 'url'=>array('create')),
	array('label'=>'View Otro', 'url'=>array('view', 'id'=>$model->id_otro)),
	array('label'=>'Manage Otro', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Observacion <?php //echo $model->id_otro; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>