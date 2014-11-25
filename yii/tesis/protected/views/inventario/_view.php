<?php
/* @var $this InventarioController */
/* @var $data Inventario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inventario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_inventario), array('view', 'id'=>$data->id_inventario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_subcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idSubcategoria->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_in')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />
        <br />
	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_compania')); ?>:</b>
	<?php echo CHtml::encode($data->id_compania); ?>
	<br />
          
        <b><?php echo CHtml::encode($data->getAttributeLabel('proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>