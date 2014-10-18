<?php
/* @var $this HojaCargoController */
/* @var $model HojaCargo */

$this->breadcrumbs=array(
	//'Hoja Cargos'=>array('index'),
	//$model->id_hoja_cargo=>array('view','id'=>$model->id_hoja_cargo),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List HojaCargo', 'url'=>array('index')),
	array('label'=>'Create HojaCargo', 'url'=>array('create')),
	array('label'=>'View HojaCargo', 'url'=>array('view', 'id'=>$model->id_hoja_cargo)),
	array('label'=>'Manage HojaCargo', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Cargo <?php //echo $model->id_hoja_cargo; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>