<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#curso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cursos</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'curso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_curso',
		//'id_prerequisito',
		'nombre',
		'descripcion',
                /*array(
                    'name'=>'id_prerequisito',
                    'header'=>'Prerequisito',
                    //'value'=>'Curso::getPrerequisito($data->id_curso)',
                    //'value'=>'$data->descripcion',
                ),*/
		//'estado',
		array(
			'class'=>'CButtonColumn',
                        'header'=>'Acciones',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
