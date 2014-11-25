<?php
/* @var $this DependenciaController */
/* @var $data Dependencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dependencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dependencia), array('view', 'id'=>$data->id_dependencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_compania')); ?>:</b>
	<?php echo CHtml::encode($data->id_compania); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>