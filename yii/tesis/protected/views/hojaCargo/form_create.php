<?php
/* @var $this HojaCargoController */
/* @var $model HojaCargo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoja-cargo-form',
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
		<?php echo $form->hiddenField($model,'id_hoja', array('value'=>$id_hoja)); ?>
		<?php echo $form->error($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cargo'); ?>
		<?php //echo $form->textField($model,'id_cargo'); 
                    $cargos = Cargo::model()->findAll(array('order' => 'descripcion')); 
                      // format models as $key=>$value with listData
                      $lista = CHtml::listData($cargos,'id_cargo','descripcion');
                      echo $form->dropDownList($model,'id_cargo',$lista,array('empty'=>'Seleccione un Cargo'));
                ?>
		<?php echo $form->error($model,'id_cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ini'); ?>
		<?php //echo $form->textField($model,'fecha_ini'); 
                    $this->widget('zii.widgets.jui.CJuiDatePicker',
                           array(
                               //'name'=>'datepicker',
                               'model'=>$model,
                               'attribute'=>'fecha_ini',
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
		<?php echo $form->error($model,'fecha_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php //echo $form->textField($model,'fecha_fin'); 
                    $this->widget('zii.widgets.jui.CJuiDatePicker',
                           array(
                               //'name'=>'datepicker',
                               'model'=>$model,
                               'attribute'=>'fecha_fin',
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
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save'); ?>
                <?php echo CHtml::button('Atras', array('submit'=>'../hojaDeVida/update/'.$id_hoja));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->