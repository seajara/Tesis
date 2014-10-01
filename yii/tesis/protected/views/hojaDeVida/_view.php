<?php
/* @var $this HojaDeVidaController */
/* @var $data HojaDeVida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hoja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hoja), array('view', 'id'=>$data->id_hoja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->id_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_compania')); ?>:</b>
	<?php echo CHtml::encode($data->id_compania); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comuna')); ?>:</b>
	<?php echo CHtml::encode($data->id_comuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ap_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->ap_paterno); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ap_materno')); ?>:</b>
	<?php echo CHtml::encode($data->ap_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesion')); ?>:</b>
	<?php echo CHtml::encode($data->profesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g_sanguineo')); ?>:</b>
	<?php echo CHtml::encode($data->g_sanguineo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_militar')); ?>:</b>
	<?php echo CHtml::encode($data->s_militar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fono_fijo')); ?>:</b>
	<?php echo CHtml::encode($data->fono_fijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patrocinador')); ?>:</b>
	<?php echo CHtml::encode($data->patrocinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_in')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_r_in')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_r_in); ?>
	<br />

	*/ ?>

</div>