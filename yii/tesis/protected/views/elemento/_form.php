<?php
/* @var $this ElementoController */
/* @var $model Elemento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elemento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
        
	<?php echo $form->errorSummary($model); ?>
        <table>
            <td>

            <div class="row">
                    <?php echo $form->labelEx($model,'id_dependencia'); ?>
                    <?php 
                    $dependencias = Dependencia::model()->findAll(array('order' => 'nombre')); 
                    $lista = CHtml::listData($dependencias,'id_dependencia','nombre');
                    echo $form->dropDownList($model,'id_dependencia',$lista,array('empty'=>'Seleccione una Dependencia'));?>         
                    <?php echo $form->error($model,'id_dependencia'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'fecha_in'); ?>
                    <?php //echo $form->textField($model,'fecha_in'); 
                        $this->widget('zii.widgets.jui.CJuiDatePicker',
                            array(
                                //'name'=>'datepicker',
                                'model'=>$model,
                                'attribute'=>'fecha_in',
                                 'htmlOptions' => array('readonly'=>"readonly"),
                                   'options'=>array(
                                        'autoSize'=>true,
                                        'dateFormat'=>'yy-mm-dd',
                                        'selectOtherMonths'=>true,
                                        'showAnim'=>'slide',
                                        'showButtonPanel'=>true, 
                                        'showOtherMonths'=>true, 
                                        'changeMonth' => 'true', 
                                        'changeYear' => 'true', 
                                        'minDate'=>'-20y', 
                                        'maxDate'=> date("Y-m-d"),
                                    )  
                        ));
                    ?>
                    <?php echo $form->error($model,'fecha_in'); ?>  
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'estado'); ?>
                    <?php //echo $form->textField($model,'estado'); 
                            echo $form->dropDownList($model, 'estado', array('Operativo'=>'Operativo','No Operativo'=>'No Operativo','De Baja'=>'De Baja'));
                    ?>
                    <?php echo $form->error($model,'estado'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'observaciones'); ?>
                    <?php echo $form->textArea($model,'observaciones',array('style'=>'width: 200px')); ?>
                    <?php echo $form->error($model,'observaciones'); ?>
            </div>
            </td>
            <td>
            <div class="row">
                    <?php echo $form->labelEx($model,'nro_serie'); ?>
                    <?php echo $form->textField($model,'nro_serie',array('size'=>35)); ?>
                    <?php echo $form->error($model,'nro_serie'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'responsable'); ?>
                    <?php echo $form->textField($model,'responsable',array('size'=>35)); ?>
                    <?php echo $form->error($model,'responsable'); ?>
            </div>

            <div class="row">
                <?php if(!$model->isNewRecord)
                    echo CHtml::image(Yii::app()->request->baseUrl.'/barcodes/'.$model->codigo_elemento); 
                ?>
            </div>

            </td>
        </table>
 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->