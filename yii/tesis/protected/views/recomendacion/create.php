<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Recomendaciones'=>array('index'),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Recomendacion', 'url'=>array('index')),
	array('label'=>'Manage Recomendacion', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Recomendacion</h1>

<?php 

$this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); 
?>