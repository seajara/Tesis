<?php
/* @var $this InventarioController */
/* @var $model Inventario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        <table>
            <tr>
                <td>
					<?php echo $form->labelEx($model,'id_inventario'); ?>
					<?php echo $form->textField($model,'id_inventario'); ?>
					<?php echo $form->error($model,'id_inventario'); ?>
                </td>
                <td>
					<?php echo $form->labelEx($model,'id_subcategoria'); ?>
					<?php //echo $form->textField($model,'id_subcategoria'); 
					$subcategorias = Subcategoria::model()->findAll(array('order' => 'nombre')); 
					// format models as $key=>$value with listData
					$lista = CHtml::listData($subcategorias,'id_subcategoria','nombre');
					echo $form->dropDownList($model,'id_subcategoria',$lista,array('empty'=>'Seleccione una Subcategoria'));?>         
					<?php echo $form->error($model,'id_subcategoria'); ?>
                </td>
            </tr>
            <tr>
				<?php //echo $form->labelEx($model,'id_compania'); ?>
				<?php echo $form->hiddenField($model,'id_compania', array('value'=>6)); ?>
				<?php echo $form->error($model,'id_compania'); ?>
                <td>
					<?php echo $form->labelEx($model,'descripcion'); ?>
					<?php echo $form->textField($model,'descripcion'); ?>
					<?php echo $form->error($model,'descripcion'); ?>
                </td>
                <td>
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
                </td>
            </tr>
            <tr>
                <td>
					<?php echo $form->labelEx($model,'proveedor'); ?>
					<?php echo $form->textField($model,'proveedor'); ?>
					<?php echo $form->error($model,'proveedor'); ?>
                </td>
                <td>	
					<?php echo $form->labelEx($model,'estado'); ?>
					<?php //echo $form->textField($model,'estado'); 
						echo $form->dropDownList($model, 'estado', array('Nuevo'=>'Nuevo','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo', 'Baja'=>'Baja'));
					?>
					<?php echo $form->error($model,'estado'); ?>	
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'responsable'); ?>
					<?php echo $form->textField($model,'responsable'); ?>
					<?php echo $form->error($model,'responsable'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'movil'); ?>
					<?php //echo $form->textField($model,'movil',array('size'=>30,'maxlength'=>50)); 
						echo $form->dropDownList($model, 'movil', array(''=>'','B-6'=>'B-6','Z-6'=>'Z-6'));
					?>
					<?php echo $form->error($model,'movil'); ?>	
				</td>
            </tr>
            <tr>
                <td>
					<?php echo $form->labelEx($model,'cantidad'); ?>
					<?php echo $form->numberField($model,'cantidad'); ?>
					<?php echo $form->error($model,'cantidad'); ?>
                </td>
            </tr>
            <tr>
                <td>
					<?php echo $form->labelEx($model,'observaciones'); ?>
					<?php echo $form->textField($model,'observaciones'); ?>
					<?php echo $form->error($model,'observaciones'); ?>
                </td>
            </tr> 
        </table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->