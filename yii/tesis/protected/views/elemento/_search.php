<?php
/* @var $this ElementoController */
/* @var $model Elemento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_elemento'); ?>
		<?php echo $form->textField($model,'id_elemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inventario'); ?>
		<?php echo $form->textField($model,'id_inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dependencia'); ?>
		<?php echo $form->textField($model,'id_dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_in'); ?>
		<?php echo $form->textField($model,'fecha_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->