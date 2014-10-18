<?php
/* @var $this HojaPremioController */
/* @var $model HojaPremio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_hoja_premio'); ?>
		<?php echo $form->textField($model,'id_hoja_premio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_premio'); ?>
		<?php echo $form->textField($model,'id_premio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->