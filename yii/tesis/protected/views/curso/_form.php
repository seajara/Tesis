<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prerequisito'); ?>
		<?php //echo $form->textField($model,'id_prerequisito');
                    if($model->id_curso!=''){
                        $criteria = new CDbCriteria();
                        $criteria->addCondition("id_curso != $model->id_curso");
                        $prerequisitos = Curso::model()->findAll($criteria, array('order' => 'nombre'));
                    }else{
                        $prerequisitos = Curso::model()->findAll(array('order' => 'nombre'));
                    }
                    $lista = CHtml::listData($prerequisitos,'id_curso','nombre');
                    echo $form->dropDownList($model,'id_prerequisito',$lista,array('empty'=>'Ninguno'));
                ?>
		<?php echo $form->error($model,'id_prerequisito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>68,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('maxlength'=>300, 'style'=>'width: 500px; height: 120px;')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->hiddenField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->