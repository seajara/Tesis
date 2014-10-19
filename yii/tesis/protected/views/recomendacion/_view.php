<?php
/* @var $this RecomendacionController */
/* @var $data Recomendacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_recomendacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_recomendacion), array('view', 'id'=>$data->id_recomendacion)); ?>
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