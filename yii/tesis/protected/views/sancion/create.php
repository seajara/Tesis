<?php
/* @var $this SancionController */
/* @var $model Sancion */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Sanciones'=>array('index'),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Sancion', 'url'=>array('index')),
	array('label'=>'Manage Sancion', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Sancion</h1>

<?php 

$this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); 
?>