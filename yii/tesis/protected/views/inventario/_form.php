<?php
/* @var $this InventarioController */
/* @var $model Inventario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_inventario'); ?>
		<?php echo $form->textField($model,'id_inventario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'id_inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_subcategoria'); ?>
		<?php echo $form->textField($model,'id_subcategoria'); ?>
		<?php echo $form->error($model,'id_subcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_compania'); ?>
		<?php echo $form->textField($model,'id_compania'); ?>
		<?php echo $form->error($model,'id_compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedor'); ?>
		<?php echo $form->textField($model,'proveedor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_in'); ?>
		<?php echo $form->textField($model,'fecha_in'); ?>
		<?php echo $form->error($model,'fecha_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movil'); ?>
		<?php echo $form->textField($model,'movil',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'movil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->