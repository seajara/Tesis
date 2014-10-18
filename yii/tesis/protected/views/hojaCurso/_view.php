<?php
/* @var $this HojaCursoController */
/* @var $data HojaCurso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja_curso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hoja_curso), array('view', 'id'=>$data->id_hoja_curso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->id_hoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_curso')); ?>:</b>
	<?php echo CHtml::encode($data->id_curso); ?>
	<br />


</div>