<?php
/* @var $this HojaCursoController */
/* @var $model HojaCurso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoja-curso-form',
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
		<?php echo $form->hiddenField($model,'id_hoja',array('value'=>$id_hoja)); ?>
		<?php echo $form->error($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_curso'); ?>
		<?php //echo $form->textField($model,'id_curso');
                      $cursos = Curso::model()->findAll(array('order' => 'nombre')); 
                      // format models as $key=>$value with listData
                      $lista = CHtml::listData($cursos,'id_curso','nombre');
                      echo $form->dropDownList($model,'id_curso',$lista,array('empty'=>'Seleccione un Curso'));?>
		<?php echo $form->error($model,'id_curso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save'); ?>
                <?php echo CHtml::button('Atras', array('submit'=>'../hojaDeVida/update/'.$id_hoja));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->