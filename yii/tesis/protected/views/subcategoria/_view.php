<?php
/* @var $this SubcategoriaController */
/* @var $data Subcategoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_subcategoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_subcategoria), array('view', 'id'=>$data->id_subcategoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>