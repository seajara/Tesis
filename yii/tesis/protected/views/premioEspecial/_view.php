<?php
/* @var $this PremioEspecialController */
/* @var $data PremioEspecial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_premio_esp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_premio_esp), array('view', 'id'=>$data->id_premio_esp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase')); ?>:</b>
	<?php echo CHtml::encode($data->clase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procede')); ?>:</b>
	<?php echo CHtml::encode($data->procede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>