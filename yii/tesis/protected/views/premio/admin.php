<?php
/* @var $this PremioController */
/* @var $model Premio */

$this->breadcrumbs=array(
	'Premios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Premio', 'url'=>array('index')),
	array('label'=>'Create Premio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#premio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Premios</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'premio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_premio',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
