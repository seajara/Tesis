<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	$model->id_inventario,
);

$this->menu=array(
	array('label'=>'List Inventario', 'url'=>array('index')),
	array('label'=>'Create Inventario', 'url'=>array('create')),
	array('label'=>'Update Inventario', 'url'=>array('update', 'id'=>$model->id_inventario)),
	array('label'=>'Delete Inventario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inventario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inventario', 'url'=>array('admin')),
);
?>

<h1>View Inventario #<?php echo $model->id_inventario; ?></h1>

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
