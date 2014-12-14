<?php
/* @var $this ElementoController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#elemento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>
    <?php $inventario = Inventario::model()->findByPk($id_inventario);
        echo $inventario->nombre;
    ?>
</h1>

<div class="span-5">
    <?php 
        echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/busquedaavanzada.png","PDF",array('class'=>'search-button',"title"=>"Búsqueda Avanzada", "width"=>"50px")),array("pdf"),array('target'=>'_blank'));
        echo CHtml::button('Agregar Elemento', array('submit' => array('elemento/create/'.$id_inventario)));
    ?>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'elemento-grid',
	'dataProvider'=>$model->search($id_inventario),
	'filter'=>$model,
	'columns'=>array(
		//'id_elemento',
		//'id_inventario',
                'codigo_elemento',
		//'id_dependencia',
                array(
                    'name'=>'id_dependencia',
                    'header'=>'Dependencia',
                    'value'=>'Inventario::getDependencia($data->id_dependencia)',
                    'filter'=>CHtml::listData(Dependencia::model()->findAll(),'id_dependencia','nombre'),
                ),
		'fecha_in',
                'responsable',
		'estado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
