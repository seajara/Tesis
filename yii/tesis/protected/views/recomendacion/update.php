<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */

$this->breadcrumbs=array(
	//'Recomendaciones'=>array('index'),
	//$model->id_recomendacion=>array('view','id'=>$model->id_recomendacion),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List Recomendacion', 'url'=>array('index')),
	array('label'=>'Crear Recomendacion', 'url'=>array('create')),
	array('label'=>'Ver Recomendacion', 'url'=>array('view', 'id'=>$model->id_recomendacion)),
	array('label'=>'Administrar Recomendaciones', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Recomendacion <?php //echo $model->id_recomendacion; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>