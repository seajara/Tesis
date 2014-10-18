<?php
/* @var $this HojaCursoController */
/* @var $model HojaCurso */
$id_hoja=Yii::app()->getRequest()->getParam('id_hoja');
$this->breadcrumbs=array(
	//'Hoja Cursos'=>array('index'),
        'Hojas de Vida'=>array('hojaDeVida/update/'.$id_hoja),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List HojaCurso', 'url'=>array('index')),
	array('label'=>'Manage HojaCurso', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'id_hoja'=>$id_hoja)); ?>