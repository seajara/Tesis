<?php
/* @var $this SancionController */
/* @var $model Sancion */

$this->breadcrumbs=array(
	//'Sanciones'=>array('index'),
	//$model->id_sancion=>array('view','id'=>$model->id_sancion),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List Sancion', 'url'=>array('index')),
	array('label'=>'Crear Sancion', 'url'=>array('create')),
	array('label'=>'Ver Sancion', 'url'=>array('view', 'id'=>$model->id_sancion)),
	array('label'=>'Administrar Sanciones', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Sancion <?php //echo $model->id_sancion; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>