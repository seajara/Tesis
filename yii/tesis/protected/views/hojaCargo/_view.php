<?php
/* @var $this HojaCargoController */
/* @var $data HojaCargo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja_cargo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hoja_cargo), array('view', 'id'=>$data->id_hoja_cargo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->id_cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ini')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />


</div>