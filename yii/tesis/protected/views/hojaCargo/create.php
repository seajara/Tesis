<?php
/* @var $this HojaCargoController */
/* @var $model HojaCargo */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Hoja Cargos'=>array('index'),
	'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List HojaCargo', 'url'=>array('index')),
	array('label'=>'Manage HojaCargo', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Cargo</h1>

<?php $this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); ?>