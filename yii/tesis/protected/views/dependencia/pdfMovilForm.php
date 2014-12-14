<h1>Seleccionar Dependencia</h1>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'filtro-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php //echo $form->labelEx($model,'id_categoria'); ?>
		<?php 
                      echo $form->hiddenfield($model,'id_categoria', array('value'=>1));
                ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'id_dependencia'); ?>
		<?php 
                      $dependencias = Dependencia::model()->findAll(array('order' => 'nombre')); 
                      $lista = CHtml::listData($dependencias,'id_dependencia','nombre');
                      echo $form->dropDownList($model,'id_dependencia',$lista,array('empty'=>'Todas', 'onchange'=>'Javascript:filtrarDependencia()'));
                ?>
		<?php echo $form->error($model,'id_dependencia'); ?>
	</div>
        <?php $this->endWidget(); ?>
</div>
