<?php
/* @var $this OtroController */
/* @var $data Otro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_otro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_otro), array('view', 'id'=>$data->id_otro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>