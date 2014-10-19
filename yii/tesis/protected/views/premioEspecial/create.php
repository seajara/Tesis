<?php
/* @var $this PremioEspecialController */
/* @var $model PremioEspecial */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'PremioEspecial'=>array('index'),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List PremioEspecial', 'url'=>array('index')),
	array('label'=>'Manage PremioEspecial', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Premio Especial</h1>

<?php 

$this->renderPartial('form_create', array('model'=>$model, 'id_hoja'=>$id_hoja)); 
?>