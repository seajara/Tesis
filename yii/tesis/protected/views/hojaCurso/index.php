<?php
/* @var $this HojaCursoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoja Cursos',
);

$this->menu=array(
	array('label'=>'Create HojaCurso', 'url'=>array('create')),
	array('label'=>'Manage HojaCurso', 'url'=>array('admin')),
);
?>

<h1>Hoja Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
