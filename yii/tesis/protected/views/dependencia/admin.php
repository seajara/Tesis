<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dependencia', 'url'=>array('index')),
	array('label'=>'Create Dependencia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dependencia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row" style="text-align: right">
<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
    //echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/pdf.png","PDF",array("title"=>"Generar Reporte", "width"=>"50px")),array("filtroPdfMovil"),array('target'=>'_blank'));                
?>
</div>
<h1>Administrar Dependencias</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dependencia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_dependencia',
		//'id_compania',
		'nombre',
		//'tipo',
                array(
                    'name'=>'tipo',
                    'filter'=>  CHtml::listData(Dependencia::model()->findAll(),'id_dependencia','tipo'),
                    'value'=>'($data->tipo==1) ? "Compañía":"Móvil";',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
