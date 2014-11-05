<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con * <span class="required"></span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_compania'); ?>
		<?php echo $form->hiddenField($model,'id_compania',array('value'=>6)); ?>
		<?php echo $form->error($model,'id_compania'); ?>
	</div>

        <div class="row">
		<?php //echo $form->labelEx($model,'id_usuario'); ?>
		<?php $usuario =  Usuario::model()->findByAttributes(array('login'=>Yii::app()->user->name));
                      echo $form->hiddenField($model,'id_usuario',array('value'=>$usuario->id_usuario)); 
                ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

        <table>
        <tr>
            <td>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>

            </td>
            <td>
                <?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>30,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('size'=>30,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_paterno'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('size'=>30,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_materno'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'id_comuna'); ?>
		<?php $comunas = Comuna::model()->findAll(array('order' => 'nombre')); 
                      // format models as $key=>$value with listData
                      $lista = CHtml::listData($comunas,'id_comuna','nombre');
                      echo $form->dropDownList($model,'id_comuna',$lista,array('empty'=>'Seleccione una Comuna'));?>
		<?php echo $form->error($model,'id_comuna'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
		"attribute"=>"fecha_nac",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			"dateFormat"=>"yy-mm-dd")))?>
		<?php echo $form->error($model,'fecha_nac'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->dropDownList($model, 'estado_civil', array('Soltero'=>'Soltero(a)', 'Casado'=>'Casado(a)', 'Separado'=>'Separado(a)','Viudo'=>'Viudo(a)', 'Divorciado'=>'Divorciado(a)',)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'profesion'); ?>
            </td>
            <td>
		<?php echo $form->labelEx($model,'trabajo'); ?>
		<?php echo $form->textField($model,'trabajo',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'trabajo'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'patrocinador'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'rut_pat'); ?>
		<?php echo $form->textField($model,'rut_pat',array('size'=>30,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut_pat'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php //echo $form->labelEx($model,'calidad'); ?>
		<?php echo $form->hiddenField($model,'calidad',array('type'=>"hidden")); ?>
		<?php echo $form->error($model,'calidad'); ?>
            </td>
            <td>
                <?php //echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->hiddenField($model,'estado',array('type'=>"hidden",'value'=>'Pendiente')); ?>
		<?php echo $form->error($model,'estado'); ?>
            </td>
        </tr>
    </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Aceptar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->