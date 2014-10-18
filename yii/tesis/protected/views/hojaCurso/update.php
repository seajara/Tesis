<?php
/* @var $this HojaCursoController */
/* @var $model HojaCurso */

$this->breadcrumbs=array(
	'Hoja Cursos'=>array('index'),
	$model->id_hoja_curso=>array('view','id'=>$model->id_hoja_curso),
	'Update',
);

$this->menu=array(
	array('label'=>'List HojaCurso', 'url'=>array('index')),
	array('label'=>'Create HojaCurso', 'url'=>array('create')),
	array('label'=>'View HojaCurso', 'url'=>array('view', 'id'=>$model->id_hoja_curso)),
	array('label'=>'Manage HojaCurso', 'url'=>array('admin')),
);
?>

<h1>Update HojaCurso <?php echo $model->id_hoja_curso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>