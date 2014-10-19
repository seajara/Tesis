<?php
/* @var $this OtroController */
/* @var $model Otro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_otro'); ?>
		<?php echo $form->textField($model,'id_otro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->