<?php
/* @var $this HojaPremioController */
/* @var $model HojaPremio */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Hoja Premios'=>array('index'),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List HojaPremio', 'url'=>array('index')),
	array('label'=>'Manage HojaPremio', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Premio</h1>

<?php $this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); ?>