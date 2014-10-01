<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoja-de-vida-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_hoja'); ?>
		<?php echo $form->textField($model,'id_hoja'); ?>
		<?php echo $form->error($model,'id_hoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_solicitud'); ?>
		<?php echo $form->textField($model,'id_solicitud'); ?>
		<?php echo $form->error($model,'id_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_compania'); ?>
		<?php echo $form->textField($model,'id_compania'); ?>
		<?php echo $form->error($model,'id_compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_comuna'); ?>
		<?php echo $form->textField($model,'id_comuna',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_sanguineo'); ?>
		<?php echo $form->textField($model,'g_sanguineo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'g_sanguineo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_militar'); ?>
		<?php echo $form->textField($model,'s_militar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'s_militar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fono_fijo'); ?>
		<?php echo $form->textField($model,'fono_fijo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'fono_fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'patrocinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_in'); ?>
		<?php echo $form->textField($model,'fecha_in'); ?>
		<?php echo $form->error($model,'fecha_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_r_in'); ?>
		<?php echo $form->textField($model,'fecha_r_in'); ?>
		<?php echo $form->error($model,'fecha_r_in'); ?>
	</div>

        <div class="row">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hoja-de-vida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_hoja',
		/*'id_solicitud',
		'id_compania',
		'id_comuna',*/
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
		'direccion',
		'email',
		/*'estado_civil',
		'profesion',
		'g_sanguineo',
		's_militar',
		'fono_fijo',
		'celular',
		'patrocinador',
		'fecha_in',
		'fecha_r_in',*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

            <table>
                <tr>
                    <td>Cursos</td>
                    <td>Cargos</td>
                </tr>
                
            </table>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->