<?php
/* @var $this ElementoController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	$model->id_elemento,
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Update Elemento', 'url'=>array('update', 'id'=>$model->id_elemento)),
	array('label'=>'Delete Elemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_elemento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->idInventario->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        /*'htmlOptions'=>array(
            'border'=>'1',
        ),*/
	'attributes'=>array(
		//'id_elemento',
		//'id_inventario',
                'codigo_elemento',
                array(
                    'name'=>'Nombre',
                    'value'=>$model->idInventario->nombre,
                ),
                array(
                    'name'=>'Descripci&oacuten',
                    'value'=>$model->idInventario->descripcion,
                ),
                array(
                    'name'=>'Proveedor',
                    'value'=>$model->idInventario->proveedor,
                ),
                array(
                    'name'=>'Categor&iacutea',
                    'value'=>$model->idInventario->idSubcategoria->idCategoria->nombre,
                ),
                /*array(               // related city displayed as a link
                    'label'=>'Inventario',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->idInventario->nombre),
                                         array('inventario/view','id'=>$model->idInventario->id_inventario)),
                ),*/
		//'id_dependencia',
                array(
                    'name'=>'Dependencia',
                    'value'=>Elemento::getDependencia($model->id_dependencia),
                ),
                'responsable',  
                'nro_serie',
		'fecha_in',
		'estado',
                'observaciones',
	),
)); ?>
<br/>
<div class="span-10">
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/barcodes/'.$model->codigo_elemento); ?>
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/barcodes/'.$model->codigo_elemento); ?>
</div>
