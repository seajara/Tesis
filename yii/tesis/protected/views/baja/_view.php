<?php
/* @var $this BajaController */
/* @var $data Baja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_baja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_baja), array('view', 'id'=>$data->id_baja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procede')); ?>:</b>
	<?php echo CHtml::encode($data->procede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sinopsis')); ?>:</b>
	<?php echo CHtml::encode($data->sinopsis); ?>
	<br />


</div>