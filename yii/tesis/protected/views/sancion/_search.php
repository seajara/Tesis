<?php
/* @var $this SancionController */
/* @var $model Sancion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sancion'); ?>
		<?php echo $form->textField($model,'id_sancion',array('size'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja',array('size'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'procede'); ?>
		<?php echo $form->textField($model,'procede',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sinopsis'); ?>
		<?php echo $form->textField($model,'sinopsis',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->