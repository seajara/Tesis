<?php
/* @var $this HojaPremioController */
/* @var $model HojaPremio */

$this->breadcrumbs=array(
	//'Hoja Premios'=>array('index'),
	//$model->id_hoja_premio=>array('view','id'=>$model->id_hoja_premio),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List HojaPremio', 'url'=>array('index')),
	array('label'=>'Create HojaPremio', 'url'=>array('create')),
	array('label'=>'View HojaPremio', 'url'=>array('view', 'id'=>$model->id_hoja_premio)),
	array('label'=>'Manage HojaPremio', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Premio <?php //echo $model->id_hoja_premio; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>