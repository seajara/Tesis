<?php
/* @var $this OtroController */
/* @var $model Otro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'otro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_hoja'); ?>
		<?php echo $form->hiddenField($model,'id_hoja'); ?>
		<?php echo $form->error($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Modificar' : 'Save'); ?>
                <?php echo CHtml::button('Atras', array('submit'=>'../../hojaDeVida/update/'.$model->id_hoja));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->