<?php
/* @var $this OtroController */
/* @var $model Otro */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Otros'=>array('index'),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Otro', 'url'=>array('index')),
	array('label'=>'Manage Otro', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Observacion</h1>

<?php $this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); ?>