<?php
/* @var $this InventarioController */
/* @var $model Inventario */
/* @var $form CActiveForm */
if(empty($id_categoria)){
    $modelFiltro = new Filtro;
    $subcategorias = Subcategoria::model()->findAll(array('order' => 'nombre'));
}else{
    echo "<h1>Agregar Elemento</h1>";
    $subcategorias = Subcategoria::model()->findAllByAttributes(array('id_categoria'=>$id_categoria),array('order' => 'nombre'));
}
?>
<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
<div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'filtro-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>
            <?php 
            echo $form->labelEx($modelFiltro,'id_categoria'); ?>
            <?php 
                  $categorias = Categoria::model()->findAll(array('order' => 'nombre')); 
                  $lista = CHtml::listData($categorias,'id_categoria','nombre');
                  echo $form->dropDownList($modelFiltro,'id_categoria',$lista,array('empty'=>'Todas', 'onchange'=>'Javascript:filtrarCategoria()'));
            ?>
            <?php echo $form->error($modelFiltro,'id_categoria'); ?>
            <?php $this->endWidget(); ?>

</div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
        <table>
            <td>
                <?php echo $form->labelEx($model,'id_subcategoria'); ?>
                <?php 
                $lista = CHtml::listData($subcategorias,'id_subcategoria','nombre');
                echo $form->dropDownList($model,'id_subcategoria',$lista,array('empty'=>'Seleccione una Subcategoria'));?>         
                <?php echo $form->error($model,'id_subcategoria'); ?>

                <?php echo $form->labelEx($model,'cantidad'); ?>
                <?php echo $form->numberField($model,'cantidad'); ?>
                <?php echo $form->error($model,'cantidad'); ?>

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

                <?php echo $form->labelEx($model,'estado'); ?>
                <?php //echo $form->textField($model,'estado'); 
                        echo $form->dropDownList($model, 'estado', array('Operativo'=>'Operativo','No Operativo'=>'No Operativo','De Baja'=>'De Baja'));
                ?>
                <?php echo $form->error($model,'estado'); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'nombre'); ?>
                <?php echo $form->textField($model,'nombre',array('size'=>25)); ?>
                <?php echo $form->error($model,'nombre'); ?>

                <?php echo $form->labelEx($model,'descripcion'); ?>
                <?php echo $form->textArea($model,'descripcion',array('style'=>'width: 200px; height:50px')); ?>
                <?php echo $form->error($model,'descripcion'); ?>

                <?php echo $form->labelEx($model,'proveedor'); ?>
                <?php echo $form->textField($model,'proveedor',array('size'=>25)); ?>
                <?php echo $form->error($model,'proveedor'); ?>
            </td>  
        </table>
     
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
   
 
        <?php /*echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('inventario/UpdateAjax'), 
                              array('update' => '#data'), array('id'=>'ajaxBtn'));*/
        ?>