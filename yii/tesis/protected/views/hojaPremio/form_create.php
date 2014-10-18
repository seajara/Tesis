<?php
/* @var $this HojaPremioController */
/* @var $model HojaPremio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoja-premio-form',
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
		<?php echo $form->labelEx($model,'id_premio'); ?>
		<?php //echo $form->textField($model,'id_premio'); 
                      $premios = Premio::model()->findAll(array('order' => 'descripcion')); 
                      // format models as $key=>$value with listData
                      $lista = CHtml::listData($premios,'id_premio','descripcion');
                      echo $form->dropDownList($model,'id_premio',$lista,array('empty'=>'Seleccione un Premio'));
                ?>
		<?php echo $form->error($model,'id_premio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php //echo $form->textField($model,'fecha'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                           array(
                               //'name'=>'datepicker',
                               'model'=>$model,
                               'attribute'=>'fecha',
                               'language'=>'es',
                               'options'=>array(
                                   'dateFormat'=>'yy-mm-dd',
                                   'constrainInput'=>'false',
                                   'duration'=>'fast',
                                   'showAnim'=>'slide',
                               ),
                           )  
                      );
                ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save'); ?>
                <?php echo CHtml::button('Atras', array('submit'=>'../hojaDeVida/update/'.$id_hoja));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->