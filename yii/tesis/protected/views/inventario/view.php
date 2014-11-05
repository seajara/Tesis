<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	$model->id_inventario,
);

$this->menu=array(
	array('label'=>'Agregar Elemento', 'url'=>array('create')),
	array('label'=>'Modificar Elemento', 'url'=>array('update', 'id'=>$model->id_inventario)),
	array('label'=>'Eliminar Elemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inventario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Elemento', 'url'=>array('admin')),
);
?>

<h1>Ver Elemento</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_inventario',
		'id_subcategoria',
		'id_compania',
		'descripcion',
		'proveedor',
		'fecha_in',
		'responsable',
		'movil',
		'cantidad',
		'observaciones',
		'estado',
	),
)); ?>
