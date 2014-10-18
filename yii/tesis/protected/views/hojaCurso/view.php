<?php
/* @var $this HojaCursoController */
/* @var $model HojaCurso */

$this->breadcrumbs=array(
	'Hoja Cursos'=>array('index'),
	$model->id_hoja_curso,
);

$this->menu=array(
	array('label'=>'List HojaCurso', 'url'=>array('index')),
	array('label'=>'Create HojaCurso', 'url'=>array('create')),
	array('label'=>'Update HojaCurso', 'url'=>array('update', 'id'=>$model->id_hoja_curso)),
	array('label'=>'Delete HojaCurso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hoja_curso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HojaCurso', 'url'=>array('admin')),
);
?>

<h1>View HojaCurso #<?php echo $model->id_hoja_curso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hoja_curso',
		'id_hoja',
		'id_curso',
	),
)); ?>
