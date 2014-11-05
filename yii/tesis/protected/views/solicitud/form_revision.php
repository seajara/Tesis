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
		<?php echo $form->textField($model,'nombre',array('disabled'=> true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>

            </td>
            <td>
                <?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('disabled'=> true,'size'=>30,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('disabled'=> true,'size'=>30,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_paterno'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('disabled'=> true,'size'=>30,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_materno'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'id_comuna'); ?>
		<?php echo $form->textField($model,'id_comuna',array('value'=>$model->idComuna->nombre ,'disabled'=> true, 'size'=>30)); ?>
		<?php echo $form->error($model,'id_comuna'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('disabled'=> true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'direccion'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php echo $form->textField($model,'fecha_nac',array('disabled'=> true, 'size'=>30)); ?>
		<?php echo $form->error($model,'fecha_nac'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('disabled'=> true, 'size'=>30)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('disabled'=> true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'profesion'); ?>
            </td>
            <td>
		<?php echo $form->labelEx($model,'trabajo'); ?>
		<?php echo $form->textField($model,'trabajo',array('disabled'=> true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'trabajo'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('disabled'=> true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'patrocinador'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'rut_pat'); ?>
		<?php echo $form->textField($model,'rut_pat',array('disabled'=> true,'size'=>30,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut_pat'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado', array('Pendiente'=>'Pendiente','Rechazado'=>'Rechazado', 'Aceptado'=>'Aceptado')); ?>
		<?php echo $form->error($model,'estado'); ?>
            </td>
            <td>
                <?php //echo $form->labelEx($model,'calidad'); ?>
		<?php echo $form->hiddenField($model,'calidad',array('disabled'=> true,'type'=>"hidden")); ?>
		<?php echo $form->error($model,'calidad'); ?>
            </td>
        </tr>
    </table>
    <div class="row">
        <label>Correo: </label> <input name="correo" id="correo" type="text"/>
    </div>
    <div class="row">
        <textarea type="text" value="hola"></textarea>
    </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar', array('confirm'=>'¿Está seguro de su respuesta?')); //envia al action donde se debe enviar el correo?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->