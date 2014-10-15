<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja',array('size'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'id_compania'); ?>
		<?php echo $form->hiddenField($model,'id_compania',array('type'=>"hidden", 'value'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_comuna'); ?>
		<?php echo $form->textField($model,'id_comuna',array('size'=>50,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>50,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('size'=>50,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('size'=>50,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>50,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_sanguineo'); ?>
		<?php echo $form->textField($model,'g_sanguineo',array('size'=>50,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_militar'); ?>
		<?php echo $form->textField($model,'s_militar',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fono_fijo'); ?>
		<?php echo $form->textField($model,'fono_fijo',array('size'=>50,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>50,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('size'=>50,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_in'); ?>
		<?php echo $form->textField($model,'fecha_in',array('size'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_r_in'); ?>
		<?php echo $form->textField($model,'fecha_r_in',array('size'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->