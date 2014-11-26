<?php
/* @var $this ElementoController */
/* @var $model Elemento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elemento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_elemento'); ?>
		<?php echo $form->textField($model,'id_elemento'); ?>
		<?php echo $form->error($model,'id_elemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_inventario'); ?>
		<?php echo $form->textField($model,'id_inventario'); ?>
		<?php echo $form->error($model,'id_inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dependencia'); ?>
		<?php echo $form->textField($model,'id_dependencia'); ?>
		<?php echo $form->error($model,'id_dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_in'); ?>
		<?php echo $form->textField($model,'fecha_in'); ?>
		<?php echo $form->error($model,'fecha_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->