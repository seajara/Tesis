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

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_compania'); ?>
		<?php echo $form->hiddenField($model,'id_compania',array('type'=>"hidden")); ?>
		<?php echo $form->error($model,'id_compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>50,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_paterno'); ?>
		<?php echo $form->textField($model,'ap_paterno',array('size'=>50,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_materno'); ?>
		<?php echo $form->textField($model,'ap_materno',array('size'=>50,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ap_materno'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_comuna'); ?>
		<?php //echo $form->textField($model,'id_comuna',array('size'=>50,'maxlength'=>5)); ?>
                <?php $comunas = Comuna::model()->findAll(array('order' => 'nombre')); 
                      // format models as $key=>$value with listData
                      $lista = CHtml::listData($comunas,'id_comuna','nombre');
                      echo $form->dropDownList($model,'id_comuna',$lista,array('empty'=>'Seleccione una Comuna'));?>
		<?php echo $form->error($model,'id_comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>50,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_sanguineo'); ?>
		<?php echo $form->textField($model,'g_sanguineo',array('size'=>50,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'g_sanguineo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_militar'); ?>
		<?php echo $form->textField($model,'s_militar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'s_militar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fono_fijo'); ?>
		<?php echo $form->textField($model,'fono_fijo',array('size'=>50,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'fono_fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>50,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patrocinador'); ?>
		<?php echo $form->textField($model,'patrocinador',array('size'=>50,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'patrocinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_in'); ?>
		<?php //echo $form->textField($model,'fecha_in',array('size'=>50)); 
                      $this->widget('zii.widgets.jui.CJuiDatePicker',
                           array(
                               //'name'=>'datepicker',
                               'model'=>$model,
                               'attribute'=>'fecha_in',
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
		<?php echo $form->error($model,'fecha_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_r_in'); ?>
		<?php //echo $form->textField($model,'fecha_r_in',array('size'=>50)); 
                      $this->widget('zii.widgets.jui.CJuiDatePicker',
                           array(
                               //'name'=>'datepicker',
                               'model'=>$model,
                               'attribute'=>'fecha_r_in',
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
		<?php echo $form->error($model,'fecha_r_in'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>
        
        <br>
    
         <?php $this->endWidget(); ?>
        
        <h3><strong>Sanciones</strong></h3>
        
        <?php //echo CHtml::link('Agregar Sancion',array('sancion/create?id_hoja='.$model->id_hoja));
              echo CHtml::button('Agregar Sancion', array('submit'=>'../../sancion/create?id_hoja='.$model->id_hoja));
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'sancion-grid',
            'dataProvider'=>$modelSancion->searchBy($model->id_hoja),
            'filter'=>$modelSancion,
            'columns'=>array(
                    //'id_sancion',
                    //'id_hoja',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                    array(
                        'name' => 'procede',
                        'filter' => false, 
                    ),
                    array(
                        'name' => 'sinopsis',
                        'filter' => false,
                    ),
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("sancion/update", array("id"=>$data->id_sancion))',
                            'deleteButtonUrl'=>'Yii::app()->controller->createUrl("sancion/delete/$data->id_sancion")',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Sancion?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
)); ?>

</div><!-- form -->