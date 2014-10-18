<?php
/* @var $this PremioController */
/* @var $data Premio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_premio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_premio), array('view', 'id'=>$data->id_premio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>