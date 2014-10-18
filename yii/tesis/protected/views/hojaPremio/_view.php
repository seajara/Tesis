<?php
/* @var $this HojaPremioController */
/* @var $data HojaPremio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja_premio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hoja_premio), array('view', 'id'=>$data->id_hoja_premio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_premio')); ?>:</b>
	<?php echo CHtml::encode($data->id_premio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>