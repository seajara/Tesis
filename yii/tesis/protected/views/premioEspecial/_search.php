<?php
/* @var $this PremioEspecialController */
/* @var $model PremioEspecial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_premio_esp'); ?>
		<?php echo $form->textField($model,'id_premio_esp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clase'); ?>
		<?php echo $form->textField($model,'clase',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'procede'); ?>
		<?php echo $form->textField($model,'procede',array('size'=>60,'maxlength'=>100)); ?>
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