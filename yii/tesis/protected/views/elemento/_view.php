<?php
/* @var $this ElementoController */
/* @var $data Elemento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_elemento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_elemento), array('view', 'id'=>$data->id_elemento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inventario')); ?>:</b>
	<?php echo CHtml::encode($data->id_inventario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dependencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_dependencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_in')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>