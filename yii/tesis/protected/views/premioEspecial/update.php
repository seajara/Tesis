<?php
/* @var $this PremioEspecialController */
/* @var $model PremioEspecial */

$this->breadcrumbs=array(
	//'PremioEspecial'=>array('index'),
	//$model->id_premio_esp=>array('view','id'=>$model->id_premio_esp),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$model->id_hoja),
	'Modificar',
);

/*$this->menu=array(
	array('label'=>'List Premio Especial', 'url'=>array('index')),
	array('label'=>'Crear Premio Especial', 'url'=>array('create')),
	array('label'=>'Ver Premio Especial', 'url'=>array('view', 'id'=>$model->id_premio_esp)),
	array('label'=>'Administrar Premios Especiales', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Premio Especial <?php //echo $model->id_premio_esp; ?></h1>

<?php $this->renderPartial('form_update', array('model'=>$model)); ?>