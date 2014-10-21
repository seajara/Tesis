<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_compania'); ?>
		<?php echo $form->textField($model,'id_compania',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'id_compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_comuna'); ?>
		<?php echo $form->textField($model,'id_comuna',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'id_comuna'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'id_cuenta_postulante'); ?>
		<?php echo $form->textField($model,'id_cuenta_postulante',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'id_cuenta_postulante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'rut'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'ap_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'ap_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php echo $form->textField($model,'fecha_nac',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trabajo'); ?>
		<?php echo $form->textField($model,'trabajo',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'trabajo'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'patrocinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_pat'); ?>
		<?php echo $form->textField($model,'rut_pat',array('disabled'=> true, 'size'=>50)); ?>
		<?php echo $form->error($model,'rut_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado', array('Pendiente'=>'Pendiente','Rechazado'=>'Rechazado', 'Aceptado'=>'Aceptado')); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); //envia al action donde se debe enviar el correo?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->